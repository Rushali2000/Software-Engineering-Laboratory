<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\CampaignController;

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

Route::get('/', [HomeController::class, 'HomeIndex']);
Route::post('dataInsert', [HomeController::class, 'DataInsert']);
Route::post('campaignInsert', [HomeController::class, 'CampaignInsert']);
Route::post('donationInsert', [CampaignController::class, 'DonationInsert']);

Route::get('/newData', [DataController::class, 'DataTableIndex']);
Route::get('/newCampaign', [CampaignController::class, 'CampaignTableIndex']);
Route::get('/createDonation', [CampaignController::class, 'DonationIndex']);
