<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\TransContentController;
use App\Http\Controllers\Admin\TransHomeController;
use App\Http\Controllers\Admin\TranslateFooterController;
use App\Http\Controllers\Admin\LangController;
use App\Http\Controllers\Admin\Usercontroller;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SocialController;
use App\Http\Controllers\Front\CartController;
use App\Http\Controllers\Front\CheckoutController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\FaqController;
use App\Http\Controllers\Front\IndexController;
use App\Http\Controllers\Front\LogResController;
use App\Http\Controllers\Front\MyAccountController;
use App\Http\Controllers\Front\OrderCompleteController;
use App\Http\Controllers\Front\ProductDetailController;
use App\Http\Controllers\Front\ShopController;
use App\Http\Controllers\Front\WishController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/redirects',[IndexController::class,'redirects']);

Route::group(['prefix'=>LaravelLocalization::setLocale(),'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath','localize','localeViewPath'       ]],function(){

    Route::get('/',[IndexController::class,'index'])->name('home');
    Route::get('/shop',[ShopController::class,'index'])->name('shop');
    Route::get('/contact',[ContactController::class,'index'])->name('contact');
    Route::get('/cart',[CartController::class,'index'])->name('cart');
    Route::get('/wish',[WishController::class,'index'])->name('wish');
    Route::get('/product-detail',[ProductDetailController::class,'index'])->name('product-detail');
    Route::get('/faq',[FaqController::class,'index'])->name('faq');
    Route::get('/checkout',[CheckoutController::class,'index'])->name('checkout');
    Route::get('/order-complete',[OrderCompleteController::class,'index'])->name('order-complete');
    Route::get('/my-account',[MyAccountController::class,'index'])->name('my-account');
    Route::get('/log-res',[LogResController::class,'index'])->name('log-res')->middleware('isLogin');
});

Route::get('/error',function(){
    return view('error');
});

Route::group(['prefix'=>'admin','middleware'=>['auth','isAdmin']],function(){
    Route::get('/dashboard',[HomeController::class,'index'])->name('dashboard');
    Route::resource('/product',ProductController::class,);
    Route::get('/delete_product/{id}', [ProductController::class, 'delete'])->name('product.delete');
    Route::post('/delete_image/{id}', [ProductController::class, 'deleteimg'])->name('image.delete');
    Route::resource('/category',CategoryController::class,);
    Route::get('/delete_category/{id}', [CategoryController::class, 'delete'])->name('category.delete');
    Route::resource('/lang',LangController::class,);
    Route::post('/delete_lang/{id}', [LangController::class, 'delete'])->name('lang.delete');
    Route::resource('/brand',BrandController::class,);
    Route::post('/delete_brand/{id}', [BrandController::class, 'delete'])->name('brand.delete');
    Route::resource('/trans_home',TransHomeController::class,);
    Route::resource('/trans_footer',TranslateFooterController::class,);
    Route::resource('/trans_content',TransContentController::class,);
    Route::resource('/user',Usercontroller::class,);
    Route::post('update_status/', [Usercontroller::class, 'updateStatus'])->name('isdiscount');
    Route::resource('/setting',SettingController::class,);
    Route::post('update_site/', [SettingController::class, 'updateSite'])->name('isdiscountsite');
    Route::resource('/social',SocialController::class,);
     Route::post('/delete_social/{id}', [SocialController::class, 'delete'])->name('delete');
    
});

Route::group(['prefix'=>'admin','middleware'=>['auth']],function(){
    Route::get('/logout',[AuthController::class,'logout'])->name('logout');
});
Route::middleware(['web','guest'])->controller(AuthController::class)->group(function(){
    Route::get('/admin/login','index')->name('login');
    Route::post('/admin/login','auth')->name('auth');
});