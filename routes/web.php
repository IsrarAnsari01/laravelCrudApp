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
Route::get("/", 'App\Http\Controllers\CrudController@show');
Route::get("delete_student/{id}",'App\Http\Controllers\CrudController@destroy');
Route::get("add_new_student",'App\Http\Controllers\CrudController@create');
Route::post("submitInformation",'App\Http\Controllers\CrudController@store');
Route::get("edit_student/{id}",'App\Http\Controllers\CrudController@edit');
Route::post("updateUserInformation/{id}",'App\Http\Controllers\CrudController@update')->name("todo.update");
