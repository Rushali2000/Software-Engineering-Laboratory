<?php

namespace App\Http\Controllers;
use App\Http\Models\Complaint;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ComplaintController extends Controller
{
    
    function createComplaint()
    {
        return view('CreateComplaint');
    }

    function ComplaintInsert(Request $request){

        $name = $request->input('name');
        $email = $request->input('email');
        $subject = $request->input('subject');
        $complaint = $request->input('complaint');
        $data=array('name'=>$name,"email"=>$email,"subject"=>$subject,"complaint"=>$complaint);
        DB::table('complaint')->insert($data);
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/showComplaint">Click Here</a> to go back.';
    }

    function ComplaintTableIndex(){

        $complaint = \App\Models\Complaint::all();
        return view('ShowComplaint', ['complaint'=>$complaint]);
    }

    
}
