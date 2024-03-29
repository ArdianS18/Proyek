<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\Review;
use App\Http\Controllers\TampilController;
use App\Http\Controllers\TiketController;
use App\Http\Controllers\TiuserController;
use App\Http\Controllers\UlasanController;
use App\Http\Controllers\UlasanadminController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GaleryadminController;

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
    Route::resource('/user', Review::class)->middleware('verified');
    Route::resource('/tiket', TiketController::class)->middleware('verified');
    Route::resource('/ulasan', UlasanController::class)->middleware('verified');
    Route::resource('/editprofile', UserController::class)->middleware('verified');
    Route::resource('/galery', GaleryController::class)->middleware('verified');
    Route::resource('/pembayaran', PembayaranController::class)->middleware('verified');
});

Route::group(['middleware' => ['auth', 'role:Admin']], function(){
    Route::resource('/genre', GenreController::class);
    Route::resource('/destinasi', DestinasiController::class);
    Route::resource('/home', HomeController::class);
    Route::resource('/lokasi', LokasiController::class);
    Route::resource('/pengguna', TampilController::class);
    Route::resource('/ulasanadmin', UlasanadminController::class);
    Route::resource('/tiketadmin', TiuserController::class);
    Route::resource('/galeri', GaleryadminController::class);

});
