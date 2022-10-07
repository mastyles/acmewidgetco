<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Products;
use DB;

class CartController extends Controller
{
    public function buy_product(Request $request) {
        $cart = new Cart();
        $cart->uid = auth()->user()->id;
        $cart->code = $request->code;
        $lastRWidObj = json_decode(Cart::where('code', 'R01')->latest()->get()->first());
        $is_offer = 0;
        if($lastRWidObj != null && $lastRWidObj->is_offer == 0 && $request->code == 'R01') {
            $is_offer = 1;
        } else {
            $is_offer = 0;
        }
        $cart->is_offer = $is_offer;
        if($request->code == 'R01' && $is_offer == 1) {
            $cart->price = $request->price / 2;
        } else {
            $cart->price = $request->price;
        }
        $cart->save();
        return back();
    }

    // Extra requirement/feature for future use: We can also remove a product.
    public function remove_product($id=null) {
        $product = Cart::findOrFail($id);
        $product->delete();
        return back();
    }
}
