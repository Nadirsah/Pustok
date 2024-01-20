<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class TranslateCard extends Model
{
    use HasFactory,HasTranslations;
    protected $guarded=[];
    public $translatable=[
        'shopping_cart',
        'image',
        'product',
        'price',
        'total',
        'cart_summary',
        'sub_total',
        'shipping_cost',
        'grand_total',
        'checkout',
        'billing_address',
        'first',
        'name',
        'last',
        'company',
        'country',
        'no',
        'city',
        'state',
        'zip code',
        'condition',
        'place',
        'order',
        'thank',
        'you',
        'message_for_order',
        'number',
        'total',
        'details',



    ];
}
