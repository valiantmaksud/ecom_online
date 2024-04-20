<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class StatusUpdateController extends Controller
{
    public function orderUpdate($id, Request $request)
    {
        $order = Order::find($id);

        try {
            
            $order->update([
                'order_status'      => $request->status,
                'delivery_date'     => $request->delivery_date,
                'payment_status'    => $request->payment_status ?? 0,
                'payment_id'        => $request->payment_reference,
                'payable_amount'       => $request->paid_amount ?? 0,
                // 'total'             => $order->total - $request->paid_amount,
            ]);
            cache()->forget('pending_orders');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
        return redirect()->back()->with('message', 'order successfully updated !');
    }
}
