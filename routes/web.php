<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/products',[ProductController::class, 'index'])->name('products.index');
Route::get('/products/create',[ProductController::class, 'create'])->name('products.create');
Route::post('/products',[ProductController::class, 'store'])->name('products.store');
Route::post('/produtcs/{product}', [ProductController::class, 'show'])->name('products.show');
Route::get('/produtcs/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/produtcs/{product}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/produtcs/{product}', [ProductController::class, 'destroy'])->name('products.destroy');