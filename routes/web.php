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

Route::get('/dash', function () {
    return view('home');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/fund-wallet', 'HomeController@fund')->name('fund');
Route::post('/creategst/', 'HomeController@createGst')->name('create.gst');
Route::post('/createfst/', 'HomeController@createFst')->name('create.fst');
Route::get('/tokenlist/', 'HomeController@viewToken')->name('token.list');
Route::post('/deposit-fund/{deposit}', 'HomeController@depos')->name('deposit.fund');
Route::get('/confirm/{ref}', 'HomeController@confirm')->name('confirm');
