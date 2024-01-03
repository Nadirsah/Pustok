<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Setting extends Model
{
    use HasFactory,HasTranslations;
    protected $fillable=[
        'logo',
        'facebook',
        'facebook_icon',
        'twitter',
        'twitter_icon',
        'phone_1',
        'phone_2',
        'location',
        'about',
        'adress',
        'email',
        'activ',
    ];
}
