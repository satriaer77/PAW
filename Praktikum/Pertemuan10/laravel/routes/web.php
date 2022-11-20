<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers;
use App\Http\Controllers\PawController;

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

Route::get('/','\App\Http\Controllers\PawController@mahasiswa');
Route::get('/inputData','\App\Http\Controllers\PawController@inputMahasiswa');
Route::post('/editData','\App\Http\Controllers\PawController@editMahasiswa');
Route::post('/updateData','\App\Http\Controllers\PawController@updateMahasiswa');
Route::get('/about','\App\Http\Controllers\PawController@about');
Route::post('/insertData','\App\Http\Controllers\PawController@insertMahasiswa');
Route::post('/deleteData','\App\Http\Controllers\PawController@deleteMahasiswa');
