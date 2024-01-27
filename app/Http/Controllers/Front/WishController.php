<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class WishController extends Controller
{
    public function index(){
        return view('front.wishlist');
    }

    // app/Http/Controllers/TemporaryProductController.php

public function store($productId)
{
    // İstifadəçinin ID-sini əldə et
    $user_id = Auth::id();

    // Daxil olan istifadəçi session-ını əldə et, əgər yoxdursa boş array yarat
    $whishlist = Session::get('whishlist', []);

    // Eger bu produkt hal-hazırda session-da yoxdursa, əlavə et
    if (!in_array($productId, $whishlist)) {
        $whishlist[] = $productId;
    }

    // Session-ı yenilə
    Session::put('whishlist', $whishlist);

    // Buradan başqa hansısa bir işləmə, meselen, geri qayıtmak və səhifəni yeniləmək
    return redirect()->route('wish',['whishlist' => $whishlist]);
}

}
