<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/create-product', [ProductsController::class, 'create'])->name('registerProduct');
Route::patch('/edit-product/{id}', [ProductsController::class, 'update'])->name('editProduct');
Route::delete('/delete-product/{id}', [ProductsController::class, 'delete'])->name('deleteProduct');
Route::get('/get-products', [ProductsController::class, 'getAll'])->name('getAllProduct');
Route::get('/get-product/{id}', [ProductsController::class, 'getOne'])->name('getOneProduct');
