<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['total_orders'] = Order::query()->count();
        $data['total_completed_orders'] = Order::query()->where('order_status', 2)->count();
        $data['categories'] = Category::query()->count();
        $data['total_products'] = Product::query()->count();

        return view('admin.home', $data);
    }
    
   
}
