<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

//Route for name
Route::get('/name/{name}', 'StudentController@name');

//Route for date
Route::get('/date/{date}', 'StudentController@date');

//Route for age
Route::get('/age/{age}', 'StudentController@age');