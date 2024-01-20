<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Translate1 extends Model
{
    use HasFactory,HasTranslations;
    protected $guarded=[];
    public $translatable=[
    'enter_your_email',
    'subscribe',
    'stay_connected',
    'us',
    'about',
    'best_seller',
    'special',
    'offer',
    'days',
    'hours',
    'mins',
    'secs',
    'new',
    'customer',
    'i_am_a',
    'full',
    'name',
];
}
