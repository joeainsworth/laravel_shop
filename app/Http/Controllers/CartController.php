<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

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
    	Cart::add(Product::find($request->id), $request->quantity);

    	return redirect('cart')->withSuccessMessage("{$request->quantity} x {$request->name} was added to your cart");
    }

    public function update(Request $request, $rowId)
    {
        Cart::update($rowId, $request->quantity);

        session()->flash('success_message', 'Your cart has been updated!');

        return response()->json(['success' => true]);
    }

    public function destroy($rowId)
    {
    	$product = Cart::get($rowId);

    	Cart::remove($product->rowId);

    	return redirect('cart')->withSuccessMessage("{$product->model->name} was removed from your cart");
    }

    public function emptyCart()
    {
    	Cart::destroy();

  		return redirect('cart')->withSuccessMessage('Your cart has been emptied.');
    }
}
