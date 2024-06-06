<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $product = Product::all();
        $category = Category::all();
        return view('Home', compact('product', 'category'));
    }

    public function category()
    {
        $category = Category::orderBy('id', 'DESC')->paginate(4);
        return view('category', compact('category'));
    }

    public function product()
    {
        $product = Product::orderBy('id', 'DESC')->paginate(5);
        return view('product', compact('product'));
    }

    public function admin()
    {
        return view('layout.admin');
    }

    public function product_index()
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    public function product_create()
    {
        return view('product.create');
    }

    public function product_store(Request $request)
    {
        $productName = $request->input('product_name');
        $productDescription = $request->input('product_description');
        return redirect()->route('product.index')->with('success', 'Sản phẩm đã được tạo thành công.');
    }

    public function category_index()
    {
        $categories = Category::all();
        return view('category.index', compact('categories'));
    }

    public function category_create()
    {
        return view('category.create');
    }

    public function category_store(Request $request)
    {
        $categoryName = $request->input('name');
        return redirect()->route('category.index')->with('success', 'Danh mục đã được tạo thành công.');
    }
}
