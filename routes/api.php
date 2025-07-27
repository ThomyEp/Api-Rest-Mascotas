<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::prefix('auth')->group(function () {
    Route::post('register', [AuthController::class, 'register']);
    Route::post('login', [AuthController::class, 'login']);
});

Route::middleware('auth:api')->group(function () {
    //routes logged in
    Route::get('auth/me',[AuthController::class, 'me']);
    Route::post('logout', [AuthController::class, 'logout']);

    //routes personas
    Route::apiResource('personas', App\Http\Controllers\PersonaController::class);

    //routes mascotas
    Route::apiResource('mascotas', App\Http\Controllers\MascotaController::class);
    //route mascotas by persona
    Route::get('personas/{id}/mascotas', [App\Http\Controllers\PersonaController::class, 'showWithMascotas']);
});

Route::middleware('auth:api')->get('/private', function () {
    return response()->json(['message' => 'Accediste a una ruta protegida']);
});
