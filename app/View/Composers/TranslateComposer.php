<?php

namespace App\View\Composers;

//use App\Repositories\UserRepository;
use App\Models\Translate;
use App\Models\Translate1;
use App\Models\Translate2;
use App\Models\Translate3;
use App\Models\TranslateHome;
use Spatie\TranslationLoader\LanguageLine;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;
class TranslateComposer
{
public function compose(View $view):void
{   $lang=LanguageLine::all();
    $trans=Translate::first();
    $trans1=Translate1::first();
    $trans2=Translate2::first();
    $trans3=Translate3::first();
    $view->with('trans', $trans);
    $view->with('trans1', $trans1);
    $view->with('trans2', $trans2);
    $view->with('trans3', $trans3);
    $view->with('lang', $lang);

}
}
