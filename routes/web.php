<?php

use Illuminate\Support\Facades\Route;

//GET
Route::get('/', 'App\Http\Controllers\ApptesController@IndexView');

//POST
Route::post('get_salary', 'App\Http\Controllers\ApptesController@get_salary')->name('get.salary');
