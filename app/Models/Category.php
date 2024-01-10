<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{
    use HasFactory,HasTranslations;
    protected $guarded=[];
    public $translatable = ['name','slug'];

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }
    public function children(){
        return $this->hasMany(Category::Class,'parent_id')->with('children');
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'catgory_id', 'id');
    }


    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($category) {
            // Kategori silinirken yapılacak işlemler
            $category->products()->each(function ($product) {
                // Ürüne ait resimleri sil
                $product->images()->delete();

                // Ürünü sil
                $product->delete();
            });
        });

    }

}
