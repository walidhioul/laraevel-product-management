<?php

namespace App\Http\Controllers;

use App\Models\Product; // Make sure the model name is correctly capitalized
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all(); // Fetch all products from the database
        return view('products.index', compact('products'));
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
}
