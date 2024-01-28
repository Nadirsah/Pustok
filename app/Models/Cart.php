<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'product_id',
        'status',
        'quantity',
    ];

    public function get_products()
    {
        return $this->hasOne('App\Models\Product','id','product_id')->with('images');
    }
}