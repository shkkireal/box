<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/pro', ['as' => 'sireal', 'uses' => 'App\Http\Controllers\BoxController@box_reqest']);
Route::get('/profile', ['as' => 'sireal', 'uses' => 'App\Http\Controllers\BoxController@box_reqest']);
Route::get('/shop', ['as' => 'sireal', 'uses' => 'App\Http\Controllers\BoxController@box_reqest']);
Route::get('/console', ['as' => 'sireal', 'uses' => 'App\Http\Controllers\BoxController@box_reqest']);
Route::get('/dashbord', ['as' => 'sireal', 'uses' => 'App\Http\Controllers\BoxController@box_reqest']);
