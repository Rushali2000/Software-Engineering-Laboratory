<?php

namespace App\Http\Controllers;

use App\Models\Campaigns;
use Illuminate\Http\Request;
use App\Models\Volunteer_posts;

class HomeController extends Controller
{
    //$vp = new Volunteer_posts;
    function HomeIndex(){
        return view('Home');
    }
    function DataInsert(Request $request){
        $vp = new Volunteer_posts;

        $title = $request->input('title');
        $date = $request->input('date');
        $description = $request->input('description');
        $organization = $request->input('organization');
        if($request->hasfile('uploadfile'))
        {
            $file = $request->file('uploadfile');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/', $filename);
            $uploadfile = $filename;
        }


        $isInsertSuccess = Volunteer_posts::insert(['title' => $title, 'image' => $uploadfile, 'date' => $date, 'description' => $description, 'organization' => $organization]);

        if ($isInsertSuccess)
            echo '<h1>Insert Success</h1>';
        else
            echo '<h1>Insert Failed</h1>';
    }

    
    function CampaignInsert(Request $request){
        $cp = new Campaigns();

        $name = $request->input('name');
        $goal_amount = $request->input('goal_amount');
        $description = $request->input('description');
        $organization = $request->input('organization');
        if($request->hasfile('uploadfile'))
        {
            $file = $request->file('uploadfile');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/', $filename);
            $uploadfile = $filename;
        }


        $isInsertSuccess = Campaigns::insert(['name' => $name, 'image' => $uploadfile, 'goal_amount' => $goal_amount, 'description' => $description, 'organization' => $organization]);

        if ($isInsertSuccess)
            echo '<h1>Insert Success</h1>';
        else
            echo '<h1>Insert Failed</h1>';
    }
   
}
