<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retrieve and display a list of products from the database
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Show a form to create a new product
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate and store the new product in the database
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'details' => 'required|string',
            'price' => 'required|numeric',
        ]);

        $product = Product::create($validatedData);

        return redirect()->route('products.show', $product->id)
            ->with('success', 'Product created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Show details of a specific product
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Show a form to edit an existing product
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate and update the product in the database
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'details' => 'required|string',
            'price' => 'required|numeric',
        ]);

        $product = Product::findOrFail($id);
        $product->update($validatedData);

        return redirect()->route('products.show', $id)
            ->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Delete a specific product from the database
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')
            ->with('success', 'Product deleted successfully');
    }
}
