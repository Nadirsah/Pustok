<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class TranslateHomeContent extends Model
{
    use HasFactory,HasTranslations;
    protected $guarded=[];
    public $translatable=[
            'best_seller',
            'feature_products',
            'new_arrivals',
            'most_view_products',
            'special_offer',
            'arts_photography',
            'childrens_books',
            'biographies',
            'days',
            'hours',
            'mins',
            'secs',
    ];
}
