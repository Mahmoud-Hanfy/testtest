<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\Product;
class cartCntroller extends Controller
{
    //
    public function store(Product $product){

        $cart=new Cart();
        $cart->product_id=$product->id;
        $cart->user_id=1;
        $cart->save();
        return redirect()->back();
    }
}
