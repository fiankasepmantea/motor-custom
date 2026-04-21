<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class DashboardController extends Controller
{
    public function index()
    {
        // total data
        $totalProducts = Product::count();
        $totalCategories = Category::count();

        // chart: jumlah produk per kategori
        $categories = Category::withCount('products')->get();

        $labels = $categories->pluck('name');
        $data = $categories->pluck('products_count');

        return view('admin.dashboard', compact(
            'totalProducts',
            'totalCategories',
            'labels',
            'data'
        ));
    }
}
