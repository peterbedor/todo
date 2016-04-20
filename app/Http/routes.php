<?php

Route::get('/', 'TaskController@index');
Route::post('/task/new', 'TaskController@store');
Route::get('/task/{id}', 'TaskController@show');
Route::get('/task/update/{id}', 'TaskController@update');
Route::get('/task/delete/{id}', 'TaskController@destroy');

//Route::resource('task', 'TaskController');
