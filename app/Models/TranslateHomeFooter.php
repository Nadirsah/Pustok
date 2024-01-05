<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class TranslateHomeFooter extends Model
{
    use HasFactory,HasTranslations;
    protected $guarded=[];
    public $translatable=[
        'address',
        'phone',
        'email',
        'information',
        'extras',
        'newsletter_subscribe',
        'enter_your_email',
        'subscribe',
        'stay_connected',
    ];
}
