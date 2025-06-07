<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class contactcontroller extends Controller
{
    public function contact_view(){

 return view('admin.contact.add_contact');

    }
    public function contact_add(Request $request){

        $arrayname=array(
            'name'=>$request->name,
            'email'=>$request->email,
             'message'=>$request->message
        );
        //dd('checked');
        DB::table('contact')->insert($arrayname);
        return back()->with('success','contact submitted successfully');
    }

    public function contact_show(){
          $data['contact']=DB::table('contact')->get();
          return view('admin.contact.show_contact', $data);
    }
    public function contact_delete(Request $request){
       DB::table('contact')->where('contact_id',$request->contact_id)->delete();
       return redirect('contact_show')->with('success','contact deleted successfully');

    }
}
