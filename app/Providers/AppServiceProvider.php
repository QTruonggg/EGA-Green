<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\User;
use App\Models\Banner;
use App\Models\Category;
use App\Models\CategoryProducts;
use App\Models\SubCategoryProducts;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function($view) {
            $view->with([
                'category_products'=>CategoryProducts::orderBy('created_at','ASC')->where('parent_id', '=', '0')->with('childs')->get(),
                'subcategory'=>SubCategoryProducts::all(),
                'category'=>Category::all(),
                'banner'=>Banner::all(),
                // 'product_cart'=>Cart::content(),
                'user'=>User::first(),
                // 'product_blog'=>Product::orderBy('created_at', "ASC")->where('status','=', '1')->get(),

                // 'blog'=> Blog::orderBy('created_at', 'DESC')->limit(10)->get(),

                // 'config'=>Config::first(),
            ]);
        });
    }
}
