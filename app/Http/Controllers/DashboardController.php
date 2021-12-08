<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductsCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class DashboardController extends Controller
{
    public function index()
    {
        $locale = App::currentLocale();
        // get quantities
        $productsQuantity = Product::where('trashed', false)->count();
        $categoriesQuantity = ProductsCategory::where('trashed', false)->count();
        // paginate all products
        $products = Product::select(
            'id',
            $locale . '_title as title',
            'trashed',
        )->where('trashed', false)->orderBy('title', 'asc')->paginate(15);
        $rank = $products->firstItem();

        return view('dashboard.pages.products.index', compact('productsQuantity', 'categoriesQuantity', 'products', 'rank'));
    }

    public function productsCreate()
    {
        $locale = App::currentLocale();
        // get quantities
        $productsQuantity = Product::where('trashed', false)->count();
        // get all products categories
        $categories = ProductsCategory::select(
            'id',
            $locale . '_title as title',
            'trashed',
        )->where('trashed', false)->orderBy('title', 'asc')->get();

        return view('dashboard.pages.products.create', compact('productsQuantity', 'categories'));
    }

    public function productsUpdate(Product $product)
    {
        $locale = App::currentLocale();
        // get quantities
        $productsQuantity = Product::where('trashed', false)->count();
        $categoriesQuantity = ProductsCategory::where('trashed', false)->count();

        return view('dashboard.pages.products.update', compact('productsQuantity', 'categoriesQuantity', 'product'));
    }

    public function productsCategories()
    {
        $locale = App::currentLocale();
        // get quantities
        $productsQuantity = Product::where('trashed', false)->count();
        $categoriesQuantity = ProductsCategory::where('trashed', false)->count();
        // paginate all products categories
        $categories = ProductsCategory::select(
            'id',
            $locale . '_title as title',
            'trashed',
        )->where('trashed', false)->orderBy('title', 'asc')->paginate(15);
        $rank = $categories->firstItem();

        return view('dashboard.pages.products.categories', compact('productsQuantity', 'categoriesQuantity', 'categories', 'rank'));
    }
}
