<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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


/*Route::group(['middleware' => ['auth' , 'admin']] , function (){

    Route::get('admin/home', function () {
        return view('adminlogin');
    });     
});*/


Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', 'User\UserController@UserLogin')->name('user.login');
Route::post('/login', 'User\UserController@Login')->name('user.home');

