<?php

namespace App\Providers;

use App\View\Composers\LangComposer;
use Illuminate\Support\Facades;
//use Illuminate\View\View;
use Illuminate\Support\ServiceProvider;


class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Facades\View::composer(['front.home.home-sidebar','layouts.front.header','layouts.front.sidebar','layouts.front','front.cart','front.order-complete'],LangComposer::class);

    }
}
