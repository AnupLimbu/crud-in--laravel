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

Route::get('/', 'App\Http\Controllers\CrudController@index');
Route::get('/create', 'App\Http\Controllers\CrudController@createnew');
Route::post('/create', 'App\Http\Controllers\CrudController@store');
Route::get('/update', 'App\Http\Controllers\CrudController@updatenew');
Route::get('/delete', 'App\Http\Controllers\CrudController@deletenew');
Route::delete('/delete/{id}', 'App\Http\Controllers\CrudController@destroy');

Route::post('/edit/{id}', 'App\Http\Controllers\CrudController@showEdit');
Route::post('/edit', 'App\Http\Controllers\CrudController@update');

