<?php

namespace App\View\Composers;

//use App\Repositories\UserRepository;
use App\Models\Category;
use App\Models\Lang;
use App\Models\TranslateHome;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;
class LangComposer
{
public function compose(View $view):void
{   $transhome=TranslateHome::first();
    $lang=Lang::get();
    $categories=Category::with('children')->get();
    $view->with('categories', $categories);
    $view->with('lang', $lang);
    $view->with('transhome', $transhome);
}
}
