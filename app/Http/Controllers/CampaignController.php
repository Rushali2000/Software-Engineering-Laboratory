<?php

namespace App\Http\Controllers;
use App\Models\Campaigns;

use Illuminate\Http\Request;

class CampaignController extends Controller
{
    function DonationIndex(){
        return view('Donate');
    }
    
    function CampaignTableIndex(){

        $campaignData = campaigns::all();
        return view('CampaignTable', ['campaignData'=>$campaignData]);
    }

    function DonationInsert(Request $request){
        $donation_amount = $request->input('donation_amount');

        $isInsertSuccess = Campaigns::insert(['raised_amount' => $donation_amount]);

        if ($isInsertSuccess)
            echo '<h1>Insert Success</h1>';
        else
            echo '<h1>Insert Failed</h1>';
    }
}
