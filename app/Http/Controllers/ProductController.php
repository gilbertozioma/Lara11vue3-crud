<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return Inertia::render('Frontend/Product/Index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Frontend/Product/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:255',
            'price' => 'required|integer'
        ]);

        Product::create([
            'name' => $request->name,
            'price' => $request->price
        ]);

        return redirect()->to('/')->with('success', 'Product Created Successfully!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::find($id);
        return Inertia::render('Frontend/Product/Show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::find($id);
        return Inertia::render('Frontend/Product/Edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:255',
            'price' => 'required|integer'
        ]);

        $product = Product::find($id);
        $product->update([
            'name' => $request->name,
            'price' => $request->price
        ]);

        return redirect()->to('/')->with('success', 'Product Updated Successfully!');;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect()->to('/')->with('success', 'Product Deleted Successfully!');;
    }
}
