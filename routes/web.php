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

Route::get('/', function () {
    //return view('welcome');
    return view ('frontend.index');
});


Route::resource('/products', ProductController::class);

Route::resource('/categories', CategoriesController::class);

Route::resource('/functions', FunctionsController::class);

Route::resource('/inventories', InventoriesController::class);

Route::resource('/permissions', PermissionsController::class);

Route::resource('/roles', RolesController::class);

Route::resource('/suppliers', SuppliersController::class);

Route::resource('/users', UsersController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Rutas CRUD Users
Route::get('/users/create', [App\Http\Controllers\UsersController::class, 'create']);
Route::post('/users', [App\Http\Controllers\UsersController::class, 'store']);
Route::get('/users/{id}/edit', [App\Http\Controllers\UsersController::class, 'edit']);
Route::put('/users/{id}/edit', [App\Http\Controllers\UsersController::class, 'update']);
Route::get('/users/{id}/delete', [App\Http\Controllers\UsersController::class, 'destroy']);

//Rutas CRUD Suppliers
Route::get('/suppliers/create', [App\Http\Controllers\SuppliersController::class, 'create']);
Route::post('/suppliers', [App\Http\Controllers\SuppliersController::class, 'store']);
Route::get('/suppliers/{id}/edit', [App\Http\Controllers\SuppliersController::class, 'edit']);
Route::put('/suppliers/{id}/edit', [App\Http\Controllers\SuppliersController::class, 'update']);
Route::get('/suppliers/{id}/delete', [App\Http\Controllers\SuppliersController::class, 'destroy']);

//Rutas CRUD Products
Route::get('/products/create', [App\Http\Controllers\ProductController::class, 'create']);
Route::post('/products', [App\Http\Controllers\ProductController::class, 'store']);
Route::get('/products/{id}/edit', [App\Http\Controllers\ProductController::class, 'edit']);
Route::put('/products/{id}/edit', [App\Http\Controllers\ProductController::class, 'update']);
Route::get('/products/{id}/delete', [App\Http\Controllers\ProductController::class, 'destroy']);

//Rutas CRUD Categories
Route::get('/categories/create', [App\Http\Controllers\CategoriesController::class, 'create']);
Route::post('/categories', [App\Http\Controllers\CategoriesController::class, 'store']);
Route::get('/categories/{id}/edit', [App\Http\Controllers\CategoriesController::class, 'edit']);
Route::put('/categories/{id}/edit', [App\Http\Controllers\CategoriesController::class, 'update']);
Route::get('/categories/{id}/delete', [App\Http\Controllers\CategoriesController::class, 'destroy']);

