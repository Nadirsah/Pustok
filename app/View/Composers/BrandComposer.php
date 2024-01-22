<?php

namespace App\View\Composers;

//use App\Repositories\UserRepository;
use App\Models\Brand;
use Illuminate\View\View;
class BrandComposer
{
public function compose(View $view):void
{
    $brand=Brand::all();
    $view->with('brand', $brand);

}
}
