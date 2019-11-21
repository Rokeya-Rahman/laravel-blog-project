<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use View;
use App\Category;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Schema::defaultStringLength(191);

        //View::shere('name', 'Blog');                              [For all]

//        View::composer('*', function ($view) {
//            $view->name = 'Blog';
//        });

//        View::composer('admin.category.add-category', function ($view) {
//            $view->name = 'Blog';
//        });

//        View::composer(['admin.category.add-category', 'admin.blog.add-blog'], function ($view) {
//            $view->name = 'Blog';
//        });
//
//
        View::composer(['front-end.*'], function ($view) {
            $view->categories   =   Category::where('publication_status', 1)->get();
        });
        
        
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
