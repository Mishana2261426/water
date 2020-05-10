<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::all();

        //return view('load', ['path' => $path]);

        return view('home', [
            'products' => $products,
        ]);
    }

    public function add()
    {
        return view('add');
    }

    public function store(Request $request)
    {
        $product = new Product();
        $product->VendorCode = $request->VendorCode;
        $product->Name = $request->Name;
        $product->Сapacity = $request->Сapacity;
        $product->Description = $request->Description;
        $product->Price = $request->Price;
        $path = $request->file('Img')->store('uploads', 'public');
        $product->Img = $path;
        $product->save();
        return redirect('/home');
    }

    public function update($id)
    {
        $products = Product::all()->where('id', $id)->first();
        $url_data = [
            array(
                'img' => '../../../storage/app/public/'.$products->Img
            )
        ];

        return view('update', ['products' => $products, 'url_data' => $url_data]);
    }

    public function send(Request $request)
    {
        $product = Product::findOrFail($request->id);

        if (empty($request->Img)) {

            $path = $product->Img;
        } else {
            $path = $request->file('Img')->store('', 'public');
        }

            $product->VendorCode = $request->VendorCode;
            $product->Name = $request->Name;
            $product->Сapacity = $request->Сapacity;
            $product->Description = $request->Description;
            $product->Price = $request->Price;
            $product->Img = $path;
            $product->update();

            return redirect('/home');

    }

    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect('home');
    }


}
