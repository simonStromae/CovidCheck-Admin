<?php

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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::namespace("Admin")->prefix("Administration")->middleware("auth")->group(function (){
    Route::view('/', 'Admin/dashboard')->name('dashboard');
    Route::get('/profile', function (){
        return view('auth.profile')->with('user', Auth::user());
    })->name('profile');
    Route::resource('region', 'RegionController');
    Route::resource('city', 'CityController');
    Route::resource('statistic', 'StatisticController');
});
Route::get('/', function (){
    return redirect()->route('dashboard');
});

Auth::routes(array(
    'register' => false,
));
