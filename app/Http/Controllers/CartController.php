<?php

namespace App\Http\Controllers;
use App\Food;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Food $food)
    {
    	//dd($food);

    	\Cart::add(array(
    	'id' => $food->id,
    	'name' => $food->name,
    	'price' => $food->price,
    	'quantity' => 1,
    	'attributes' => array(),
    	'associatedModel' => $food
		));
		return redirect()->route('cart.index');
    }

    public function index()
    {
    	$carts = \Cart::getContent();
    	return view('cart.index',compact('carts'));
    }

    public function destroy($id)
    {
    	\Cart::remove($id);
    	return back();
    }
    public function update($id)
    {
    	\Cart::update($id,[
		'quantity' => array(
		'relative' => false,
		'value'=> request('quantity')
		)
		]);
    	return back();
    }

    public function checkout()
    {
        return view('cart.checkout');
    }
}