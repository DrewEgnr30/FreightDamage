<?php

use Illuminate\Http\Request;

Route::get('/order/{id}', 'AutoGenerateController@showorder');
Route::get('/actprice/{id}', 'AutoGenerateController@actprice');	

Route::resource('claims', 'ClaimController');