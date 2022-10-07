<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Cart;

class ProductsController extends Controller
{
    public function index() {
        $products = Products::all();
        if(auth()->check()) {
            $cart = Cart::where('uid', auth()->user()->id)->orderBy('id', 'DESC')->get();

            $totalArr = $this->calculate_total();
        } else {
            $cart = [];
            $totalArr = [];
        }
        return view('welcome', compact('products', 'cart', 'totalArr'));
    }

    public function calculate_total() {
        $d_cost = 0;
        $subtotal = Cart::where('uid', auth()->user()->id)->sum('price');
        if ($subtotal != 0) {
            if ($subtotal < 50) {
                $d_cost = 4.95;
            } else if ($subtotal < 90) {
                $d_cost = 2.95;
            }
        }
        $total = $subtotal + $d_cost;
        return array(
                    "subtotal" => $subtotal,
                    "d_cost" => $d_cost,
                    "total" => $total
                );
    }

}
