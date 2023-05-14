<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\ComplaintController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//For Volunteer Posts
Route::get('/', [HomeController::class, 'HomeIndex']);
Route::post('dataInsert', [HomeController::class, 'DataInsert']);
Route::get('/newData', [DataController::class, 'DataTableIndex']);

//For Campaigns
Route::post('campaignInsert', [HomeController::class, 'CampaignInsert']);
Route::put('donationInsert/{campaign_id}', [CampaignController::class, 'DonationInsert']);
Route::get('/newCampaign', [CampaignController::class, 'CampaignTableIndex']);
Route::get('/createDonation/{campaign_id}', [CampaignController::class, 'DonationIndex']);

//For Complaints
// Complaint Form
Route::get('/complaintcreate', [ComplaintController::class, 'createComplaint']);
Route::post('/complaintInsert', [ComplaintController::class, 'ComplaintInsert']);
Route::get('/showComplaint', [ComplaintController::class, 'ComplaintTableIndex']);
