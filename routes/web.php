<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\JamTayangController;
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

// Route::group(['middleware' => ['auth']], function(){
//     Route::get('user-dash', function () {
//         if (auth()->check() && auth()->user()->role == 'admin') {
//             return redirect('/home');
//         } else {
//             return view('user/user-dash');
//         }
//     });
// });

Route::group(['middleware' => ['auth', 'name:admin']], function(){
    Route::resource('/genre', GenreController::class);
    Route::view('home', 'home');
    Route::view('dashboard', 'dash-admin');
});
