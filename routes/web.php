<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\FunctionsController;
use App\Http\Controllers\InventoriesController;
use App\Http\Controllers\InventoryLogsController;
use App\Http\Controllers\PermissionsController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\SupplierController;
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

Route::resource('/suppliers', SupplierController::class);

Route::resource('/users', UsersController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/users/create', [App\Http\Controllers\UsersController::class, 'create']);
Route::post('/users', [App\Http\Controllers\UsersController::class, 'store']);
Route::get('/users/{id}/edit', [App\Http\Controllers\UsersController::class, 'edit']);
Route::put('/users/{id}/edit', [App\Http\Controllers\UsersController::class, 'update']);
Route::get('/users/{id}/delete', [App\Http\Controllers\UsersController::class, 'destroy']);

