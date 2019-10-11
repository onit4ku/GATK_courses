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

// auth test
Route::get('/auth0/callback', '\Auth0\Login\Auth0Controller@callback')->name('auth0-callback');
Route::get('/login', 'Auth\Auth0IndexController@login')->name('login');
Route::get('/logout', 'Auth\Auth0IndexController@logout')->name('logout')->middleware('auth');

Route::view('/testAUTH0', 'app');
