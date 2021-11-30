<?php

namespace App\Providers;

use App\Models\NewsCategory;
use App\Models\ProductsCategory;
use App\Models\Site;
use Illuminate\Pagination\Paginator;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        Paginator::useBootstrap();

        view()->composer('*', function ($view) {
            $locale = App::currentLocale();

            $headerSites = Site::select(
                'id',
                $locale . '_title as title',
                'link',
                'trashed'
            )->where('trashed', false)->get();

            $currentSite = Site::select(
                'id',
                $locale . '_address as address',
                'email',
            )->find(3);

            $footerProdCategories = ProductsCategory::select(
                'id',
                $locale . '_title as title',
                'view_rate',
                'trashed'
            )->where('trashed', false)->orderBy('view_rate', 'desc')->paginate(10);

            $footerNewsCategories = NewsCategory::select(
                'id',
                $locale . '_title as title',
                'view_rate',
                'trashed'
            )->where('trashed', false)->orderBy('view_rate', 'desc')->get();

            return $view->with('route', \Route::currentRouteName())
                ->with('locale', $locale)
                ->with('headerSites', $headerSites)
                ->with('footerProdCategories', $footerProdCategories)
                ->with('footerNewsCategories', $footerNewsCategories)
                ->with('currentSite', $currentSite);
        });
    }
}
