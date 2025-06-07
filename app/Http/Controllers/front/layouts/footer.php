<?php

namespace App\Http\Controllers\front\layouts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class footer extends Controller
{
    public function footer_page(){

 return view('front.layouts.footer');


    }
}
