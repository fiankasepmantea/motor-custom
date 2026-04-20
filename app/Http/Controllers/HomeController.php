<?php
namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products   = Product::with('category')->latest()->paginate(6);
        $categories = Category::all();

        return view('home', compact('products', 'categories'));
    }
    public function search(Request $request)
    {
        $query = Product::with('category');

        if ($request->keyword) {
            $query->where('name', 'like', '%' . $request->keyword . '%');
        }

        if ($request->category_id) {
            $query->where('category_id', $request->category_id);
        }

        $products = $query->latest()->paginate(6);

        return view('partials.products', compact('products'))->render();
    }
}
