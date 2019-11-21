<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
use App\Comment;
use Illuminate\Http\Request;
use DB;

class BlogController extends Controller
{
    public function addBlog() {
        //$categories = Category::where('publication_status', 1)->skip(2)->take(1)->get();
        //$categories = Category::where('publication_status', 1)->first();
        //$categories = Category::where('publication_status', 1)->get();

        return view('admin.blog.add-blog', [
            'categories' => Category::where('publication_status', 1)->get()
        ]);
    }

    private function imageUpload($blogImage) {
        $imageName  = $blogImage->getClientOriginalName();
        $directory  = 'blog-image/';
        $blogImage->move($directory, $imageName);

        return $directory.$imageName;
    }

    public function newBlog(Request $request) {
//        $image = $_FILES['blog_image'];
//        print_r($image);
//        exit();


//        $image = $request->file('blog_image');
//        //return $image;
//        //return $image->getClientOriginalName();
//        return $image->getClientOriginalExtension();


        //$blogImage  = $request->file('blog_image');


//        $imageName  = $blogImage->getClientOriginalName();
//        $directory  = 'blog-image/';
//        $blogImage->move($directory, $imageName);

        $blog = new Blog();
        $blog->category_id              =  $request->category_id;
        $blog->blog_title               =  $request->blog_title;
        $blog->blog_short_description   =  $request->blog_short_description;
        $blog->blog_long_description    =  $request->blog_long_description;
        //$blog->blog_image               =  $this->imageUpload($blogImage);
        $blog->blog_image               =  $this->imageUpload($request->file('blog_image'));
        $blog->publication_status       =  $request->publication_status;
        $blog->save();

        return redirect('/blog/add-blog')->with('massage', 'Blog info save successfully');
    }

    public function manageBlog() {
        $blogs = DB::table('blogs')
                    ->join('categories', 'blogs.category_id', '=', 'categories.id')
                    ->select('blogs.*', 'categories.category_name')
                    ->orderby('blogs.id', 'desc')
                    ->get();

        return view('admin.blog.manage-blog', [
            'blogs'  => $blogs
        ]);
    }

    public function editblog($id) {
        return view('admin.blog.edit-blog', [
            'categories'    =>  Category::where('publication_status', 1)->get(),
            'blog'          =>  Blog::find($id)
        ]);
    }

    public function updateBlog(Request $request) {
        $blog       = Blog::find($request->id);
        $blogImage  = $request->file('blog_image');

        if ($blogImage) {
            unlink($blog->blog_image);
            $imagePath = $this->imageUpload($blogImage);
        }

        $blog->category_id              =  $request->category_id;
        $blog->blog_title               =  $request->blog_title;
        $blog->blog_short_description   =  $request->blog_short_description;
        $blog->blog_long_description    =  $request->blog_long_description;
        if (isset($imagePath)) {
            $blog->blog_image           =  $imagePath;
        }
        $blog->publication_status       =  $request->publication_status;
        $blog->save();

        return redirect('/blog/manage-blog')->with('massage', 'Blog info update successfully');
    }

    public function deleteBlog(Request $request) {
        $blog = Blog::find($request->id);

        if (file_exists($blog->blog_image)) {
            unlink($blog->blog_image);
        }

        $blog->delete();

        return redirect('/blog/manage-blog')->with('massage', 'Blog info delete successfully');
    }

    public function manageComment() {
        return view('admin.comment.manage-comment', [
            'comments'      =>  DB::table('comments')
                                    ->join('visitors', 'comments.visitor_id', '=', 'visitors.id')
                                    ->join('blogs', 'comments.blog_id', '=', 'blogs.id')
                                    ->select('comments.*', 'visitors.first_name', 'visitors.last_name', 'blogs.blog_title')
                                    ->orderBy('id', 'desc')
                                    ->get()
        ]);
    }

    public function publishedComment($id) {
        $comment = Comment::find($id);
        $comment->publication_status = 1;
        $comment->save();

        return redirect('/manage-comments');
    }

    public function unpublishedComment($id) {
        $comment = Comment::find($id);
        $comment->publication_status = 0;
        $comment->save();

        return redirect('/manage-comments');
    }
}
