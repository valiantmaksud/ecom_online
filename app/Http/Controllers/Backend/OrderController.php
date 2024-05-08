<?php

namespace App\Http\Controllers\Backend;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{

    public function index(Request $request)
    {
        $orders = Order::query()
        ->with('user')
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
        ->latest()->paginate(25);

        return view('admin.orders.index', compact('orders'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
        $data['order']      = Order::query()->with('orderDetails.product', 'customer')->find($id);
        $data['company']    = collect();
        if ($request->filled('type')) {
            return view('admin.orders.invoice', $data);
        }
        return view('admin.orders.show', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        cache()->forget('pending_orders');
    }

}
