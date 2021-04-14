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

Route::get('/', function () {
    return view('index');
});

Route::get("url_login", function () {
    return view("vista_login");
})->name("nombre_login");

Route::get("url_registrar", function () {
    return view("vista_registrar");
})->name("nombre_registrar");

