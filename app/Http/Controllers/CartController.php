<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Cart;
use Form;

class CartController extends Controller
{
	public function index()
	{
		return view('cart.index');
	}

    public function store(Request $request) 
    {
    	// Cart::add($request->id, $request->name, $request->quantity, $request->price);

    	return redirect('cart')->withSuccessMessage("{$request->quantity} x {$request->name} was added to your cart");
    }
}
