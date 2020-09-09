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

Route::get('/', 'MainController@index')->name('main');
Route::get('/tentang', 'MainController@about')->name('tentang');
Route::get('/login', 'AuthController@login')->name('login');
Route::get('/register','AuthController@register')->name('register');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
