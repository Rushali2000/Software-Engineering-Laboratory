<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\profileController;

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
Route::get('/app', function () {
return view('app.application');
});
Route::get('/application', function () {
    return view('application.app');
    });
Route::get('/community', function () {
    return view('community.indexCom');
});
//Route::get('profilecommunity', function () {
 //   return view('profilecommunity.indexCom');
//});
Route::view('profile', 'index');
Route::view('application', 'index');
Route::get('profile', [App\Http\Controllers\profileController::class, 'index']);
Route::get('application', [App\Http\Controllers\applicationController::class, 'index']);
Route::post('add', [App\Http\Controllers\profileController::class, 'add']);