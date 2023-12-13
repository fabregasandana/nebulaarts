<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart as FacadesCart;

class CartController extends Controller
{
    public function index(){
        $cartItems = FacadesCart::instance('cart')->content();
        return view('cart');
    }
}
