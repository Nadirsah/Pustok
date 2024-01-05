<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class TranslateHome extends Model
{
    use HasFactory,HasTranslations;
    protected $guarded=[];
    public $translatable=[
        'placeholder',
        'search_button',
        'login',
        'veya',
        'register',
        'shopping_cart',
        'browse_category',
        'free_support',
        'view_cart',
    ];
}

