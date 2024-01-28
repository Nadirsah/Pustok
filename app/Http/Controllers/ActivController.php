<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class ActivController extends Controller
{
    public function __construct(Setting $activ)
    {
        $record = $activ->where('id', 1)->where('activ', 0)->first();
        if ($record) {
            abort(404);
        }
    }
}