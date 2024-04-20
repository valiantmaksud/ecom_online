<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Order Invoice</title>

        <style>
            @page {
                header: page-header;
                footer: page-footer;
                sheet-size: Letter;
                margin: 0 !important;
            }
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                width: 816px;
                height: 1056px;
                margin: 0px auto;
                background: rgb(224, 224, 224)
            }
            @media print {
                body{
                    header: page-header;
                    footer: page-footer;
                    sheet-size: Letter;
                    margin: 0 !important;
                    background: #efefef;
                    font-family: 'Fira Code';
                    font-size: 15px;
                    font-weight: 600;
                }
                .invoice {
                    margin-top: 0 !important;
                    margin-bottom: 0 !important;
                }
            }

            /* .row:after {
                content: "";
                display: table;
                clear: both;
            } */
            .col-2 {
                float: left;
                width: 16.6666666667%;
            }
            .col-3 {
                float: left;
                width: 25%;
            }
            .col-6 {
                float: left;
                width: 50%;
            }
            .col-9 {
                float: left;
                width: 75%;
            }
            .col-10 {
                float: left;
                width: 83.3333333333%;
            }
            .invoice {
                background: #ffffff;
                width: 100%;
                height: 100%;
                margin: 0 auto;
                margin-top: 50px;
                margin-bottom: 50px;
                padding: 20px;
            }
            .container {
                padding: 5px 50px;
                height: 100%;
                position: relative;
            }
            .company-logo {
                width: 220px;
                height: 80px;
            }
            .company-info-invoice{
                margin-bottom: 28px;
                font-size: 13px;
            }
            .print-copy-info{
                margin-bottom: 15px;
                font-size: 13px;
            }
            .logo {
                width: 100%;
                height: 100%;
            }
            .company-info {
                font-size: 15px;
                text-align: center;
            }
            .receipt-heading {
                text-align: center;
                font-weight: 700;
                margin: 0 auto;
                margin-top: 10px;
                margin-bottom: 5px;
                max-width: 450px;
                position: relative;
            }
            .receipt-heading:before {
                content: "";
                display: block;
                width: 130px;
                height: 2px;
                background: #18181b;
                left: 0;
                top: 50%;
                position: absolute;
            }
            .receipt-heading:after {
                content: "";
                display: block;
                width: 130px;
                height: 2px;
                background: #18181b;
                right: 0;
                top: 50%;
                position: absolute;
            }
            .invoice-info {
                margin-bottom: 10px;
            }
            .invoice-info .date {
                text-align: right;
            }
            table {
                width: 100%;
            }
            table, th {
                border-top: 1px solid black;
                border-bottom: 1px solid black;
                border-collapse: collapse;
            }
            th, td {
                padding: 8px;
            }
            .text-center {
                text-align: center;
            }
            .text-left {
                text-align: left;
            }
            .text-right {
                text-align: right;
            }
            .invoice-price {
                padding: 10px;
                margin-top: 10px;
                margin-bottom: 10px;
                text-align: right;
                padding-right: 0 !important;
            }
            .order-note {
                padding: 10px;
                margin-top: 10px;
                margin-bottom: 10px;
                text-align: left;
            }
            .footer {
                position: absolute;
                right: 0;
                bottom: 0 !important;
                left: 0;
                padding: 1rem;
                text-align: center;
            }
            .footer-message {
                position: absolute;
                right: 0;
                bottom: 0 !important;
                left: 0;
                padding: 1rem;
                text-align: center;
            }
            .barcode-img{
                height : 50 px;
                width: 100 px;
            }
            tr:nth-child(even) {
                background: #ccc
            }
            .copy {
                font-size:20px;
            }

            .hr {
                width: 50%;
                float: right;
                /* width: 130px; */
                height: 2px;
                background: #000000;
            }
            #block_container
            {
                padding-top: 55px;
            }
            #bloc1, #bloc2
            {
                display:inline;
            }
            .right-side {
                width: 50%;
            }
            .left-side {
                width: 50%;
            }
        </style>

        <style>
            @media print {
                tr.page-break  { display: block; page-break-after: always; }
            }
        </style>

    </head>

    <body>
        @php
            $chunk = 16;
            $loop_last = false;
            $is_last = false;
            $copy = null;
        @endphp
        @foreach ($order->orderDetails->chunk($chunk) as $key => $details)
            @php
                if (request('copy') == 'customer') {
                    $copy = "Customer Copy";
                } elseif (request('copy') == 'accounts') {
                    $copy = "Accounts Copy";
                } elseif (request('copy') == 'delivery-man') {
                    $copy = "Delivery Man Copy";
                } elseif (request('copy') == 'store') {
                    $copy = "Store Copy";
                }
            @endphp
            <section class="invoice">

                <div class="container">
                    <div id="topPart">
                        <div class="invoice-info" style="margin-top:0 !important">
                            <div class="row">
                                <div class="col-6">
                                    <div class="company-logo">
                                        {{-- <img src="{{ asset($company->logo) }}" alt="Logo" class="logo"> --}}
                                    </div>
                                    <p>Name &nbsp&nbsp&nbsp&nbsp: {{ optional($order->customer)->name }}</p>
                                    <p>Mobile &nbsp&nbsp: {{ optional($order->customer)->phone }}</p>
                                    <p>Address : {{ optional($order->deliveryAddress)->area }}</p>
                                    <p>District &nbsp&nbsp&nbsp&nbsp&nbsp: {{ optional(optional($order->customer)->delivery_address)->district }} | Thana : {{ optional(optional($order->customer)->delivery_address)->thana }}</p>
                                </div>
                                <div class="col-6 date">
                                    <div class="print-copy-info">
                                        <div>
                                            <p class="copy">{{ $copy ?? '' }}</p>
                                            <hr class="hr">
                                        </div>
                                        {{-- <p>Tax Invoice (Mushak 6.3)</p> --}}
                                    </div>
                                    <div class="company-info-invoice">
                                        {{-- <p style="font-size: 18px">{{ optional($company)->name }}</p> --}}
                                        {{-- <p>{{ optional($company)->address }}</p> --}}
                                        {{-- <p>Call: {{ optional($company)->hotline }}</p> --}}
                                        {{-- <p>Tax Invoice (Mushak 6.3)</p> --}}
                                    </div>

                                    <p>
                                        {{-- Shipment : {{ optional($order->warehouse)->bin_no }} |  --}}
                                        Order : {{ $order->order_id }}
                                    </p>
                                    <p>Order Date : {{ date('Y-m-d h:i:s A', strtotime($order->date)) }}</p>
                                    {{-- <p>Delivery Date : {{ date('Y-m-d', ) }}</p> --}}
                                    <p>{{ $order->payment_type == 'COD' ? 'Cash On Delivery' : $order->payment_type }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="text-center">
                            <p style="font-size: 20px;"> Sales Invoice </p>
                            <p > Order No : {{ $order->order_id }}</p>
                            <img class="barcode-img pt-1" src="data:image/png;base64,{{ DNS1D::getBarcodePNG($order->order_id ?? 123456, "C128") }}" alt="barcode" />
                        </div>

                        <div class="product-info">
                            <table>
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th class="text-left">Item Details</th>
                                        <th>Qty</th>
                                        <th>Rate</th>
                                        <th>Discount</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $skipCount = floor(count($order->orderDetails) / $chunk);
                                        $skip = $skipCount ? count($order->orderDetails) / $skipCount : $chunk;

                                        if ($loop->last) {
                                            $loop_last = true;
                                        }
                                    @endphp
                                    @foreach ($details->take($skip) as $detail)
                                        @php
                                            if ($loop_last && $loop->count > 8) {
                                                $is_last = true;
                                            }
                                            $subTextOrMeasurement = '';

                                        @endphp

                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td style="line-height: 16px">
                                                <p>{{ optional($detail->product)->name }}</p>
                                            </td>
                                            <td class="text-center">{{ $detail->quantity }}</td>
                                            <td class="text-center">{{ number_format($detail->price, 2, '.', '') }}</td>
                                            <td class="text-center">{{ number_format($detail->total, 2, '.', '') }}</td>
                                            <td class="text-right">
                                                @php
                                                    $line_total = ($detail->price * $detail->quantity);
                                                @endphp
                                                {{ number_format($line_total, 2, '.', '') }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div id="bottomPart" style="height: 350px; display: {{ $loop_last && !$is_last ? '' : 'none' }}">
                        <div class="row" style="display: flex; justify-content:space-between">
                            <div class="col-sm-4 col-lg-4 col-md-4 order-note" style="width: 50%;">
                                <p><b>Note :</b> {{ $order->notes }} </p>
                            </div>
                            <div class="col-sm-8 col-lg-8 col-md-8 ">
                                <div class="invoice-price" style="width: 280px;">
                                    <div class="row" style="display: flex; justify-content: space-between;">
                                        <div class="left-side">
                                            <p>Subtotal: </p>
                                            <p>VAT:</p>
                                        </div>
                                        <div class="right-side">
                                            <p>{{ number_format($order->subtotal, 2, '.', '') }}</p>
                                            <p>{{ number_format(0, 2, '.', '') }}</p>
                                        </div>
                                    </div>
                                    ------------
                                    <div class="row" style="display: flex; justify-content: space-between;">
                                        <div class="left-side">
                                            <p>Shipping Cost: </p>
                                            <p>Discount:</p>
                                        </div>
                                        <div class="right-side">
                                            <p>{{ number_format($order->shipping_cost, 2, '.', '') }}</p>
                                            <p>(-) {{ number_format($order->coupon_cost, 2, '.', '') }}</p>
                                        </div>
                                    </div>
                                    ------------
                                    <div class="row" style="display: flex; justify-content: space-between;">
                                        <div class="left-side">
                                            <p>Total Payable:</p>
                                            <p>Paid Amount: </p>
                                        </div>
                                        <div class="right-side">
                                            <p>{{ number_format($order->total, 2, '.', '') }}</p>
                                            <p>{{ number_format($order->paid_amount, 2, '.', '') }}</p>
                                        </div>
                                    </div>
                                    ------------
                                    <div class="row" style="display: flex; justify-content: space-between;">
                                        <div class="left-side">
                                            <p>Cash To Collect:</p>
                                        </div>
                                        <div class="right-side">
                                            <p>{{ number_format($order->total, 2, '.', '') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="block_container">
                            <div id="bloc1" style="float: left;">
                                <p>___________________________</p>
                                <p style="text-align:center;">Received By</p>
                            </div>
                            <div id="bloc2" style="float: right;">
                                <p>___________________________</p>
                                <p style="text-align:center;">Authorized By</p>
                            </div>
                        </div>

                        <div class="footer-message">
                            {{-- <p>{{ optional($order->company)->bill_footer }}</p> --}}
                        </div>
                    </div>
                </div>
            </section>
        @endforeach

        @if ($is_last)
            <section class="invoice" style="bottom: 0px !important;">
                <div class="container">
                    <div id="topPart">
                        <div class="invoice-info" style="margin-top:0 !important">
                            <div class="row">
                                <div class="col-6">
                                        <div class="company-logo">
                                            {{-- <img src="{{ asset($company->logo) }}" alt="Logo" class="logo"> --}}
                                        </div>
                                        <p>Name &nbsp&nbsp&nbsp&nbsp: {{ optional($order->customer)->name }}</p>
                                        <p>Mobile &nbsp&nbsp: {{ optional($order->customer)->mobile }}</p>
                                        <p>Address : {{ optional($order->deliveryAddress)->address }}</p>
                                        <p>District &nbsp&nbsp&nbsp&nbsp&nbsp: {{ optional(optional(optional($order->customer)->delivery_address)->district)->name }} | Thana : {{ optional(optional(optional($order->customer)->delivery_address)->thana)->name }}</p>
                                </div>
                                <div class="col-6 date">
                                    <div class="print-copy-info">
                                        <div>
                                            <p class="copy">{{ $copy ?? '' }}</p>
                                            <hr class="hr">
                                        </div>
                                        {{-- <p>Tax Invoice (Mushak 6.3)</p> --}}
                                    </div>
                                    <div class="company-info-invoice">
                                        {{-- <p style="font-size: 18px">{{ optional($company)->name }}</p>
                                        <p>{{ optional($company)->address }}</p>
                                        <p>Call: {{ optional($company)->hotline }}</p> --}}
                                        {{-- <p>Tax Invoice (Mushak 6.3)</p> --}}
                                    </div>

                                    <p>
                                        {{-- Shipment : {{ optional($order->warehouse)->bin_no }} |  --}}
                                        {{-- Order : {{ $order->order_no }} --}}
                                    </p>
                                    <p>Order Date : {{ date('Y-m-d h:i:s A', strtotime($order->date)) }}</p>
                                    <p>Delivery Date : {{ date('Y-m-d', strtotime($order->delivery_date)) }}</p>
                                    <p>{{ $order->payment_type == 'COD' ? 'Cash On Delivery' : '' }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <p style="font-size: 20px;"> Sales Invoice </p>
                            <p > Order No : {{ $order->order_number }}</p>
                            <img class="barcode-img pt-1" src="data:image/png;base64,{{ DNS1D::getBarcodePNG($order->order_number ?? 123456, "C128") }}" alt="barcode" />
                        </div>
                        <div class="product-info" style="margin-bottom: 220px">
                        </div>
                    </div>
                    <div id="bottomPart" style="height: 350px">
                        <div class="row" style="display: flex; justify-content:space-between">
                            <div class="col-sm-4 col-lg-4 col-md-4 order-note" style="width: 50%;">
                                <p><b>Note :</b> {{ $order->notes }} </p>
                            </div>
                            <div class="col-sm-8 col-lg-8 col-md-8 ">
                                <div class="invoice-price" style="width: 280px;">
                                    <div class="row" style="display: flex; justify-content: space-between;">
                                        <div class="left-side">
                                            <p>Subtotal: </p>
                                            <p>VAT:</p>
                                        </div>
                                        <div class="right-side">
                                            <p>{{ number_format($order->subtotal, 2, '.', '') }}</p>
                                            <p>{{ number_format(0, 2, '.', '') }}</p>
                                        </div>
                                    </div>
                                    ------------
                                    <div class="row" style="display: flex; justify-content: space-between;">
                                        <div class="left-side">
                                            <p>Shipping Cost: </p>
                                            <p>Discount:</p>
                                        </div>
                                        <div class="right-side">
                                            <p>{{ number_format($order->shipping_cost, 2, '.', '') }}</p>
                                            <p>(-) {{ number_format(0, 2, '.', '') }}</p>
                                        </div>
                                    </div>
                                    ------------
                                    <div class="row" style="display: flex; justify-content: space-between;">
                                        <div class="left-side">
                                            <p>Total Payable:</p>
                                            <p>Paid Amount: </p>
                                        </div>
                                        <div class="right-side">
                                            <p>{{ number_format($order->total, 2, '.', '') }}</p>
                                            <p>0.0</p>
                                        </div>
                                    </div>
                                    ------------
                                    <div class="row" style="display: flex; justify-content: space-between;">
                                        <div class="left-side">
                                            <p>Cash To Collect:</p>
                                        </div>
                                        <div class="right-side">
                                            <p>{{ number_format($order->total, 2, '.', '') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="block_container">
                            <div id="bloc1" style="float: left;">
                                <p>___________________________</p>
                                <p style="text-align:center;">Received By</p>
                            </div>
                            <div id="bloc2" style="float: right;">
                                <p>___________________________</p>
                                <p style="text-align:center;">Authorized By</p>
                            </div>
                        </div>

                        <div class="footer-message">
                            {{-- <p>{{ optional($order->company)->bill_footer }}</p> --}}
                        </div>
                    </div>
                </div>
            </section>
        @endif

        <script type="text/javascript">
            window.print();
        </script>
    </body>
</html>
