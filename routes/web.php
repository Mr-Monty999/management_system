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


Route::group(
    ["middleware" => "guest"],
    function () {
        Route::get("login", "UserController@loginPage")->name("users.login");
        Route::post("login", "UserController@login")->name("users.login.attempt");
    }
);


Route::group(["middleware" => "auth"], function () {
    Route::get("/", "PersonController@create");
    Route::get("users/{user}/privacy", "UserController@privacy")->name("users.privacy");
    Route::put("users/{user}/privacy", "UserController@updatePrivacy")->name("users.privacy.update");
    Route::post("logout", "UserController@logout")->name("user.logout");

    Route::resource("people", "PersonController");
    Route::resource("people.worktimes", "PersonWorkTimeController");
    Route::resource("people.borrows", "PersonBorrowController");
    Route::resource("stocks", "StockController");
    Route::resource("vehicles", "VehicleController");
    Route::resource("vehicles.worktimes", "VehicleWorkTimeController");
    Route::resource("vehicles.fuels", "VehicleFuelController");
    Route::resource("vehicles.maintenances", "VehicleMaintenanceController");
    Route::resource("vehicles.production-movements", "VehicleProductionMovementController");
    Route::resource("custodies", "CustodyController");
    Route::resource("custodies.borrows", "CustodyBorrowController");
    Route::resource("custodies.spends", "CustodySpendController");
});
