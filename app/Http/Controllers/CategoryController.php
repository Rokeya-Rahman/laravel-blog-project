<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function addCategory() {
        return view('admin.category.add-category');
    }

    protected function checkCategoryData($request) {
        $this->validate($request, [
            'category_name'         =>  'required|regex:/(^([a-zA-Z _]+)(\d+)?$)/u|max:10|min:3',
            'category_description'  =>  'required'
        ]);
    }

    public function newCategory(Request $request) {

        $this->checkCategoryData($request);


        Category::saveCategoryInfo($request);

//        $category = new Category();
//        $category->saveCategoryInfo($request);

        return redirect('/category/add-category')->with('massage', 'Category info save successfully');
    }

    public function manageCategory() {
        //$categories = Category::all();
        return view('admin.category.manage-category', [
            //'categories' => $categories
            'categories' => Category::all()
        ]);
    }

    public function editCategory($id) {
        return view('admin.category.edit-category', [
            'category' => Category::find($id)
        ]);
    }

    public function updateCategory(Request $request) {
        Category::updateCategoryInfo($request);

        return redirect('/category/manage-category')->with('massage', 'Category info update successfully');
    }

    public function deleteCategory(Request $request) {
        $blog = Blog::where('category_id', $request->id)->first();

        if ($blog) {
            return redirect('/category/manage-category')->with('massage', 'Sorry we can not delete this category because some blog have this category');

        } else {
            $category = Category::find($request->id);
            $category->delete();

            return redirect('/category/manage-category')->with('massage', 'Category info delete successfully');
        }
    }
}
