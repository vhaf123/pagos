<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BillingController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\StripeController;

Route::get('/', [ProductController::class, 'index'])->name('home');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');

Route::get('articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('articles/{article}', [ArticleController::class, 'show'])->name('articles.show');

Route::get('billings', [BillingController::class, 'index'])->name('billings.index');

Route::post('stripe/pay/{product}', [StripeController::class, 'pay'])->name('stripe.pay');