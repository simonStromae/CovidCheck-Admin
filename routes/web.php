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

Route::namespace("Admin")->prefix("Administration")->middleware(["auth", "lock"])->group(function (){
    Route::view('/', 'Admin/dashboard')->name('dashboard');
    Route::get('/profile', function (){
        return view('auth.profile')->with('user', Auth::user());
    })->name('profile');
    Route::resource('region', 'RegionController');
    Route::resource('city', 'CityController');
    Route::resource('statistic', 'StatisticController');
    Route::resource('user', 'UserController');
});
Route::get('/', function (){
    return redirect()->route('dashboard');
});

Auth::routes(array(
    'register' => false,
));

Route::get('/lockscreen', 'LockAccountController@lockscreen')->name('lockscreen.index');
Route::post('/lockscreen', 'LockAccountController@unlock')->name('lockscreen.store');
Route::get('/forbidden', function (){
    return view('');
})->name('forbidden');