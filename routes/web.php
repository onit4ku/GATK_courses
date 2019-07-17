<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group.
|
 */

Route::get('/upload', 'UploadController@uploadForm');
Route::post('/upload', 'UploadController@uploadSubmit');

Route::get('/listadoGATK19','SubmissionsController@vista');
Route::get('/Search','SubmissionsController@search')->name('search');

Route::get('/', function () {
    // return view('registerclosed');
    return view('upload_form');
});
