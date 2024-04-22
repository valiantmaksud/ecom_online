<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Services\CheckoutService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{

    public $service;

    public function __construct() {

        $this->service = new CheckoutService();
    }

    public function store(Request $request)
    {
        try {
            DB::transaction(function() use ($request) {

                $this->service->order($request);
                $this->service->order_details($request);
                $this->service->updateOrderCost();
                $order = $this->service->order->refresh();

            });

        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
        return redirect()->route('frontend.index')->with('success', 'Order placed successfully'); 
    }


}
