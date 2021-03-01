<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BillingController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\StripeController;

use App\Services\StripeService;

Route::get('/', [ProductController::class, 'index'])->name('home');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');

Route::get('articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('articles/{article}', [ArticleController::class, 'show'])->middleware('subscribed')->name('articles.show');

Route::get('billings', [BillingController::class, 'index'])->middleware('auth')->name('billings.index');

Route::post('stripe/pay/{product}', [StripeController::class, 'pay'])->name('stripe.pay');

Route::get('invoice/{invoice}', function ($invoiceId) {
    return auth()->user()->downloadInvoice($invoiceId, [
        'vendor' => 'Coders Free',
        'product' => 'Suscripcion',
    ]);
});



Route::get('code', function () {

    $stripeService = new StripeService;

    try {
        $reponse = $stripeService->code('promo_1IPKc0FmP0krE63U2Al5kpQl');
        dd($reponse);

    } catch (Exception $e) {
        echo "El código promocional no existe";
    }

        
});