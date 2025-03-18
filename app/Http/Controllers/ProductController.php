<?php

namespace App\Http\Controllers;

use App\Models\Product; // Make sure the model name is correctly capitalized
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }
    
    public function dashbord() {
        return view('product.dashbord');
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request) {
        // Validate form input
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:500',
        ]);
    
        // Create new product
        Product::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ]);
    
        // Redirect with success message
        return back()->with('success', 'Product created successfully!');
    }
    
    public function edit(Product $product)
    {
        return view('product.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        // Validate form input
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:500',
        ]);

        // Update product
        $product->update($request->all());

        return redirect()->route('product.index')->with('success', 'Product updated successfully!');
    }
}
