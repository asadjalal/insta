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


Auth::routes();
Route::post('/follow/{user}','FollowsController@store');
Route::get('/', 'Postscontroller@index');

Route::post('/p','Postscontroller@store');
Route::get('/p/create','Postscontroller@create');
Route::get('/p/{post}','Postscontroller@show');

Route::get('/profile/{user}','Profilecontroller@index');
Route::get('/profile/{user}/edit','Profilecontroller@edit');
Route::patch('/profile/{user}','Profilecontroller@update');



