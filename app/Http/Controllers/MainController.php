<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use stdClass;

class MainController extends Controller
{
    public function setLocale(Request $request)
    {
        $locale = $request->locale;
        App::setLocale($locale);
        Session::put('locale', $locale);

        return redirect()->back();
    }

    public function search(Request $request)
    {
        $keyword = $request->keyword;
        $locale = App::currentLocale();
        $result = new stdClass;

        $result->products = Product::select(
            'id',
            $locale . '_title as title',
            $locale . '_description as description',
            'trashed',
        )->where('trashed', false)
            ->where(function ($query) use ($keyword, $locale) {
                $query->where($locale . '_title', 'like', '%' . $keyword . '%')
                    ->orWhere($locale . '_description', 'like', '%' . $keyword . '%');
            })->take(5)->get();

        $result->news = News::select(
            'id',
            $locale . '_title as title',
            $locale . '_text as text',
            'trashed',
        )->where('trashed', false)->where(function ($query) use ($keyword, $locale) {
            $query->where($locale . '_title', 'like', '%' . $keyword . '%')
                ->orWhere($locale . '_text', 'like', '%' . $keyword . '%');
        })->take(5)->get();


        return view('layouts.search-result', compact('result'));
    }
}
