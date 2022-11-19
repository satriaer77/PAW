<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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


Route::get('/',"\App\Http\Controllers\PawController@home");
Route::get('/about',"\App\Http\Controllers\PawController@about");
Route::get('/tugas-pendahuluan',"\App\Http\Controllers\PawController@tp");
Route::get('/mahasiswa','\App\Http\Controllers\MahasiswaController@index');
