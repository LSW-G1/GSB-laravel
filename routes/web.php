<?php

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

/**
Route::get('/', function () {
    return view('welcome');
});

 **/

Route::get("/login", function() {
    return view("gsb.login");
});

Route::group(["middleware" => ["Auth"]], function() {

    Route::get("/", function() {
        return view("gsb.index");
    });

});