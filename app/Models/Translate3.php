<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Translate3 extends Model
{
    use HasFactory,HasTranslations;
    protected $guarded=[];
    public $translatable=[
        'city',
        'state',
        'zip_code',
        'condition',
        'place',
        'order',
        'thank',
        'you',
        'message_for_order',
        'number',
        'total',
        'details',
        'description',
        'dashboard',
        'account',
        'change',
        'send_us_msg',
        'text',
    ];
}
