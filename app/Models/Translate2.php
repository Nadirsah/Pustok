<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Translate2 extends Model
{
    use HasFactory,HasTranslations;
    protected $guarded=[];
    public $translatable=[
    'password',
    'returning',
    'image',
    'product',
    'price',
    'total',
    'quantity',
    'cart_summary',
    'sub',
    'grand',
    'checkout',
    'billing',
    'first',
    'last',
    'company',
    'country',
    'no',
];
}
