<?php

// new student
Route::post('/student', 'ApiController@create');

// fetch all data
Route::get('/students', 'ApiController@show');

// fetch student data by id
Route::get('/students/{id}', 'ApiController@showbykey');

// update student data by id
Route::put('/studentsupdate/{id}', 'ApiController@updatebyid');

// delete student data by id
Route::delete('/studentdelete/{id}', 'ApiController@deletebyid');