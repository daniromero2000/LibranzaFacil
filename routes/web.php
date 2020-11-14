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


/**
 * Frontend routes
 */
Auth::routes();
Route::namespace('Auth')->group(function () {
    Route::get('logout', 'LoginController@logout');
});



Route::namespace('Front')->group(function () {
    Route::get('/', 'HomeController@index')->name('home');
});


Route::get('thank', function () {
    return view('libranza.front.thank_you_page');
})->name('terms.and.conditions');

