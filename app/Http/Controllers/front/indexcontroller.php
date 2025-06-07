<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class indexcontroller extends Controller
{
    public function home(){
        $data['abc']=DB::table('slider')->get();


        return view('front.index' ,$data);

    }

    public function about_page(){
        return view('front.about');
}
public function resume_page(){


    return view('front.resume');
}
public function portfolio_page(){
    $data['portfolio']=DB::table('portfolio')->get();

    return view('front.portfolio' ,$data);
}
public function blog_page(){
    $data['blog']=DB::table('blog')->get();

    return view('front.blog' , $data);
}
public function contact_page(){


    return view('front.contact');
}
}
