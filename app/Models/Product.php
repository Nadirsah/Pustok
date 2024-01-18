<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Translatable\HasTranslations;

class Product extends Model
{
    use HasFactory,HasTranslations;
    protected $guarded = [];
    public $translatable=[
        'title',
        'slug',
        'about',
        'description',

    ];
    public function images():HasMany{
        return $this->hasMany(ProductImage::class,'product_id','id');
    }

public function image()
{
        return $this->hasOne(ProductImage::class)->where('is_main',1);
}


    public function getCategory()
    {
        return $this->hasOne(Category::class, 'id','catgory_id');
    }





}
