<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::get();
        return view('Product.index', compact('products'));
        // return view('Product.index');  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return "hello";
        return view('Product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return "hello";
        $product = new Product();

        $product->Name = $request->Name;
        $product->Quantity = $request->Quantity;
        $product->Price = $request->Price;
        $product->save();
            // return view('Product.index');
            // return redirect()->back();
        return redirect()->back()->with('submit','Submited successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product, string $id)
    {
        // return "hello";
        //  return view('Product.edit');
        $product = Product::find($id);
        return view('Product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product, string $id)
    {
        $product = Product::find($id);

        $product->Name = $request->Name;
        $product->Quantity = $request->Quantity;
        $product->Price = $request->Price;
        $product->save();
        // return view('Product.index');
        // return redirect()-back();
        return redirect('Product')->with('updated','Updated successfull');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product, string $id)
    {
        $data = Product::find($id);
        $data->delete();
        return redirect('Product')->with('deleted','Deleted successdully');
    }
}
