<?php

namespace App\Http\Controllers\admin;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class resume_controller extends Controller
{
    public function pdf_view(){
        // Fetch data from tables and store in the $data array
        $data['personal_info'] = DB::table('personal_info')->get(); // Corrected table name
        $data['work_experiences'] = DB::table('work_experiences')->get();
        $data['education'] = DB::table('education')->get();
        $data['skills'] = DB::table('skills')->get();
        $data['projects'] = DB::table('projects')->get();
        $data['hobbies'] = DB::table('hobbies')->get(); // Assuming 'hobbies' is in 'hobbies' table

        // Pass the $data array to the 'admin.resume' view
        return view('admin.resume', $data);
    }
    public function download_pdf()
    {
        // Fetch all the necessary data for the resume
        $data['personal_info'] = DB::table('personal_info')->get();
        $data['work_experiences'] = DB::table('work_experiences')->get();
        $data['education'] = DB::table('education')->get();
        $data['skills'] = DB::table('skills')->get();
        $data['projects'] = DB::table('projects')->get();
        $data['hobbies'] = DB::table('hobbies')->get();

        // Load the view into PDF using DomPDF
        $pdf = Pdf::loadView('admin.resume', $data);

        // Return the generated PDF for download
        return $pdf->download('resume.pdf');
    }
}



