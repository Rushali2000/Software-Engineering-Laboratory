<?php

namespace App\Http\Controllers;
use App\Models\Campaigns;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CampaignController extends Controller
{
    function DonationIndex($campaign_id){
        $campaign = Campaigns::find($campaign_id);
        return view('Donate', compact('campaign'));
    }
    
    function CampaignTableIndex(){

        $campaignData = Campaigns::all();
        return view('CampaignTable', ['campaignData'=>$campaignData]);
    }

    /*
    function DonationInsert(\App\Http\Requests\CampaignFormRequest $request, Request $req, $campaign_id){
        //$campaign = new Campaigns;
        
        $campaign = Campaigns::find($campaign_id);
        //$data = $request->validated();
        $donation_amount = $req->input('donation_amount');
        //$raised = $data['raised_amount'];
        $campaign->raised_amount = $campaign->raised_amount + $donation_amount;
        //print_r($campaign->raised_amount);
        //$isInsertSuccess = Campaigns::insert(['raised_amount' => $total_amount]);
        $campaign->updated();

        //return redirect()->back()->with('status', trans('Donation has been updated successfully!'));
        return redirect('/newCampaign');

    }
*/
    function DonationInsert(\App\Http\Requests\CampaignFormRequest $request, Request $req, $campaign_id){
        $campaign = Campaigns::find($campaign_id);

if ($campaign) {
    $donation_amount = $req->input('donation_amount');

    if (is_numeric($donation_amount)) {
        $campaign->raised_amount += $donation_amount;

        if ($campaign->isDirty()) {
            if (DB::transactionLevel() > 0) {
                Log::info('Campaign is dirty but there is an active transaction');
            }

            if ($campaign->save()) {
                Log::info('Campaign saved successfully');
                return redirect('/newCampaign')->with('status', trans('Donation has been updated successfully!'));
            } else {
                Log::error('Error saving campaign: ' . implode(', ', $campaign->getErrors()));
                return redirect()->back()->with('error', trans('Error: Donation could not be updated!'));
            }
        } else {
            Log::info('Campaign is not dirty');
            return redirect('/newCampaign')->with('status', trans('Donation was already up to date!'));
        }
    } else {
        Log::error('Invalid donation amount: ' . $donation_amount);
        return redirect()->back()->with('error', trans('Error: Invalid donation amount!'));
    }
} else {
    Log::error('Campaign not found: ' . $campaign_id);
    return redirect()->back()->with('error', trans('Error: Campaign not found!'));
}

    }
    
}
