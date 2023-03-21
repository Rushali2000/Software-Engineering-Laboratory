<?php

namespace App\Http\Controllers;

use App\Models\community;
use App\Http\Controllers\profileController;
use Illuminate\Http\Request;

class communityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $community= community::all();
        return view('community.indexCom',compact('$profile'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
    public function add(Request $request)
    {
        //
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\community  $community
     * @return \Illuminate\Http\Response
     */
    public function show(community $community)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\community  $community
     * @return \Illuminate\Http\Response
     */
    public function edit(community $community)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\community  $community
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, community $community)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\community  $community
     * @return \Illuminate\Http\Response
     */
    public function destroy(community $community)
    {
        //
    }
}
