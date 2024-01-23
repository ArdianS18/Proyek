<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Review;
use App\Http\Controllers\TiketController;
use App\Models\User;

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
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::group(['middleware' => ['auth']], function(){
    Route::resource('/user', Review::class);
});

Route::group(['middleware' => ['auth', 'role:Admin']], function(){
    Route::resource('/genre', GenreController::class);
    Route::resource('/destinasi', DestinasiController::class);
    Route::resource('/tiket', TiketController::class);
    Route::resource('/home', HomeController::class);
});