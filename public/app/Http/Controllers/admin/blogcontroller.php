<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class blogcontroller extends Controller
{
    public function blog_view(){

        return view('admin.blog.add_blog');
    }

    public function blog_add(Request $request){
    if(isset($request->image)){
$img='blkheart'.rand(111111111,99999999).'.'.$request->file('image')->extension();
$request->file('image')->move(public_path('admin.blog.show_blog'), $img);

    }
    else{

        $img=null;
    }
    $arrayname=array(


    'title'=>$request->title,
    'short_description'=>$request->short_description,
    'long_description'=>$request->long_description,
     'date'=>$request->date,
      'image'=>$img
    );
   // dd('checked');
   DB::table('blog')->insert($arrayname);
   return back()->with('success','blog inserted successfully');

    }
    public function blog_show(){
      $data['blog']=DB::table('blog')->get();
      return view('admin.blog.show_blog',$data);
    }
    public function blog_delete(Request $request){
      DB::table('blog')->where('blog_id',$request->blog_id)->delete();
      return redirect('blog_show')->with('success','blog deleted successfully');
    }
     public function blog_edit(Request $request){
      $data['blog']=DB::table('blog')->where('blog_id',$request->blog_id)->first();
      return view('admin.blog.edit_blog' , $data);


     }
     public function blog_update(Request $request){
      if(isset($request->image)){
      $img='blkheart'.rand(11111111,99999999).'.'.$request->file('image')->extension();
      $request->file('image')->move(public_path('admin.blog.show_blog') ,$img);


      }
      else{
       $img=null;
      }
      $arrayname=array('title'=>$request->title,
    'short_description'=>$request->short_description,
    'long_description'=>$request->long_description,
     'date'=>$request->date,
      'image'=>$img
        );
        DB::table('blog')->where('blog_id',$request->blog_id)->update($arrayname);
        return redirect('blog_show')->with('success','blog updated successfully');
 }

public function details(Request $request){

$data['details']=DB::table('blog')->where('blog_id',$request->blog_id)->first();
return view('admin.blog.blog_details' ,$data);

}

public function blog_details_page(Request $request){
if(isset($request->image)){
$img='blkheartyt'.rand(111111111,999999999).'.'.$request->file('image')->extension();
$request->file('image')->move(public_path('admin.blog.show_blog') , $img);

}else{
null;
}
$arrayname=array(
    $request->title,
    'short_description'=>$request->short_description,
    'long_description'=>$request->long_description,
     'date'=>$request->date,
      'image'=>$img



);
DB::table('blog')->where('blog_id',$request->blog_id)->update($arrayname);
return redirect('blog_show')->with('success','blog updated successfully');







}
}
