<?php

use Illuminate\Support\Facades\Route;

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('/', [App\Http\Controllers\ProductsController::class, 'index']);
Route::post('buy-product', [App\Http\Controllers\CartController::class, 'buy_product']);
Route::delete('del-product/{id}', [App\Http\Controllers\CartController::class, 'remove_product']);
// Route::get('add-product', function() {
//     return view('add_product');
// });
