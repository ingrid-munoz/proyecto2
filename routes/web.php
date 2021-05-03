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
    return view('welcome');
});
// Creamos el "ecosistema"
Route::resource("cliente",App\Http\Controllers\ClienteController::class);
Route::resource("empleado",App\Http\Controllers\EmpleadoController::class);
Route::resource("idioma",App\Http\Controllers\IdiomaController::class);
Route::resource("factura",App\Http\Controllers\FacturaController::class);
