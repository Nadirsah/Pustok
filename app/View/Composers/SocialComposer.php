<?php

namespace App\View\Composers;

//use App\Repositories\UserRepository;
use App\Models\Social;
use Illuminate\View\View;
class SocialComposer
{
public function compose(View $view):void
{
    $social=Social::all();
    $view->with('social', $social);

}
}
