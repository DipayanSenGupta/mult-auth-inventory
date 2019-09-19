<?php

namespace App\Http\Controllers;

use App\Product;
use App\History;
use Illuminate\Http\Request;
use Auth;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(15);

        return view('products.index', compact('products'));
    }
    public function checkoutIndex()
    {
        $products = Product::all();
        return view('sales-checkout', compact('products'));

    }

    public function history()
    {
        $histories = History::paginate(15);

        return view('history-index', compact('histories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'price'=> 'required|integer|min:1',
            'quantity' => 'required|integer|min:10'
          ]);
          $product = new Product([
            'name' => $request->get('name'),
            'price'=> $request->get('price'),
            'quantity'=> $request->get('quantity')
          ]);
          $product->save();
          return redirect('/products/index')->with('success', 'Product has been added');    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }

        /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function checkout(Request $request)
    {
        // dd($request);

        $productId = $request->input('itemId');
        $message = '';
        $product = Product::find($productId);
        $productQuantity = $request->input('quantity');
        $netQuanity = $product->quantity - $productQuantity;
        if($netQuanity){
            $product->quantity = $netQuanity;
            $product->name = $product->name;
            $product->price = $product->price;
            $product->save();
            $message = 'Checkout has finished';
        }
        else{
            $message = 'you are checking out more than what is available';
            return redirect('/products/checkoutIndex')->with('success', $message );
        }
        $history = new History([
            'name' => $product->name,
            'person'=> Auth::user()->name,
            'quantity'=> $productQuantity
          ]);
          $history->save();
          return redirect('/products/checkoutIndex')->with('success', $message );

    }
}
