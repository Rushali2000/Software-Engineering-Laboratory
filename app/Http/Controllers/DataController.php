<?php

namespace App\Http\Controllers;

use App\Models\Volunteer_posts;
use Illuminate\Http\Request;

class DataController extends Controller
{
    function DataTableIndex(){

        $postData = volunteer_posts::all();
        return view('DataTable', ['postData'=>$postData]);
    }
}
