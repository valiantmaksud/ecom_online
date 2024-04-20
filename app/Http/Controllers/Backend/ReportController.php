<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function financialReport(Request $request){
        $data['orders'] = Order::query()->withSum(["orderDetails"=> function($query){

        }]);

        // $data['orders'] = Order::query()->withSum(['orderDetails as total_cost' => function($query){
        //     $query->with(['product' => function($query){
        //         $query->select('product_cost');
        //     }]);
        // }])->paginate(25);

        return $data;
        return view('admin.reports.financial');
    }
}
