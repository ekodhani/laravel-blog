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

Route::get('/', 'LoginController@index');
Route::get('/profile', 'DashboardController@profile');
Route::get('/dashboard', 'DashboardController@index');
Route::get('/blog', 'BlogController@index');
Route::get('/createblog', 'BlogController@show');
Route::get('/profile/update/{user}', 'DashboardController@update');
Route::get('/blog/deleteblog/{blog}', 'BlogController@destroy');
Route::get('/blog/updateblog/{blog}', 'BlogController@update');
Route::get('/blog/detailblog/{blog}', 'BlogController@detail');
Route::put('/profile/updateuser/{id}', 'DashboardController@edit');
Route::put('/blog/update/{id}', 'BlogController@edit');
Route::post('/postblog', 'BlogController@postblog');
Route::post('/loginPost', 'LoginController@loginPost');
Route::get('/logout', 'LoginController@logout');
