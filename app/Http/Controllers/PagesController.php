<?php

namespace App\Http\Controllers;

use App\Models\History;
use App\Models\NewsCategory;
use App\Models\Product;
use App\Models\ProductsCategory;
use App\Models\Site;
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
