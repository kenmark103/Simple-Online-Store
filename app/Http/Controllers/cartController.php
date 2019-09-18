<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use Cart;

class cartController extends Controller
{
    //
    public function index()
    {
        //

        $cartCollection= Cart::getContent();
        $subTotal = Cart::getSubTotal();
        $Total = Cart::getTotal();
        $cartTotalQuantity = Cart::getTotalQuantity();
        $condition = new \Darryldecode\Cart\CartCondition(array(
			'name' => 'VAT 12.5%',
			'type' => 'tax',
			'target' => 'total', 
			'value' => '12.5%',
			'attributes' => array(
				'description' => 'Value added tax',
			)
		));

		Cart::condition($condition);

        return view('Frontend.cart',[
        	'cartitems'=>$cartCollection,
        	'subTotal'=>$subTotal,
        	'Total'=>$Total,
        	'cartCount'=>$cartTotalQuantity,

        ]);
    }

    public function addcart($id)
    {
        $product= products::find($id);
        Cart::add(array(
        'id' => $product['id'],
        'name' => $product['productname'],
        'price' => $product['productprice'],
        'quantity' => 1,
        'attributes' => array(
        	'description' => $product['productdescription'],
        	'image' => $product['imagecover'],
        )
        ));

        return redirect()->back()->with('message','your product has been added to your cart!');
    }

    public function checkOut(Request $request)
    {
    	$this->validate($request, [
             'payment' => 'required|integer',
         ]);
    	$amountPaid=$request->only('payment');
    	$Total = Cart::getTotal();
    	if($amountPaid >= $Total) {
    		$cartItems= Cart::getContent();
    		foreach ($cartItems as $i) {
    			# code...
    			$product = products::find($i['id']);
    			
    			$product->update(['quantity' => $product['quantity']-1]);
    		}

    		Cart::clear();

    		return redirect()->route('welcome')->with('message','your payment has been received,
    			we will send your order as soon as we can!! Thanks for shopping with us');
    	}
    	else{
    		return redirect()->back()->with('error','payment not enough');
    	}

    }

}
