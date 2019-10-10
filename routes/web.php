<?php

Route::get('/upload', 'UploadController@uploadForm');
Route::post('/upload', 'UploadController@uploadSubmit');

Route::get('/listadoGATK19', 'SubmissionsController@vista');
Route::get('search', 'SubmissionsController@search')->name('search');

Route::get('/', function () {
    return view('registerclosed');
    // return view('upload_form');
});

//  vue test
Route::view('/vue', 'app');
