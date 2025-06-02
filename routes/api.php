<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

Route::post('login', [AuthController::class, 'login']);
Route::post('register-user', [AuthController::class, 'registerUser']);

Route::middleware('auth:api')->group(function () {
    Route::post('logout', [AuthController::class, 'logout']);
    Route::get('me', [AuthController::class, 'me']);

    Route::apiResource('categorias', CategoriaController::class);

    Route::apiResource('productos', ProductoController::class);

    Route::apiResource('pedidos', PedidoController::class);
});


// php artisan migrate:refresh --seed
// php artisan serve