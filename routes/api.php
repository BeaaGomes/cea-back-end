<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\GreetingController;
use App\Http\Controllers\UserController;

Route::get('/greeting', [GreetingController::class, 'greet']);

Route::post('/product', [ProductController::class, 'createProduct']);

Route::get('/product/{id}', [ProductController::class, 'getProduct']);

Route::get('/products', [ProductController::class, 'getProducts']);

Route::delete('/product/{id}', [ProductController::class, 'deleteProduct']);

Route::put('/product-name/{id}', [ProductController::class, 'updateProductName']);

Route::put('/product-description/{id}', [ProductController::class, 'updateProductDescription']);

Route::put('/product-price/{id}', [ProductController::class, 'updateProductPrice']);

Route::put('/product-image/{id}', [ProductController::class, 'updateProductImage']);

Route::post('/user', [UserController::class, 'createUser']);


