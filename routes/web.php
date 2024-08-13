<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservistaController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('dashboard');
});

// Ruta para los contadores
Route::get('/counters', [ReservistaController::class, 'getCounters']);

// Rutas para las vistas
Route::get('/destacamento1', [ReservistaController::class, 'viewDestacamento1']);
Route::get('/destacamento2', [ReservistaController::class, 'viewDestacamento2']);
Route::get('/destacamento3', [ReservistaController::class, 'viewDestacamento3']);
Route::get('/destacamento4', [ReservistaController::class, 'viewDestacamento4']);
Route::get('/destacamento5', [ReservistaController::class, 'viewDestacamento5']);
Route::get('/planaMayor', [ReservistaController::class, 'viewPlanaMayor']);

// Rutas para CRUD
Route::get('/reservistas/create', function () {
    return view('create');
});
Route::get('/reservistas/{id}/edit', [ReservistaController::class, 'edit']);
Route::delete('/reservistas/{id}', [ReservistaController::class, 'destroy']);
Route::post('/reservistas', [ReservistaController::class, 'store']);
Route::put('/reservistas/{id}', [ReservistaController::class, 'update']);

// Rutas para Usuarios y Roles
Route::post('/users/{id}/assign-role', [UserController::class, 'assignRole']);
