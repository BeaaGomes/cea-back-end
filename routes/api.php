<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\GreetingController;
use App\Http\Controllers\UserController;

Route::get('/greeting', [GreetingController::class, 'greet']);

Route::middleware("auth:sanctum")->post('/product', [ProductController::class, 'createProduct']);

Route::middleware("auth:sanctum")->get('/product/{id}', [ProductController::class, 'getProduct']);

Route::middleware("auth:sanctum")->get('/products', [ProductController::class, 'getProducts']);

Route::middleware("auth:sanctum")->delete('/product/{id}', [ProductController::class, 'deleteProduct']);

Route::middleware("auth:sanctum")->put('/product-name/{id}', [ProductController::class, 'updateProductName']);

Route::post('/login', [UserController::class, 'login']);

Route::middleware("auth:sanctum")->put('/product-description/{id}', [ProductController::class, 'updateProductDescription']);

Route::middleware("auth:sanctum")->put('/product-price/{id}', [ProductController::class, 'updateProductPrice']);

Route::middleware("auth:sanctum")->put('/product-image/{id}', [ProductController::class, 'updateProductImage']);

Route::post('/user', [UserController::class, 'createUser']);


