<?php

namespace App\Http\Controllers\admin\layouts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class headercontroller extends Controller
{
    public function header_view(){
      return view('admin.layouts.header');



    }
}
