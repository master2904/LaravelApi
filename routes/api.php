<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\TransaccionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VentaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::resource('/usuario',UserController::class);
Route::resource('/cliente',ClienteController::class);
Route::resource('/categoria',CategoriaController::class);
Route::resource('/producto',ProductoController::class);
Route::resource('/venta',VentaController::class);
Route::resource('/transaccion',TransaccionController::class);

//categoria
Route::get('/categoria/producto/{id}',[CategoriaController::class,'productosCategoria']);
//user
Route::get('/usuario/rol/{roles}',[UserController::class,'roles']);
Route::get('/usuario/imagen/{imagen}',[UserController::class,'image']);
Route::post('/usuario/imagen/',[UserController::class,'imageUpload']);
//producto
Route::get('/producto/imagen/{imagen}',[ProductoController::class,'image']);
Route::post('/producto/imagen/',[ProductoController::class,'imageUpload']);
//venta
Route::get('/ventas/reporte',[VentaController::class,'reporteCliente']);

//Rutas a las que se permitirá acceso
Route::group(['middleware' => ['cors']], function () {
});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
