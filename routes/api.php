<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\ValidateToken;
use App\Http\Controllers;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('authentication')->group(function () {
    Route::post('login', [Controllers\AuthController::class, 'login']);
});

Route::prefix("user")->middleware(ValidateToken::class)->group(function () {
    Route::get("current", [Controllers\UsersController::class, 'current']);
});
