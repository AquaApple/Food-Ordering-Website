<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\site\siteController;


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

Route::group(['namespace' => 'site'], function () {
 Route::get('/','siteController@index')->name('site.home');
 Route::get('/about','siteController@about')->name('site.about');
 Route::get('/contact','siteController@contact')->name('site.contact');
 
});