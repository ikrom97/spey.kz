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

        if (!$product->instruction) {
            return back();
        }
        $file = public_path('files/' . $product->instruction);

        $extension = pathinfo($file, PATHINFO_EXTENSION);

        $headers = array(
            'Content-Type: application/' . $extension,
        );

        return response()->download($file, $product->instruction, $headers);
    }

    public function create(Request $request)
    {
        // validation
        $request->validate([
            'category-id' => 'required',
            'ru-title' => 'required',
            'en-title' => 'required',
            'img' => 'required|mimes:png|max:100',
            'ru-instruction' => 'required',
            'en-instruction' => 'required',
            'recipe' => 'required',
            'ru-composition' => 'required',
            'en-composition' => 'required',
            'ru-indications' => 'required',
            'en-indications' => 'required',
        ]);
        if ($request->recipe == 'true') {
            $request->recipe = true;
        } else {
            $request->recipe = false;
        }
        // save image file
        $img = $request->file('img');
        $imgName = uniqid() . '.' . $img->getClientOriginalExtension();
        $path = public_path('img/products');
        $img->move($path, $imgName);
        // save instruction files
        $ruInstruction = $request->file('ru-instruction');
        $enInstruction = $request->file('en-instruction');
        $ruInstructionName = uniqid() . '.' . $ruInstruction->getClientOriginalExtension();
        $enInstructionName = uniqid() . '.' . $enInstruction->getClientOriginalExtension();
        $path = public_path('files');
        $ruInstruction->move($path, $ruInstructionName);
        $enInstruction->move($path, $enInstructionName);
        // create new product
        $product = new Product;
        $product->category_id = $request->input('category-id');
        $product->en_title = $request->input('en-title');
        $product->ru_title = $request->input('ru-title');
        $product->en_instruction = $enInstructionName;
        $product->ru_instruction = $ruInstructionName;
        $product->en_composition = $request->input('en-composition');
        $product->ru_composition = $request->input('ru-composition');
        $product->en_indications = $request->input('en-indications');
        $product->ru_indications = $request->input('ru-indications');
        $product->en_description = $request->input('en-description');
        $product->ru_description = $request->input('ru-description');
        $product->recipe = $request->recipe;
        $product->img = $imgName;
        $save = $product->save();

        if ($save) {
            return back()->with('success', 'Новый продукт успешно добавлен!');
        } else {
            return back()->with('fail', 'Упс... Что-то пошло не так попробуйте позже!');
        }
    }
}
