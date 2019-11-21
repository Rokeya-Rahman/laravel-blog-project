<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/404', 'ErrorHandleController@error404');
Route::get('/405', 'ErrorHandleController@error405');



Route::get('/', [
    'uses'  => 'ProjectController@index',
    'as'    => '/'
]);

Route::get('/category-blog/{id}/{name}', [
    'uses'          => 'ProjectController@categoryBlog',
    'as'            => 'category-blog',
    //'middleware'    =>  'visitor'
]);

Route::get('/blog-details/{id}', [
    'uses'  => 'ProjectController@blogDetails',
    'as'    => 'blog-details'
]);




Route::get('/sign-up', [
    'uses'  => 'RegisterController@singUp',
    'as'    => 'sign-up'
]);

Route::post('/new-sign-up', [
    'uses'  => 'RegisterController@newSignUp',
    'as'    => 'new-sign-up'
]);

Route::post('/visitor-logout', [
    'uses'  => 'RegisterController@visitorLogout',
    'as'    => 'visitor-logout'
]);

Route::get('/visitor-login', [
    'uses'  => 'RegisterController@visitorLogin',
    'as'    => 'visitor-login'
]);

Route::post('/new-login', [
    'uses'  => 'RegisterController@newLogin',
    'as'    => 'new-login'
]);

Route::post('/new-comment', [
    'uses'  => 'CommentController@newComment',
    'as'    => 'new-comment'
]);

Route::get('/email-check/{email}', [
    'uses'  => 'RegisterController@emailCheck',
    'as'    => 'email-check'
]);



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::group(['middleware'  =>  ['super-admin']], function () {

    Route::get('/category/add-category', [
        'uses'  => 'CategoryController@addCategory',
        'as'    => 'add-category'
    ]);

    Route::post('/category/new-category', [
        'uses'  => 'CategoryController@newCategory',
        'as'    => 'new-category'
    ]);

    Route::get('/category/manage-category', [
        'uses'  => 'CategoryController@manageCategory',
        'as'    => 'manage-category'
    ]);

    Route::get('/category/edit-category/{id}', [
        'uses'  =>  'CategoryController@editCategory',
        'as'    =>  'edit-category'
    ]);

    Route::post('/category/update-category', [
        'uses'  =>  'CategoryController@updateCategory',
        'as'    =>  'update-category'
    ]);

    Route::post('/category/delete-category', [
        'uses'  =>  'CategoryController@deleteCategory',
        'as'    =>  'delete-category'
    ]);

});



Route::get('/blog/add-blog', [
    'uses'  =>  'BlogController@addBlog',
    'as'    =>  'add-blog'
]);

Route::post('/blog/new-blog', [
    'uses'  =>  'BlogController@newBlog',
    'as'    =>  'new-blog'
]);

Route::get('/blog/manage-blog', [
    'uses'  =>  'BlogController@manageBlog',
    'as'    =>  'manage-blog'
]);

Route::get('/blog/edit-blog/{id}', [
    'uses'  =>  'BlogController@editblog',
    'as'    =>  'edit-blog'
]);

Route::post('/category/update-blog', [
    'uses'  =>  'BlogController@updateBlog',
    'as'    =>  'update-blog'
]);

Route::post('/blog/delete-blog', [
    'uses'  =>  'BlogController@deleteBlog',
    'as'    =>  'delete-blog'
]);

Route::get('/manage-comments', [
    'uses'          =>  'BlogController@manageComment',
    'as'            =>  'manage-comment',
    'middleware'    =>  'super-admin'
]);

Route::get('/published-comment/{id}', [
    'uses'          =>  'BlogController@publishedComment',
    'as'            =>  'published-comment',
]);

Route::get('/unpublished-comment/{id}', [
    'uses'          =>  'BlogController@unpublishedComment',
    'as'            =>  'unpublished-comment',
]);
