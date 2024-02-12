<?php

namespace App\Services;

use App\Mail\DynamicEmail;
use App\Models\Cart;
use App\Models\DeliveryAddress;
use App\Models\EmailConfiguration;
use App\Models\Order;
use Illuminate\Support\Facades\Mail;

class CheckoutService
{

    public $order;
    public $invoice_number;



    public function __construct() {
        $this->invoice_number = new GenerateInvoiceNumber();
    }



    public function order($request)
    {        
        $this->invoice_number->setNextInvoiceNo(1, 'order', date('Y'));

        $this->order = Order::create([
            'user_id'               => auth()->user()->id,
            'delivery_address_id'   => $this->createOrUpdateDeliveryAddress($request),
            'coupon_id'             => $request->coupon_id,
            'date'                  => date('Y-m-d'),
            'order_number'          => $this->invoice_number->getInvoiceNumber('order'),
            'payment_method'        => $request->payment_method,
            'payment_status'        => 'pending',
            'status'                => 'pending',
            'subtotal'              => $request->subtotal ?? 0,
            'shipping_cost'         => $request->shipping_cost ?? 0,
            'coupon_cost'           => $request->coupon_cost ?? 0,
            'paid_amount'           => $request->paid_amount ?? 0,
            'notes'                 => $request->notes,
        ]);
        return $this->order;
    }




    public function order_details($request)
    {
        $cart = Cart::query()->where('user_id', auth()->user()->id)->with('details')->first();

        foreach ($cart->details ?? [] as $cart_item) {
            $this->order->orderDetails()->create([
                'product_id'    => $cart_item->product_id,
                'size_id'       => $cart_item->size_id,
                'attribute_id'  => $request->attribute_id,
                'quantity'      => $cart_item->quantity,
                'price'         => $cart_item->price,
            ]);
        }
        
        $cart->delete();
    }



    public function updateOrderCost()
    {
        $this->order->refresh();

        $this->order->update([
            'subtotal'              => $this->order->orderDetails->sum('total'),
            // 'shiping_cost'          => request('shipping_cost') ?? 70,
            'coupon_cost'           => $this->getCouponAmount(),
            'paid_amount'           => 0,
        ]);
    }



    public function getCouponAmount()
    {
        $this->order->refresh();
        try {
            if ($this->order->coupon_id) {
                
                if (date('Y-m-d') >= $this->order->coupon->end_date) {
                    return 0;
                }

                if($this->order->coupon->type == 'fixed') {
                    return $this->order->coupon->value;
                } else {
                    return $this->order->subtotal * ($this->order->coupon->value / 100);
                }
            }
            return 0;
        } catch (\Throwable $th) {
            return 0;
        }
    }

    public function createOrUpdateDeliveryAddress($request)
    {

        return DeliveryAddress::updateOrCreate([
            'user_id'       => auth()->user()->id,
        ], [
            'first_name'    => $request->first_name,
            'last_name'     => $request->last_name,
            'email'         => $request->email,
            'phone'         => $request->phone,
            'address'       => $request->address,
            'city'          => $request->city,
            'state'         => $request->state,
            'country'       => $request->country ?? 'Bangladesh',
            'district_id'   => $request->district_id,
            'thana_id'      => $request->thana_id,
            'postal_code'   => $request->postal_code,
        ])->id;
    }





    /*
     |--------------------------------------------------------------------------
     | SEND EMAIL TO CUSTOMER FOR ORDER SUBMISSION
     |--------------------------------------------------------------------------
    */
    public function sendEmailToCustomer($request, $customer, $order)
    {

        // GET HELP FROM THE MAIL SERVICE OF MAKSUD

        if ($customer->email) {

            $data['customer'] = $customer;
            $data['order'] = $order;

            $pdf = \PDF::loadview('mails.order.index', $data);

            (new MailSendService())->sendEmail(EmailConfiguration::first(), 'mails.order-successful', 'Order Invoice', $customer->email, $data, 'mails.order.index');
            // Mail::to($customer->email)->send(new DynamicEmail('mails.order-successful', 'Order Invoice', $data, $pdf->output()));
        }

    }
}
