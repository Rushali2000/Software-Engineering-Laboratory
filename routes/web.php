<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\profileController;
use App\Http\Controllers\volController;
use App\Http\Controllers\listingController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\HomeViewController;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\Frontend\FrontendController::class, 'index']);
Route::get('blog/{category_slug}', [App\Http\Controllers\Frontend\FrontendController::class, 'viewCategoryPost']);
Route::get('/blog/{category_slug}/{post_slug}', [App\Http\Controllers\Frontend\FrontendController::class, 'viewPost']);


//Comment System
Route::post('comments', [App\Http\Controllers\Frontend\CommentController::class, 'store']);
Route::post('delete-comment', [App\Http\Controllers\Frontend\CommentController::class, 'destroy']);


// middleware(['auth']) makes sure that you can not enter the admin panel until and unless you are logged in
Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {

    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);

    //Post Categories
    Route::get('category', [App\Http\Controllers\Admin\CategoryController::class, 'index']);
    Route::get('add-category', [App\Http\Controllers\Admin\CategoryController::class, 'create']);
    Route::post('add-category', [App\Http\Controllers\Admin\CategoryController::class, 'store']);
    Route::get('edit-category/{category_id}', [App\Http\Controllers\Admin\CategoryController::class, 'edit']);
    Route::put('update-category/{category_id}', [App\Http\Controllers\Admin\CategoryController::class, 'update']);
    Route::get('delete-category/{category_id}', [App\Http\Controllers\Admin\CategoryController::class, 'destroy']);

    //Post Blogs/Article
    Route::get('posts', [App\Http\Controllers\Admin\PostController::class, 'index']);
    Route::get('add-post', [App\Http\Controllers\Admin\PostController::class, 'create']);
    Route::post('add-post', [App\Http\Controllers\Admin\PostController::class, 'store']);
    Route::get('post/{post_id}', [App\Http\Controllers\Admin\PostController::class, 'edit']);
    Route::put('update-post/{post_id}', [App\Http\Controllers\Admin\PostController::class, 'update']);
    Route::get('delete-post/{post_id}', [App\Http\Controllers\Admin\PostController::class, 'destroy']);

    Route::get('users', [App\Http\Controllers\Admin\UserController::class, 'index']);
    Route::get('user/{user_id}', [App\Http\Controllers\Admin\UserController::class, 'edit']);
    Route::put('update-user/{user_id}', [App\Http\Controllers\Admin\UserController::class, 'update']);
});


//---------------Rushali Routes----------------

Route::view('application', 'index');
// Route::view('vol', 'index');

Route::get('profile', [App\Http\Controllers\profileController::class, 'index']);
Route::get('org', [App\Http\Controllers\listingController::class, 'show']);
Route::get('vol', [App\Http\Controllers\listingController::class, 'showVols']);
Route::get('view', [App\Http\Controllers\listingController::class, 'showLists']);
Route::get('orgfeed', [App\Http\Controllers\profileController::class, 'showSkills']);
Route::get('app', [App\Http\Controllers\applicationController::class, 'index']);
Route::get('registered', [App\Http\Controllers\registerController::class, 'showRegister']);
// Route::get('vol', [App\Http\Controllers\volController::class, 'index']);
Route::get('community', [App\Http\Controllers\communityController::class, 'index']);
Route::get('application', [App\Http\Controllers\applicationController::class, 'index']);
Route::get('application', [App\Http\Controllers\appController::class, 'index']);
Route::post('add1', [App\Http\Controllers\profileController::class, 'add1']);
Route::post('add3', [App\Http\Controllers\registerController::class, 'add3']);
Route::post('add2', [App\Http\Controllers\listingController::class, 'add2']);

Route::post('add', [App\Http\Controllers\applicationController::class, 'add']);

Route::get('/volfeed', function () {
        return view('volfeed.feedback');
    });

//------------Manifa---------------

//For Volunteer Posts
// Route::get('/', [HomeViewController::class, 'HomeIndex']);
Route::post('dataInsert', [HomeViewController::class, 'DataInsert']);
Route::get('/newData', [DataController::class, 'DataTableIndex']);

//For Campaigns
Route::post('campaignInsert', [HomeViewController::class, 'CampaignInsert']);
Route::put('donationInsert/{campaign_id}', [CampaignController::class, 'DonationInsert']);
Route::get('/newCampaign', [CampaignController::class, 'CampaignTableIndex']);
Route::get('/createDonation/{campaign_id}', [CampaignController::class, 'DonationIndex']);
