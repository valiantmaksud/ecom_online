<?php

use Carbon\Carbon;
use App\Models\Thana;
use App\Models\Banner;
use App\Models\Product;
use App\Models\Category;
use App\Models\Company;
use App\Models\District;
use App\Models\Order;
use App\Models\WebsiteSetting;
use Illuminate\Support\Facades\Cache;



function website_settings()
{
    return Cache::rememberForever('website_settings', function () {
        return WebsiteSetting::get();
    });
}

function website_setting($key)
{
    return optional(website_settings()->where('key',$key)->first())->value;
}



function company()
{
    return Cache::rememberForever('company', function () {
        return Company::first();
    });
}



function pendingOrders()
{
    return Cache::rememberForever('pending_orders', function () {
        return Order::pending()->select('id','created_at', 'order_number','total')->get();
    });
}


function banners()
{
    return Cache::rememberForever('banners', function () {

        return Banner::active()->get();
    });
}

function category()
{
    return Cache::rememberForever('categories', function () {

        return Category::active()->whereNull('parent_id')->with('childCategories')->get();
    });
}

function feature_product()
{
    return Cache::rememberForever('feature_products', function () {

        return Product::query()->whereIsFeatured(1)->with('product_sizes')->take(10)->get();
    });
}

function random_product()
{
    return Cache::rememberForever('random_products', function () {

        return Product::query()->with('images', 'product_sizes')->inRandomOrder()->whereFeatured(0)->with('product_sizes')->take(30)->get();
    });
}

function latest_products()
{
    return Cache::rememberForever('latest_products', function () {

        return Product::query()->with('images')->latest()->whereFeatured(0)->with('product_sizes')->take(35)->get();
    });
}


function top_selling_product()
{
    return Product::query()->with('images')->latest()->inRandomOrder()->with('product_sizes')->take(35)->get();
    // return Cache::rememberForever('latest_products', function () {

    //     return Product::query()->with('images')->latest()->whereFeatured(0)->take(35)->get();
    // });
}




// GET OLD VALUE WHEN USING POST METHOD ON FORM
function oldSelect($field_name, $value, $defaultValue = null): string
{
    return old($field_name, $defaultValue) == $value ? 'selected' : '';
}





// GET REQUEST VALUE WHEN USING GET METHOD ON FORM
function requestSelect($field_name, $value, $defaultValue = null): string
{
    return request($field_name, $defaultValue) == $value ? 'selected' : '';
}



function districts()
{
    return Cache::rememberForever('districts', function () {
        return District::get();
    });
}

function thanas()
{
    return Cache::rememberForever('thanas', function () {
        return Thana::get();
    });
}
