<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\GreetingController;

Route::get('/greeting', [GreetingController::class, 'greet']);

Route::post('/product', [ProductController::class, 'createProduct']);

Route::get('/product/{id}', [ProductController::class, 'getProduct']);

Route::get('/products', [ProductController::class, 'getProducts']);

Route::get('/product/delete/{id}', [ProductController::class, 'deleteProduct']);

Route::put('/product-name/{id}', [ProductController::class, 'updateProductName']);

Route::put('/product-description/{id}', [ProductController::class, 'updateProductDescription']);

Route::put('/product-price/{id}', [ProductController::class, 'updateProductPrice']);


