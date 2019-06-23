<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('patients', 'RecordController@index');
Route::get('patients/{id}', 'RecordController@show');
Route::get('patients/{name}', 'RecordController@search');

Route::post('patiens', 'RecordController@store');
Route::put('patients', 'SupportController@update');

Route::delete('patients/{id}', 'RecordController@destroy');




Route::get('supports', 'SupportController@index');
Route::post('supports', 'SupportController@store');
Route::put('supports', 'SupportController@update');
Route::delete('supports/{id}', 'SupportController@destroy');

Route::post('letters','LetterController@store');