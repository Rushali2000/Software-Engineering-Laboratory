<?php

namespace App\Http\Controllers;

use App\Models\profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\Unique;

class profileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $profile= profile::all();
        return view('profile.index',compact('profile'));
    }
    public function add(Request $request)

    {
        $profile =new profile();
        $profile->name=$request['name'];
        $profile->email=$request['email'];
        $profile->description=$request['description'];
        $profile->phone_no=$request['phone_no'];
        $profile->skills=$request['skills'];
        $profile->endorsed=$request['endorsed'];
        $profile->endorsed=$request['prior_experience'];
       
        $profile->save();
        
      // return $request->input();
       // $request->validate([
       //     'name'=>'required'|unique:profile

     //   ]);
        // $query=DB::table('profile')->insert([
        //     'skills'=>$request->input('skills'),
        //    // 'email'=>$request->input('email'),
        //    // 'phone_no'=>$request->input('phone_no'),
        //    // 'description'=>$request->input('description')


        // ]);
        // if($query){
        //     return back()->with("saved");
        // }
        // else{
        //     return back()->with("not saved");
        // }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profile.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $profile =new profile();
        $profile->name=$request('name');
        $profile->email=$request('email');
        $profile->phone_no=$request('phone_no');
        $profile->description=$request('description');
        $profile->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(profile $profile)
    {
        return view('profile.show');  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(profile $profile)
    {
        //
    }
}
