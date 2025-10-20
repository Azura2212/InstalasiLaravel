<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = [
            ['nama' => 'laptop asus', 'harga' => 8500000],
            ['nama' => 'headset rexus', 'harga' => 250000],
            ['nama' => 'mouse logitech', 'harga' => 150000], 
        ];

        return view('produk', ['products' => $products]);
    }
}
