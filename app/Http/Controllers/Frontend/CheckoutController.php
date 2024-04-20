<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\CheckoutCoupon;
use App\Models\Coupon;
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
                // $this->service->sendEmailToCustomer($request, auth()->user(), $order);

            });

        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
        return redirect()->route('frontend.index')->with('success', 'Order placed successfully'); 
    }



    public function couponValidate(Request $request)
    {
        try {
            $coupon = Coupon::query()->where('code', $request->code)->first();
            if (!$coupon) {
                return response()->json([
                    'status'    => 0,
                    'message'   => 'Error',
                    'data'      => 'Coupon not found !',
                ]);
            }
            $check_coupon = CheckoutCoupon::query()->where('user_id', auth()->id())->where('coupon_id', $coupon->id)->count();
            if ($check_coupon > 0) {
                return response()->json([
                    'status'    => 0,
                    'message'   => 'Error',
                    'data'      => 'You already use this coupon !',
                ]);
            }
            return response()->json([
                'status'    => 1,
                'message'   => 'Success',
                'data'      => $coupon,
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status'    => 0,
                'message'   => 'Error',
                'data'      => 'Server error !',
            ]);
        }
    }
}
