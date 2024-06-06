<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/category', [HomeController::class, 'category'])->name('category');
Route::get('/product', [HomeController::class, 'product'])->name('product');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [HomeController::class, 'admin'])->name('admin');

    Route::group(['prefix' => 'Product'], function () {
        Route::get('/product/index', [ProductController::class, 'product_index'])->name('product.index');
        Route::get('/product/create', [ProductController::class, 'product_create'])->name('product.create');
        Route::post('/product/create', [ProductController::class, 'product_store'])->name('product.store');
        Route::get('/product/edit/{product}', [ProductController::class, 'product_edit'])->name('product.edit');
        Route::put('/product/edit/{product}', [ProductController::class, 'product_update'])->name('product.update');
        Route::delete('/product/delete/{product}', [ProductController::class, 'product_delete'])->name('product.delete');
    });

    Route::group(['prefix' => 'category'], function () {
        Route::get('/category/index', [CategoryController::class, 'category_index'])->name('category.index');
        Route::get('/category/create', [CategoryController::class, 'category_create'])->name('category.create');
        Route::post('/category/create', [CategoryController::class, 'category_store'])->name('category.store');
        Route::get('/category/edit/{category}', [categoryController::class, 'category_edit'])->name('category.edit');
        Route::put('/category/edit/{category}', [CategoryController::class, 'category_update'])->name('category.update');
        Route::delete('/category/delete/{category}', [CategoryController::class, 'category_delete'])->name('category.delete');
    });
});
