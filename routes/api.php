<?php


use Illuminate\Support\Facades\Route;


Route::get('/prueba', function () {
    return 'ok';
});

Route::apiResource('departamentos', App\Http\Controllers\Api\DepartamentoController::class)->only(['index']);
Route::apiResource('cargos', App\Http\Controllers\Api\CargoController::class)->only(['index']);
Route::apiResource('users', App\Http\Controllers\Api\UserController::class);
