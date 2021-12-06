<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductsCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ProductsController extends Controller
{
    public function search(Request $request)
    {
        $locale = App::currentLocale();
        // Find products 
        $products = Product::select(
            'products.id',
            'products.category_id',
            'products.' . $locale . '_title as title',
            'products.recipe',
            'products.img',
            'products.view_rate'
        )->where('products.' . $locale . '_title', 'like', '%' . $request->keyword . '%')->orderBy('products.view_rate', 'desc');
            
        switch ($request->filter) {
            case 'with-recipe':
                if ($request->category) {
                    $products = $products->where('recipe', true)->where('category_id', $request->category)->paginate(6);
                    $recipe = true;
                    $currentCategory = ProductsCategory::find($request->category);
                    return view('pages.products.data.products', compact('products', 'recipe', 'currentCategory'))->render();
                } else {
                    $products = $products->where('recipe', true)->paginate(6);
                    $recipe = true;
                    return view('pages.products.data.products', compact('products', 'recipe'))->render();
                }
                break;

            case 'without-recipe':
                if ($request->category) {
                    $products = $products->where('recipe', false)->where('category_id', $request->category)->paginate(6);
                    $recipe = false;
                    $currentCategory = ProductsCategory::find($request->category);
                    return view('pages.products.data.products', compact('products', 'recipe', 'currentCategory'))->render();
                } else {
                    $products = $products->where('recipe', false)->paginate(6);
                    $recipe = false;
                    return view('pages.products.data.products', compact('products', 'recipe'))->render();
                }
                break;

            default:
                if ($request->category) {
                    $products = $products->where('category_id', $request->category)->paginate(6);
                    $currentCategory = ProductsCategory::find($request->category);
                    return view('pages.products.data.products', compact('products', 'currentCategory'))->render();
                } else {
                    $products = $products->paginate(6);
                    return view('pages.products.data.products', compact('products'))->render();
                }
                break;
        }
    }
    
    public function downloadInstructions(Request $request)
    { 
        $product = Product::select(
            'products.id',
            'products.' . App::currentLocale() . '_instruction as instruction',
        )->find($request->id);

        $file = public_path('files/' . $product->instruction);

        $extension = pathinfo($file, PATHINFO_EXTENSION);

        $headers = array(
            'Content-Type: application/' . $extension,
        );

        return response()->download($file, $product->instruction, $headers);
    }
}
