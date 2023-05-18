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
        $data['product'] = Product::all();
        return view('product/index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new Product([
            'name' => $request->name
        ]);
        $product->save();

        return redirect()->route('product')->with('Success', 'Product added !');
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
    public function edit(Product $product)
    {
        $data['product'] = $product;
        return view('product/edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $updatedProduct['name'] = $request->name;

        Product::where('id', $product->id)->update($updatedProduct);
        return redirect()->route('product')->with('Success', 'Product updated !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        Product::destroy($product->id);
        return redirect()->route('product')->with('Success', 'Product deleted !');
    }
}
