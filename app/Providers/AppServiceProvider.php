<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Lang;
use App\Models\TranslateHome;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Pagination\Paginator;
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
        Paginator::defaultView('pagination::views.front.shop');
        Paginator::defaultSimpleView('pagination::views.front.shop');

    }
}
