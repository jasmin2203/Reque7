<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Models\productos;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('producto/{id}' , [ProductoController::class , 'obtenerProductos']);
Route::post('producto',[ProductoController::class, 'crearProductos']);
Route::put('producto/{id}',[ProductoController::class, 'modificarProductos']);
Route::delete('producto/{id}',[ProductoController::class, 'eliminarProductos']);