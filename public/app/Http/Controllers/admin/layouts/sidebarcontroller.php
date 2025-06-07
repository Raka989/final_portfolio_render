<?php

namespace App\Http\Controllers\admin\layouts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class sidebarcontroller extends Controller
{
    public function sidebar_view(){
  return view('admin.layouts.sidebar');




    }
}
