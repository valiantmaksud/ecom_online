<?php

namespace App\Services;

use App\Models\Address;
use App\Models\Cart;
use App\Models\EmailConfiguration;
use App\Models\Order;

class CheckoutService
{

    public $order;
    public $invoice_number;



    public function __construct() {
        $this->invoice_number = new GenerateInvoiceNumber();
    }



    public function order($request)
    {
        $this->order = Order::create([
            'user_id'               => auth()->user()->id,
            'delivery_address'      => $this->createOrUpdateDeliveryAddress($request),
            'date'                  => date('Y-m-d'),
            'order_id'              => $this->invoice_number->getInvoiceNumber('order'),
            'payment_type'          => $request->payment_method,
            'payment_status'        => 0,
            'order_status'          => 0,
            'payable_amount'        => $request->subtotal ?? 0,
            'discount_amount'       => 0,
            'coupon_cost'           => $request->coupon_cost ?? 0,
            'paid_amount'           => $request->paid_amount ?? 0,
            'order_note'            => $request->notes,
        ]);

        return $this->order;
    }



    // ALTER TABLE `order_details` ADD `quantity` INT NOT NULL AFTER `product_id`, ADD `price` DOUBLE(8,2) NOT NULL AFTER `quantity`;

    public function order_details($request)
    {
        $cart = Cart::query()->where('user_id', auth()->user()->id)->with('details')->first();

        foreach ($cart->details ?? [] as $cart_item) {
            $this->order->orderDetails()->create([
                'product_id'    => $cart_item->product_id,
                'quantity'      => $cart_item->quantity,
                'price'         => $cart_item->amount,
                'order_status'  => 0
            ]);
            $cart_item->delete();

        }
        
        $cart->delete();
    }



    public function updateOrderCost()
    {
        $this->order->refresh();

        $this->order->update([
            'payable_amount'        => (int) request('shipping_cost') + $this->order->orderDetails->sum('price') * $this->order->orderDetails->sum('quantity'),
            'paid_amount'           => 0,
        ]);
    }


    public function createOrUpdateDeliveryAddress($request)
    {

        return Address::updateOrCreate([
            'user_id'       => auth()->id(),
        ], [
            'division'      => $request->division,
            'district'      => $request->district,
            'thana'         => $request->thana,
            'area'          => $request->address,
            'phone'         => $request->phone
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
