<?php

namespace App\Providers;

use App\View\Composers\BrandComposer;
use App\View\Composers\LangComposer;
use App\View\Composers\SocialComposer;
use App\View\Composers\SettingComposer;
use App\View\Composers\TranslateComposer;
use App\View\Composers\MessageComposer;
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
        Facades\View::composer(['front.home.home-sidebar','layouts.front.header','layouts.front.sidebar','layouts.front','front.cart','front.order-complete','front.checkout','front.faq',],LangComposer::class);
        Facades\View::composer('*',SettingComposer::class);
        Facades\View::composer(['layouts.front.footer','layouts.front','front.faq'],SocialComposer::class);
        Facades\View::composer(['front.home.home-sidebar'],LangComposer::class);
        Facades\View::composer('layouts.front.brand',BrandComposer::class);
        Facades\View::composer('layouts.admin.sidebar',MessageComposer::class);

    }


}