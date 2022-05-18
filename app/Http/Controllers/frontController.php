<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontController extends Controller
{
    public function user()
    {
        return view('frontend.main');
    }
}
