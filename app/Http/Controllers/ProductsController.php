<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{

    public function index()
    {
        return Product::all();
    }

    public function show($product)
    {
        return Product::all()->only($product);
    }

    public function store(Request $request)
    {
        $product = Product::create($request->all());

        $arr = json_decode($product, true);

        return json_encode($arr);

//        foreach ($arr as $key => $value) {
//            echo ($value);
//        }

        //return response()->json($product, 201);
    }

    public function update(Request $request, Product $product)
    {
        $product->update($request->all());

        return response()->json($product, 200);
    }

    public function delete(Product $product)
    {
        $product->delete();

        return response()->json(null, 204);
    }

}
