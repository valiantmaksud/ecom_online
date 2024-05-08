<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   


    public function show($slug)
    {
        $data['product']                    = Product::query()->where('slug', $slug)->with('category')->first();
        $data['related_products']           = Product::query()->where('category_id', $data['product']->category_id)->where('id', '!=', $data['product']->id)->inRandomOrder()->take(2)->get();
        $data['related__second_products']   = Product::query()->where('category_id', $data['product']->category_id)->whereNotIn('id', $data['related_products']->pluck('id'))->inRandomOrder()->take(10)->get();
        $data['random_products']            = Product::query()->inRandomOrder()->take(10)->get();
        return view('frontend.product.details', $data);
    }
   


    public function quickView(Request $request)
    {
        $data['product']                    = Product::where('id', $request->product_id)->first();
        return view('frontend._inc.ajax.quick-view-modal', $data)->render();
    }





    public function search(Request $request)
    {
        $data['products']       = Product::query()->categoryFiltering()->nameFiltering()->paginate(40);
        $data['categories']     = Category::query()->withCount('products as total_product')->get();
        $data['min_price']      = Product::query()->min('final_price');
        $data['max_price']      = Product::query()->max('final_price');

        return view('frontend/product/search', $data);
    }
}
