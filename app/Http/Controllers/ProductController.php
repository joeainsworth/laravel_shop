<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product as Product;

class ProductController extends Controller
{
    public function index()
    {
    	$products = Product::all();
    	return view('home')->with('products', $products);
    }

    public function show($slug)
    {
    	$product = Product::where('slug', $slug)->first();

    	return view('product.show')->with('product', $product);
    }
}
