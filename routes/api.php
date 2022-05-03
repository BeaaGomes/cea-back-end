<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\GreetingController;

Route::get('/greeting', [GreetingController::class, 'greet']);

Route::post('/product', [ProductController::class, 'createProduct']);

Route::get('/product/{id}', [ProductController::class, 'getProduct']);

Route::get('/products', [ProductController::class, 'getProducts']);

