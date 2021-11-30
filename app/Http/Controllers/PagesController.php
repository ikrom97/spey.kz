<?php

namespace App\Http\Controllers;

use App\Models\NewsCategory;
use App\Models\Product;
use App\Models\ProductsCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class PagesController extends Controller
{
    public function index()
    {
        $locale = App::currentLocale();

        $industryNews = NewsCategory::select(
            'id',
            $locale . '_title as title',
            'view_rate',
            'trashed',
        )->where('trashed', false)->orderby('view_rate', 'desc')->get();
        // Attach to each news categories the most popular news' titles as description
        foreach ($industryNews as $newsCategory) {
            $newsCategory->description = $newsCategory->news()->select(
                $locale . '_title as title',
                'view_rate',
                'trashed'
            )->where('trashed', false)->orderBy('view_rate')->first()->title;
        }
        // Get 6 most viewed product categories
        $prodCategories = ProductsCategory::select(
            'id',
            $locale . '_title as title',
            'view_rate',
            'icon',
            'trashed'
        )->where('trashed', false)->orderBy('view_rate', 'desc')->paginate(6);
        // Count products categries
        $prodCategoriesQuantity = ProductsCategory::where('trashed', false)->count();
        // Count products
        $productsQuantity = Product::where('trashed', false)->count();
        // Get 6 most popular products
        $popularProducts = Product::select(
            'id',
            'category_id',
            $locale . '_title as title',
            'img',
            'view_rate',
            'recipe',
            'trashed',
        )->where('trashed', false)->orderBy('view_rate', 'desc')->paginate(6);

        return view('pages.index', compact('industryNews', 'prodCategories', 'prodCategoriesQuantity', 'productsQuantity', 'popularProducts'));
    }
    public function about()
    {
        return view('pages.about.index');
    }
    public function products()
    {
        return view('pages.products.index');
    }
    public function productsRead()
    {
        return view('pages.products.read');
    }
    public function news()
    {
        return view('pages.news.index');
    }
    public function newsRead($id)
    {
        return view('pages.news.read');
    }
    public function contacts()
    {
        return view('pages.contacts.index');
    }
}
