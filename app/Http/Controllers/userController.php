<?php

namespace App\Http\Controllers;

use App\Product;
use App\Cart;
use Illuminate\Http\Request;

class userController extends Controller
{
    //
    public function index()
    {
        $products=Product::get();
        $carts=Cart::where('user_id',1)->get();
        return view('user.product',compact('products','carts'));
    }
}
