<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class StripeController extends Controller
{
    public function pay(Request $request, Product $product){
        return $request->all();
    }
}
