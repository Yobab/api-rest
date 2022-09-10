<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ProductsController::class, 'table'])->name('tableProducto');
Route::get('/nuevoProducto', [ProductsController::class, 'registerForm'])->name('nuevoProducto');
Route::get('/editarProducto/{id}', [ProductsController::class, 'editForm'])->name('editarProducto');
