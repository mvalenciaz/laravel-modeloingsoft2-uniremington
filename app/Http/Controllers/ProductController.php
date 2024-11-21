<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::simplePaginate(5);
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->code = $request->code;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->ammount = $request->ammount;
        $product->supplier = $request->supplier;
        $product->description = $request->description;
        $product->save();
        return Redirect::route('products.index');
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
        return view('products.edit',['product'=>$product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $product->code = $request->code;
        $product->name = $request->name;        
        $product->price = $request->price;
        $product->ammount = $request->ammount;
        $product->supplier = $request->supplier;
        $product->description = $request->description;
        $product->save();
        return Redirect::route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return Redirect::route('products.index');
    }

    public function pdf($id)
    {
        $product = Product::find($id);
        $pdf = Pdf::loadView('products.pdf', compact('product'));
        return $pdf->stream('product'.$product->id.'.pdf');
        // return $pdf->download('product.pdf');
    }
}
