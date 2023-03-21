<?php

namespace App\Http\Controllers;

use App\Models\apps;
use Illuminate\Http\Request;
use App\Models\application;


class appController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $app =new application();
        $app= application::all();
        return view('application.app',compact('app'));
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\apps  $apps
     * @return \Illuminate\Http\Response
     */
    public function show(apps $apps)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\apps  $apps
     * @return \Illuminate\Http\Response
     */
    public function edit(apps $apps)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\apps  $apps
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, apps $apps)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\apps  $apps
     * @return \Illuminate\Http\Response
     */
    public function destroy(apps $apps)
    {
        //
    }
}
