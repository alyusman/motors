<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $totalProducts = Product::count();
        // dd($totalProducts);
        return view('home', compact('totalProducts'));
    }

    public function createProduct()
    {
        return view('createProduct');
    }

    public function stock()
    {
        $products = Product::all();
        return view('stock', compact('products'));
    }

    public function singleProduct($id)
    {
        $product = Product::find($id);
        return response()->json([
            'data' => $product
        ]);
    }
}
