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

Route::get("/", "PersonController@create");


Route::resource("people", "PersonController");
Route::resource("people.worktimes", "PersonWorkTimeController");
Route::resource("people.borrows", "PersonBorrowController");
