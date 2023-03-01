<?php

use App\Http\Controllers\Api_controller;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('now_playing');
});
Route::get('/',[Api_controller::class,'data_np']);
Route::get('/popular',[Api_controller::class,'data_popular']);
Route::get('/top-rated',[Api_controller::class,'data_tr']);
Route::get('/up-coming',[Api_controller::class,'data_uc']);