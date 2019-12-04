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
Route::view('/', function (){
   return 'test';
});
Route::group(['prefix' => 'administration'], function (){
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
});

Auth::routes();
