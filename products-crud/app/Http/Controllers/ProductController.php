<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function get()
    {
        $product = new Product();
        $products = $product::get();
        return view("product.index")->with('products', $products);
    }
    public function getOne(Request $req)
    {
        $product = new Product();
        $product = $product::get()->where('id', decrypt($req->id))->first();
        return view("product.getOne")->with('product', $product);
    }
    public function create()
    {
        return view("product.create");
    }
    public function submitCreate(Request $req)
    {
        $req->validate([
            'name' => ['required', 'min:5'],
            'price' => ['gte:10'],
            'quantity' => ['gte:1']
        ]);
        $product = new Product();
        $product->name = $req->name;
        $product->price = $req->price;
        $product->quantity = $req->quantity;
        $product->description = $req->description;
        $product->save();
        return redirect()->route('getOneProduct', ['id' => encrypt($product->id)]);
    }

    public function test()
    {
        return 1;
    }
}
