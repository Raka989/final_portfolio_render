<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class slidercontroller extends Controller
{
    public function slider_view(){

    return view('admin.slider.add_slider');

    }

    public function slider_add(Request $request){
     if(isset($request->image)){
     $img="blkheartyt".rand(111111111,99999999).'.'.$request->file('image')->extension();
     $request->file('image')->move(public_path('admin.slider.show_slider') , $img);
     }
     else
     {null;

     }

     $arrayname=array(
         'title'=>$request->title,
         'image'=>$img

     );
     DB::table('slider')->insert($arrayname);
     return back()->with('success','slider inserted successfully');


    }

    public function slider_show(){
   $data['slider']=DB::table('slider')->get();
   return view('admin.slider.show_slider' , $data);


    }


    public function slider_delete(Request $request){
     DB::table('slider')->where('slider_id',$request->slider_id)->delete();
     return back()->with('failed','slider deleted successfully');

    }

    public function slider_edit(Request $request){
$data['slider']=DB::table('slider')->where('slider_id',decrypt($request->slider_id))->first();
return view('admin.slider.edit_slider',$data);


    }

public function slider_update(Request $request){

if(isset($request->image)){
$img='blkheartyt'.rand(11111111,99999999).'.'.$request->file('image')->extension();
$request->file('image')->move(public_path('admin.slider.show_slider'),$img);
}

else {
    $img=$request->images;

}

$arrayname=array(
'title'=>$request->title,
         'image'=>$img

);
DB::table('slider')->where('slider_id',$request->slider_id)->update($arrayname);
return redirect('slider_show')->with('success', 'slider updated successfully');
}



}
