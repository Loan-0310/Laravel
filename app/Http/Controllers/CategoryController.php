<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryCreateRequest;
use App\Http\Requests\CategoryUpdateRequest;

class CategoryController extends Controller
{
    public function category_index()
    {
        $categories = Category::orderBy('id', 'DESC')->paginate(3);
        return view('category.index', compact('categories'));
    }

    public function category_create()
    {
        $categories = Category::all();
        return view('category.create', ['categories' => $categories]);
    }

    public function category_store(CategoryCreateRequest $req)
    {
        $form_data = $req->only('name');
        category::create($form_data);
        return redirect()->route('category.index');
    }

    public function category_edit(Category $category)
    {

        return view('category.edit', compact('category'));
    }

    public function category_update(CategoryCreateRequest $req, Category $category)
    {
        $form_data = $req->only('name');
        $category->update($form_data);
        return redirect()->route('category.index');
    }

    public function category_delete(Category $category)
    {
        if (Product::where('category_id', $category->id)->count() == 0) {
            $category->delete();
            return redirect()->route('category.index');
        }
        return abort(403);
    }
}
