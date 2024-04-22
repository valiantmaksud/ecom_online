<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function financialReport(Request $request)
    {

        $data['orders'] = Order::query()->with('orderDetails.product')
            ->when($request->filled('order_status'), function ($query) use ($request) {
                $query->where('order_status', $request->order_status);
            })
            ->when($request->filled('order_id'), function ($query) use ($request) {
                $query->where('order_id', $request->order_id);
            })
            ->when($request->filled('from_date'), function ($query) use ($request) {
                $query->where('date', '>=', $request->from_date);
            })
            ->when($request->filled('to_date'), function ($query) use ($request) {
                $query->where('date', '<=', $request->to_date);
            })
            ->paginate(25);

        return view('admin.reports.financial', $data);
    }
}
