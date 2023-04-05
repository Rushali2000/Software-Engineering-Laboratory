<?php

namespace App\Http\Controllers;

use App\Models\listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class listingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $list= listing::all();
    //    return view('org.listings',compact('list'));
    // }
    public function show()
    {
        $list = listing::all();
        return view('org.listings', compact('list'));
    }
    public function showVols()
    {
        $list = listing::all();
        return view('vol.listing', compact('list'));
    }
    public function showLists()
    {
        $list = listing::all();
        return view('view.viewlist', compact('list'));
    }
    // public function show1()
    // {
    //     $l=listing::all();
    //     return view('vol.listing',compact('l'));
    //    // return view('vol.listing',compact('list'));
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function add2(Request $request)

    {
        $list = new listing();
        $list->opportunityName = $request['opportunityName'];
        $list->jobDescription = $request['jobDescription'];
        $list->jobLocation = $request['jobLocation'];
        $list->responsibilities = $request['responsibilities'];


        $list->save();
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
     * @param  \App\Models\listings  $listings
     * @return \Illuminate\Http\Response
     */
    // public function show(listing $listings)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\listings  $listings
     * @return \Illuminate\Http\Response
     */
    public function edit(listing $listings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\listings  $listings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, listing $listings)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\listings  $listings
     * @return \Illuminate\Http\Response
     */
    public function destroy(listing $listings)
    {
        //
    }
}
