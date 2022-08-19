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


Route::view('/signature', 'signature');
Route::post('/signature/post', 'SignatureController@store');
Route::get('/welcome', 'SignatureController@index');
