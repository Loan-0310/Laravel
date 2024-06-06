<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductCreateRequest;


class ProductController extends Controller
{
    public function product_index()
    {
        $cats = Category::orderBy('name', 'ASC')->get();

        $products = Product::orderBy('id', 'DESC')->paginate(5);
        return view('product.index', compact('products'));
    }

    public function product_create()
    {
        $category = Category::orderBy('name', 'ASC')->get();
        return view('product.create', compact('category'));
    }

    public function product_store(ProductCreateRequest $request)
    {
     

      $image = time().'-'.$request->file->getClientOriginalName();
      $path = public_path('uploads');
      $request->file->move($path,$image);

      $form_data = $request->only('name','price','sale_price','category_id', 'description');
      $form_data['image'] = $image;
      if(Product::create($form_data)){
        return redirect()->route('product.index');
    }
    return redirect()->back();
    }


    public function product_edit(Product $product)
    {
        return view('product.edit', compact('product'));
    }

    public function product_update(ProductCreateRequest $req, Product $product)
    {
        $form_data = $req->only('name', 'price', 'sale_price', 'image', 'description', 'category_id');
        $product->update($form_data);
        return redirect()->route('product.index');
    }

    public function product_delete(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index');
        return abort(403);
    }
};