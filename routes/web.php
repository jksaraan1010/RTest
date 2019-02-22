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

Route::get('/', function () {
    return view('welcome');
});

Route::get('ContactUs', 'ContactUsController@index');
Route::post('ContactUsStore', 'ContactUsController@store');

Route::post('Thanks', 'ThanksController@index');

Route::get('Email','MailContactUsController@index' );
Route::post('sendEmail', 'MailContactUsController@send');
