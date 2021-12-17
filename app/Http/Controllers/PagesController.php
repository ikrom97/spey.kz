<?php

namespace App\Http\Controllers;

use App\Models\History;
use App\Models\News;
use App\Models\NewsCategory;
use App\Models\Product;
use App\Models\ProductsCategory;
use App\Models\Site;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use stdClass;

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
        )->where('trashed', false)->orderBy('view_rate', 'desc')->take(6)->get();
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
        )->where('trashed', false)->orderBy('view_rate', 'desc')->take(6)->get();

        return view('pages.index', compact('industryNews', 'prodCategories', 'prodCategoriesQuantity', 'productsQuantity', 'popularProducts'));
    }
    public function about(Request $request)
    {
        $locale = App::currentLocale();
        // get company histories
        $histories = History::select(
            'id',
            $locale . '_title as title',
            $locale . '_text as text',
            'year',
            'trashed',
        )->where('trashed', false)->orderBy('year', 'desc')->get();
        // get spey sites
        $speySites = Site::select(
            'id',
            $locale . '_location as location',
            'trashed',
        )->where('trashed', false)->get();
        // get map
        $defaultMap = '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d23682367.238464795!2d21.486589822507256!3d43.56667570684504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2s!4v1635482910688!5m2!1sru!2s" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>';
        $siteMap = $defaultMap;
        $siteID = $request->site;
        if ($siteID) {
            $siteMap = Site::select(
                'id',
                $locale . '_map as map',
            )->find($siteID)->map;
        }

        return view('pages.about.index', compact('histories', 'speySites', 'siteMap', 'siteID'));
    }
    public function products(Request $request)
    {
        $locale = App::currentLocale();
        // Get product categories' titles
        $productsCategories = ProductsCategory::select(
            'id',
            $locale . '_title as title',
            'trashed',
            'view_rate',
        )->where('trashed', false)->orderBy('view_rate', 'desc')->get();

        if ($request->category) {
            // Get products by category
            $products = Product::select(
                'id',
                'category_id',
                $locale . '_title as title',
                'img',
                'view_rate',
                'trashed',
            )->where('trashed', false)->where('category_id', $request->category)->orderBy('view_rate', 'desc')->paginate(6);

            $currentCategory = ProductsCategory::find($request->category);

            return view('pages.products.index', compact('productsCategories', 'products', 'currentCategory'));
        } else {
            // Get all products
            $products = Product::select(
                'id',
                'category_id',
                $locale . '_title as title',
                'img',
                'view_rate',
                'trashed',
            )->where('trashed', false)->orderBy('view_rate', 'desc')->paginate(6);

            return view('pages.products.index', compact('productsCategories', 'products'));
        }
    }
    public function productsRead($id)
    {
        $locale = App::currentLocale();
        // Get product
        $product = Product::select(
            'id',
            'category_id',
            $locale . '_title as title',
            $locale . '_instruction as instruction',
            $locale . '_composition as composition',
            $locale . '_indications as indications',
            $locale . '_description as description',
            'view_rate',
            'recipe',
            'img',
        )->find($id);
        // increase view rate
        $product->view_rate++;
        $product->save();
        $productCategory = ProductsCategory::select(
            'id',
            'view_rate',
        )->find($product->category_id);
        $productCategory->view_rate++;
        $productCategory->save();
        // Get products' category's titles
        $productsCategories = ProductsCategory::select(
            'id',
            $locale . '_title as title',
            'trashed',
        )->where('trashed', false)->get();
        // Get similar products
        $similarProducts = Product::select(
            'id',
            'category_id',
            $locale . '_title as title',
            'img',
            'view_rate',
            'trashed',
        )->where('trashed', false)->where('category_id', $product->category_id)->orderBy('view_rate', 'desc')->get();

        return view('pages.products.read', compact('product', 'productsCategories', 'similarProducts'));
    }
    public function news(Request $request)
    {
        $locale = App::currentLocale();

        $allNews = News::select(
            'id',
            'category_id',
            $locale . '_title as title',
            'view_rate',
            'img',
            'trashed',
        )->where('trashed', false)->orderBy('view_rate', 'desc');

        $newsCategories = NewsCategory::select(
            'id',
            $locale . '_title as title',
            'view_rate',
            'trashed',
        )->where('trashed', false)->orderBy('view_rate', 'desc')->get();

        if ($request->category) {
            $allNews = $allNews->where('category_id', $request->category)->paginate(6)->fragment('all-news');
            $currentCategory = NewsCategory::select(
                'id',
                $locale . '_title as title',
            )->find($request->category);
            return view('pages.news.index', compact('allNews', 'newsCategories', 'currentCategory'));
        } else {
            $allNews = $allNews->paginate(6)->fragment('all-news');
            return view('pages.news.index', compact('allNews', 'newsCategories'));
        }
    }
    public function newsRead($id)
    {
        $locale = App::currentLocale();

        $news = News::select(
            'id',
            'category_id',
            $locale . '_title as title',
            $locale . '_text as text',
            'view_rate',
            'img',
        )->first($id);
        // increase view rate
        $news->view_rate++;
        $news->save();
        $newsCategory = NewsCategory::select(
            'id',
            'view_rate',
        )->find($news->category_id);
        $newsCategory->view_rate++;
        $newsCategory->save();
        // get similar news
        $similarNews = News::select(
            'id',
            'category_id',
            $locale . '_title as title',
            'view_rate',
            'img',
            'trashed',
        )->where('trashed', false)->orderBy('view_rate', 'desc')->get();

        return view('pages.news.read', compact('news', 'similarNews'));
    }
    public function contacts(Request $request)
    {
        $locale = App::currentLocale();
        // Get spey sites
        $speySites = Site::select(
            'id',
            $locale . '_location as location',
            $locale . '_title as title',
            'trashed',
        )->where('trashed', false)->get();
        // Get map
        $defaultID = 3;
        $siteID = $request->site;
        if (!$siteID) {
            $siteID = $defaultID;
        }
        $activeSite = Site::select(
            'id',
            $locale . '_title as title',
            $locale . '_location as location',
            $locale . '_map as map',
            $locale . '_address as address',
            'email',
        )->find($siteID);

        return view('pages.contacts.index', compact('speySites', 'activeSite'));
    }
}
