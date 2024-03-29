<?php

namespace Modules\Product\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Product\Models\Product;
use Modules\Product\Models\Product_list;

class FrontendModuleProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($lang = null, $brand = null)
    {

        $locale = set_lang($lang);
        if ($brand == null) {
            $products = Product_list::whereLang($locale)->get();
        } else {
            $products = Product_list::whereLang($locale)->whereBrand($brand)->get();
        }
        if ($locale == 'en') {
            return view(env('THEME_NAME') . '.frontend.product.index', compact('products'));
        } else {
            return view(env('THEME_NAME') . '.frontend-fa.product.index', compact('products'));

        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($lang = null, $product_list)
    {
        $locale = set_lang($lang);
        $product_list = Product_list::whereSlug($product_list)->whereLang($locale)->firstOrFail();
        $same_products = Product_list::whereProduct_id($product_list->product_id)->whereLang($locale)->orderBy('id', 'desc')->limit(6)->get();

        if ($locale == 'en') {
            return view(env('THEME_NAME') . '.frontend.product.show', compact('product_list', 'same_products'));
        } else {
            return view(env('THEME_NAME') . '.frontend-fa.product.show', compact('product_list', 'same_products'));

        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function catalog($lang = null, $slug)
    {
        $locale = set_lang($lang);
        if ($locale == 'fa') {

            $product = Product::whereSlug($slug)->firstOrFail();
            $products = Product_list::whereProduct_id($product->id)->get();
            $category = $product->title;
            return view(env('THEME_NAME') . '.frontend-fa.product.catalog', compact('products', 'category'));

        } else {
            $product_list = Product_list::whereSlug($slug)->firstOrFail();

            $product_id = $product_list->product_id;
            $products = Product_list::whereProduct_id($product_id)->get();
            return view('default.product.frontend.catalog', compact('products'));
        }
    }
}
