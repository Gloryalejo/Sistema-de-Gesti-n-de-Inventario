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
use App\Http\Controllers\ProductLogController;
use App\Http\Controllers\InventoryController;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\AuthController;


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

// ruta de productos sin proteger

// Route::get('products', [App\Http\Controllers\ProductController::class, 'index']);
// Route::get('/products/create', [App\Http\Controllers\ProductController::class, 'create']);
// Route::post('/products/create', [App\Http\Controllers\ProductController::class, 'store']);
// Route::get('/products/{id}/edit', [App\Http\Controllers\ProductController::class, 'edit']);
// Route::put('/products/{id}/edit', [App\Http\Controllers\ProductController::class, 'update']);
// Route::get('/products/{id}/delete', [App\Http\Controllers\ProductController::class, 'destroy']);

Route::get('/product-log', [App\Http\Controllers\ProductLogController:: class, 'index']);

/* Route::get('categories', [App\Http\Controllers\CategoriesController::class, 'index'])->middleware(['auth:sanctum', 'ability:check-status,place-orders']);
Route::get('/categories/create', [App\Http\Controllers\CategoriesController::class, 'create'])->middleware(['auth:sanctum', 'ability:check-status,place-orders']);
Route::post('/categories/create', [App\Http\Controllers\CategoriesController::class, 'store'])->middleware(['auth:sanctum', 'ability:check-status,place-orders']);
Route::get('/categories/{id}/edit', [App\Http\Controllers\CategoriesController::class, 'edit'])->middleware(['auth:sanctum', 'ability:check-status,place-orders']);
Route::put('/categories/{id}/edit', [App\Http\Controllers\CategoriesController::class, 'update'])->middleware(['auth:sanctum', 'ability:check-status,place-orders']);
Route::get('/categories/{id}/delete', [App\Http\Controllers\CategoriesController::class, 'destroy'])->middleware(['auth:sanctum', 'ability:check-status,place-orders']); */

Route::get('categories', [App\Http\Controllers\CategoriesController::class, 'index']);
Route::get('/categories/create', [App\Http\Controllers\CategoriesController::class, 'create']);
Route::post('/categories/create', [App\Http\Controllers\CategoriesController::class, 'store']);
Route::get('/categories/{id}/edit', [App\Http\Controllers\CategoriesController::class, 'edit']);
Route::put('/categories/{id}/edit', [App\Http\Controllers\CategoriesController::class, 'update']);
Route::get('/categories/{id}/delete', [App\Http\Controllers\CategoriesController::class, 'destroy']);

Route::get('functions', [App\Http\Controllers\FunctionsController::class, 'index'])->middleware(['auth:sanctum', 'ability:check-status,place-orders']);


Route::get('inventory', [App\Http\Controllers\InventoryController::class, 'index'])->middleware(['auth:sanctum', 'ability:check-status,place-orders']);
Route::get('/inventory/in', [App\Http\Controllers\InventoryController::class, 'in'])->middleware(['auth:sanctum', 'ability:check-status,place-orders']);
Route::post('/inventory/in', [App\Http\Controllers\InventoryController::class, 'storeIn'])->middleware(['auth:sanctum', 'ability:check-status,place-orders']);
Route::get('/inventory/out', [App\Http\Controllers\InventoryController::class, 'out'])->middleware(['auth:sanctum', 'ability:check-status,place-orders']);
Route::post('/inventory/out', [App\Http\Controllers\InventoryController::class, 'storeOut'])->middleware(['auth:sanctum', 'ability:check-status,place-orders']);

Route::get('permissions', [App\Http\Controllers\PermissionsController::class, 'index'])->middleware(['auth:sanctum', 'ability:check-status,place-orders']);


Route::get('roles', [App\Http\Controllers\RolesController::class, 'index'])->middleware(['auth:sanctum', 'ability:check-status,place-orders']);

Route::get('suppliers', [App\Http\Controllers\SuppliersController::class, 'index'])->middleware(['auth:sanctum', 'ability:check-status,place-orders']);
Route::get('/suppliers/create', [App\Http\Controllers\SuppliersController::class, 'create'])->middleware(['auth:sanctum', 'ability:check-status,place-orders']);
Route::post('/suppliers/create', [App\Http\Controllers\SuppliersController::class, 'store'])->middleware(['auth:sanctum', 'ability:check-status,place-orders']);
Route::get('/suppliers/{id}/edit', [App\Http\Controllers\SuppliersController::class, 'edit'])->middleware(['auth:sanctum', 'ability:check-status,place-orders']);
Route::put('/suppliers/{id}/edit', [App\Http\Controllers\SuppliersController::class, 'update'])->middleware(['auth:sanctum', 'ability:check-status,place-orders']);
Route::get('/suppliers/{id}/delete', [App\Http\Controllers\SuppliersController::class, 'destroy'])->middleware(['auth:sanctum', 'ability:check-status,place-orders']);

// Route::get('suppliers', [App\Http\Controllers\SuppliersController::class, 'index']);
// Route::get('/suppliers/create', [App\Http\Controllers\SuppliersController::class, 'create']);
// Route::post('/suppliers/create', [App\Http\Controllers\SuppliersController::class, 'store']);
// Route::get('/suppliers/{id}/edit', [App\Http\Controllers\SuppliersController::class, 'edit']);
// Route::put('/suppliers/{id}/edit', [App\Http\Controllers\SuppliersController::class, 'update']);
// Route::get('/suppliers/{id}/delete', [App\Http\Controllers\SuppliersController::class, 'destroy']);


// Route::get('/inventory', [InventoryController::class, 'index']);
// Route::get('/inventory/out', [InventoryController::class, 'createOut']);


 
Route::get('/auth/redirect', [AuthController::class, 'redirect'])
    ->name('auth.redirect');

Route::get('/auth/callback', [AuthController::class,'callback'])
    ->name('auth.callback');
 







