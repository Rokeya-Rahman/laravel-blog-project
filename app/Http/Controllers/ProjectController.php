<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
use App\Comment;
use Illuminate\Http\Request;
use DB;

class ProjectController extends Controller
{
    public function index() {
        return view('front-end.home.home', [
            'blogs'         =>  Blog::where('publication_status', 1)->orderby('id', 'desc')->get(),
            'populerBlogs'  =>  Blog::orderby('hit_count', 'desc')->get()
        ]);
    }

    public function categoryBlog($id, $name) {
        return view('front-end.category.category-blog', [
            'blogs'         =>  Blog::where('category_id', $id)->where('publication_status', 1)->get()
        ]);
    }

    public function blogDetails($id) {

        $blog = Blog::find($id);
        $blog->hit_count = $blog->hit_count + 1;
        $blog->save();



        return view('front-end.blog.blog-details', [
            'blog'          =>  Blog::find($id),
            'comments'      =>  DB::table('comments')
                                    ->join('visitors', 'comments.visitor_id', '=', 'visitors.id')
                                    ->select('comments.*', 'visitors.first_name', 'visitors.last_name')
                                    ->where('comments.blog_id', $id)
                                    ->where('comments.publication_status', 1)
                                    ->orderBy('id', 'desc')
                                    ->get()
        ]);
    }
}
