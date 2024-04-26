<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\FunctionsController;
use App\Http\Controllers\InventoriesController;
use App\Http\Controllers\InventoryLogsController;
use App\Http\Controllers\PermissionsController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\SuppliersController;
use App\Http\Controllers\UsersController;
use Illuminate\Http\Request;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();

Route::get('/', function () {
    //return view('welcome');
    return view ('frontend.index');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('users', [App\Http\Controllers\UsersController::class, 'index'])->middleware(['auth:sanctum', 'ability:check-status,place-orders']);
Route::get('/users/create', [App\Http\Controllers\UsersController::class, 'create'])->middleware(['auth:sanctum', 'ability:check-status,place-orders']);
Route::post('/users/create', [App\Http\Controllers\UsersController::class, 'store'])->middleware(['auth:sanctum', 'ability:check-status,place-orders']);
Route::get('/users/{id}/edit', [App\Http\Controllers\UsersController::class, 'edit'])->middleware(['auth:sanctum', 'ability:check-status,place-orders']);
Route::put('/users/{id}/edit', [App\Http\Controllers\UsersController::class, 'update'])->middleware(['auth:sanctum', 'ability:check-status,place-orders']);
Route::get('/users/{id}/delete', [App\Http\Controllers\UsersController::class, 'destroy'])->middleware(['auth:sanctum', 'ability:check-status,place-orders']);

Route::get('products', [App\Http\Controllers\ProductController::class, 'index'])->middleware(['auth:sanctum', 'ability:check-status,place-orders']);
Route::get('/products/create', [App\Http\Controllers\ProductController::class, 'create'])->middleware(['auth:sanctum', 'ability:check-status,place-orders']);
Route::post('/products/create', [App\Http\Controllers\ProductController::class, 'store'])->middleware(['auth:sanctum', 'ability:check-status,place-orders']);
Route::get('/products/{id}/edit', [App\Http\Controllers\ProductController::class, 'edit'])->middleware(['auth:sanctum', 'ability:check-status,place-orders']);
Route::put('/products/{id}/edit', [App\Http\Controllers\ProductController::class, 'update'])->middleware(['auth:sanctum', 'ability:check-status,place-orders']);
Route::get('/products/{id}/delete', [App\Http\Controllers\ProductController::class, 'destroy'])->middleware(['auth:sanctum', 'ability:check-status,place-orders']);


Route::get('categories', [App\Http\Controllers\CategoriesController::class, 'index'])->middleware(['auth:sanctum', 'ability:check-status,place-orders']);
Route::get('/categories/create', [App\Http\Controllers\CategoriesController::class, 'create'])->middleware(['auth:sanctum', 'ability:check-status,place-orders']);
Route::post('/categories/create', [App\Http\Controllers\CategoriesController::class, 'store'])->middleware(['auth:sanctum', 'ability:check-status,place-orders']);
Route::get('/categories/{id}/edit', [App\Http\Controllers\CategoriesController::class, 'edit'])->middleware(['auth:sanctum', 'ability:check-status,place-orders']);
Route::put('/categories/{id}/edit', [App\Http\Controllers\CategoriesController::class, 'update'])->middleware(['auth:sanctum', 'ability:check-status,place-orders']);
Route::get('/categories/{id}/delete', [App\Http\Controllers\CategoriesController::class, 'destroy'])->middleware(['auth:sanctum', 'ability:check-status,place-orders']);

Route::get('functions', [App\Http\Controllers\FunctionsController::class, 'index'])->middleware(['auth:sanctum', 'ability:check-status,place-orders']);


Route::get('inventories', [App\Http\Controllers\InventoriesController::class, 'index'])->middleware(['auth:sanctum', 'ability:check-status,place-orders']);


Route::get('permissions', [App\Http\Controllers\PermissionsController::class, 'index'])->middleware(['auth:sanctum', 'ability:check-status,place-orders']);


Route::get('roles', [App\Http\Controllers\RolesController::class, 'index'])->middleware(['auth:sanctum', 'ability:check-status,place-orders']);

Route::get('suppliers', [App\Http\Controllers\SuppliersController::class, 'index'])->middleware(['auth:sanctum', 'ability:check-status,place-orders']);
Route::get('/suppliers/create', [App\Http\Controllers\SuppliersController::class, 'create'])->middleware(['auth:sanctum', 'ability:check-status,place-orders']);
Route::post('/suppliers/create', [App\Http\Controllers\SuppliersController::class, 'store'])->middleware(['auth:sanctum', 'ability:check-status,place-orders']);
Route::get('/suppliers/{id}/edit', [App\Http\Controllers\SuppliersController::class, 'edit'])->middleware(['auth:sanctum', 'ability:check-status,place-orders']);
Route::put('/suppliers/{id}/edit', [App\Http\Controllers\SuppliersController::class, 'update'])->middleware(['auth:sanctum', 'ability:check-status,place-orders']);
Route::get('/suppliers/{id}/delete', [App\Http\Controllers\SuppliersController::class, 'destroy'])->middleware(['auth:sanctum', 'ability:check-status,place-orders']);












