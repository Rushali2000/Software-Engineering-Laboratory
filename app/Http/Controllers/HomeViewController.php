<?php

namespace App\Http\Controllers;
use App\Models\Campaigns;

use Illuminate\Http\Request;

class HomeViewController extends Controller
{
    function HomeViewIndex(){
        return view('Home1');
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
