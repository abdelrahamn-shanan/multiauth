<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/change', 'Password\ChangePasswordController@index');

Route::post('/change', 'Password\ChangePasswordController@store')->name('change.password');