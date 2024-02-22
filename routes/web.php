<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductDetailController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');
Route::get('/customers/create', [CustomerController::class, 'create'])->name('customers.create');
Route::post('/customers', [CustomerController::class, 'store'])->name('customers.store');
Route::get('/customers/{customer}/edit', [CustomerController::class, 'edit'])->name('customers.edit');
Route::put('/customers/{customer}', [CustomerController::class, 'update'])->name('customers.update');
Route::delete('/customers/{customer}', [CustomerController::class, 'destroy'])->name('customers.destroy');

Route::get('/products', [ProductDetailController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductDetailController::class, 'create'])->name('products.create');
Route::post('/products', [ProductDetailController::class, 'store'])->name('products.store');
Route::get('/products/{product}/edit', [ProductDetailController::class, 'edit'])->name('products.edit');
Route::put('/products/{product}', [ProductDetailController::class, 'update'])->name('products.update');
Route::delete('/products/{product}', [ProductDetailController::class, 'destroy'])->name('products.destroy');
