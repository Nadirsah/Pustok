<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Translate extends Model
{
    use HasFactory,HasTranslations;
    protected $guarded=[];
    public $translatable=[
        'placeholder',
        'search_button',
        'login',
        'or',
        'register',
        'shopping_cart',
        'browse_category',
        'free_support',
        'home',
        'shop',
        'contact',
        'address',
        'phone',
        'email',
        'information',
        'extras',
        'newsletter_subscribe',
    ];
}
