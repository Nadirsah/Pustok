<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Lang;
use App\Models\TranslateHome;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {



//        $categories=Category::with('children')->get();
//        $lang=Lang::get();
//        $transhome=TranslateHome::first();
//        View::share('categories',$categories);
//        View::share('lang',$lang);
//        View::share('transhome',$transhome);

//        View::composer('*',
//            function ($view){
//                $categories=Category::with('children')->get();
//                $lang=Lang::get();
//                $transhome=TranslateHome::first();
//                $view->with('categories', $categories)->with('lang', $lang)->with('transhome', $transhome);
//
//            });
    }
}
