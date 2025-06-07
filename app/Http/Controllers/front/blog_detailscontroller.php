<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class blog_detailscontroller extends Controller
{
    public function details_blog(){

return view('front.blog_details');

    }

    public function blog_single_details(Request $request){
    //  if(isset($request->image))
    //  $img="blkeartyt".rand(11111111,999999999).'.'.$request->file('image')->extension();
    // $request->file('image')->move(public_path('admin.blog.show_blog') , $img);



    $data['single']=DB::table('blog')->where('blog_id',decrypt($request->blog_id))->first();
  return view('front.blog_details' ,$data);

    }
}
