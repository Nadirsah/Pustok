<?php

namespace App\View\Composers;

//use App\Repositories\UserRepository;
use App\Models\User_msj;
use Illuminate\View\View;
class MessageComposer
{
public function compose(View $view):void
{
    $message=User_msj::where('status',0)->count('status');
    $view->with('message', $message);

}
}