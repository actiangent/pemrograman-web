<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function products()
    {
        $data['title'] = 'Products';
        $data['products'] = Product::all();
        return view('product/products', $data);
    }

    public function create()
    {
        $data['title'] = 'Create';
        return view('product/create', $data);
    }

    public function create_action(Request $request)
    {
        $product = new Product([
            'name' => $request->name
        ]);
        $product->save();

        return redirect()->route('products')->with('Success', 'Product added !');
    }

    public function delete(Product $product)
    {
        Product::destroy($product->id);
        return redirect()->route('products')->with('Success', 'Product deleted !');
    }

}
