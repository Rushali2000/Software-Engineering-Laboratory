<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\profileController;
use App\Http\Controllers\volController;
use App\Http\Controllers\listingController;
use App\Http\Controllers\registerController;

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

////Route::resource('profile', 'App\Http\Controllers\profileController');
//Route::post('/create', 'App\Http\Controllers\profileController@store');
// Route::get('/app', function () {
// return view('app.application');
// });
// Route::get('/application', function () {
//     return view('application.app');
//     });
// Route::get('/community', function () {
//     return view('community.indexCom');
// });
//Route::get('profilecommunity', function () {
 //   return view('profilecommunity.indexCom');
//});
// Route::view('profile', 'index');
// Route::view('org', 'index');
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
Route::post('/increment-count/{id}', [ProfileController::class, 'incrementCount'])->name('increment-count');
Route::post('add', [App\Http\Controllers\applicationController::class, 'add']);
// Route::post('/increment-count', [profileController::class, 'increment'])->name('increment-count');
// Route::post('/increment-count', [App\Http\Controllers\listingController::class, 'increment']);

  //Route::get('/org', function () {
//      return view('org.listings');
//      });
// Route::get('/vol', function () {
//         return view('vol.listing');
//     });
// Route::get('/orgfeed', function () {
//         return view('orgfeed.feedback');
//     });
Route::get('/volfeed', function () {
        return view('volfeed.feedback');
    });