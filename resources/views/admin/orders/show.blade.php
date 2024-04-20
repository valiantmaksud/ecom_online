<x-backend-layout>
    <x-slot name="title">Order Detail</x-slot>
    <x-slot name="styles">
        <style>
            @media print{
                .col-sm-6{
                    float: left;
                }
            }
        </style>
    </x-slot>
    <x-slot name="content">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0">Order Detail</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('admin.orders.index') }}">Order</a></li>
                            <li class="breadcrumb-item active">Order Detail</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="invoice-title">
                            <h4 class="float-end font-size-15">Invoice #{{ $order->order_id }} <span class="badge bg-success font-size-12 ms-2">Paid</span></h4>
                            <div class="mb-4">
                                {{-- @if (file_exists(company()?->logo))
                                    <img src="{{ asset(company()->logo) }}" alt="logo" height="28"/>
                                @endif --}}
                                
                            </div>
                            <div class="text-muted">
                                {{-- <p class="mb-1">{{ company()?->address }}</p> --}}
                                {{-- <p class="mb-1"><i class="uil uil-envelope-alt me-1"></i> {{ company()?->email }}</p> --}}
                                {{-- <p><i class="uil uil-phone me-1"></i> {{ company()?->hotline }}</p> --}}
                            </div>
                        </div>

                        <hr class="my-4">

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="text-muted">
                                    <h5 class="font-size-16 mb-3">Billed To:</h5>
                                    <h5 class="font-size-15 mb-2">{{ optional($order->customer)->name }}</h5>
                                    <p class="mb-1">{{ optional($order->delivery_address)->address }}</p>
                                    <p class="mb-1">{{ optional($order->customer)->email }}</p>
                                    <p>{{ optional($order->customer)->mobile }}</p>
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-sm-6">
                                <div class="text-muted text-sm-end">
                                    <div>
                                        <h5 class="font-size-15 mb-1">Invoice No:</h5>
                                        <p>#{{ $order->order_id }}</p>
                                    </div>
                                    <div class="mt-4">
                                        <h5 class="font-size-15 mb-1">Invoice Date:</h5>
                                        <p>{{ fdate($order->date, 'F d, Y') }}</p>
                                    </div>
                                    {{-- <div class="mt-4">
                                        <h5 class="font-size-15 mb-1">Order No:</h5>
                                        <p>#{{ $order->order_number }}</p>
                                    </div> --}}
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->
                        
                        <div class="py-2">
                            <h5 class="font-size-15">Order Summary</h5>

                            <div class="table-responsive">
                                <table class="table align-middle table-nowrap table-centered mb-0">
                                    <thead>
                                        <tr>
                                            <th style="width: 70px;">No.</th>
                                            <th>Item</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th class="text-end" style="width: 120px;">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($order->orderDetails as $item)
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>
                                                    <div>
                                                        <h5 class="text-truncate font-size-14 mb-1">{{ optional($item->product)->name }}</h5>
                                                    
                                                    </div>
                                                </td>
                                                <td> {{ number_format($item->price, 2) }}</td>
                                                <td>{{ $item->quantity }}</td>
                                                <td class="text-end">{{ number_format($item->price * $item->quantity, 2) }}</td>
                                            </tr>
                                        @endforeach                                        
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th scope="row" colspan="4" class="text-end">Sub Total</th>
                                            <td class="text-end">{{ number_format($order->payable_amount, 2) }}</td>
                                        </tr>
                                        <!-- end tr -->
                                        <tr>
                                            <th scope="row" colspan="4" class="border-0 text-end">
                                                Discount :</th>
                                            <td class="border-0 text-end">- 0</td>
                                        </tr>
                                        <!-- end tr -->
                                        
                                        <tr>
                                            <th scope="row" colspan="4" class="border-0 text-end">
                                                Shipping Charge :</th>
                                            <td class="border-0 text-end">{{ number_format($order->shipping_cost) }}</td>
                                        </tr>
                                        <!-- end tr -->
                                       
                                        <tr>
                                            <th scope="row" colspan="4" class="border-0 text-end">
                                                Paid :</th>
                                            <td class="border-0 text-end">{{ number_format($order->paid_amount) }}</td>
                                        </tr>
                                        <!-- end tr -->
                                        
                                        <tr>
                                            <th scope="row" colspan="4" class="border-0 text-end">Total</th>
                                            <td class="border-0 text-end"><h4 class="m-0 fw-semibold">{{ number_format($order->total, 2) }}</h4></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="note">
                                Notes
                                <hr class="my-4">
                                @if ($order->order_note)
                                    {{ $order->order_note }}
                                @else
                                    <p class="text-danger">No note added in this order !</p>
                                @endif
                            </div>
                            <div class="d-print-none mt-4">
                                
                                <hr class="my-4">
                                <div class="row">
                                    <form action="{{ route('admin.order-process', $order->id) }}" method="POST">
                                        @csrf
                                        <div class="col-sm-6">
                                            <div class="input-group mb-3">
                                                <label class="input-group-text">Update Status</label>
                                                <select class="form-select selec2" name="status" data-selected="{{ $order->order_status }}">
                                                    <option value="0" {{ $order->order_status == 0 ? 'selected' : '' }}>Pending</option>
                                                    <option value="1" {{ $order->order_status == 1 ? 'selected' : '' }}>Processing</option>
                                                    <option value="2" {{ $order->order_status == 2 ? 'selected' : '' }}>Deliveried</option>
                                                    <option value="3" {{ $order->order_status == 3 ? 'selected' : '' }}>Cancelled</option>
                                                </select>
                                                {{-- <span class="badge bg-info"> Accepted </span>
                                                            <span class="badge bg-primary"> Processing </span>
                                                            <span class="badge bg-success"> On the way </span>
                                                            <span class="badge bg-warning"> Delivered </span>
                                                            <span class="badge bg-danger"> Cancelled </span>
                                                            <span class="badge bg-dark">Default</span> --}}
                                            </div>
                                            <div class="input-group mb-3">
                                                <label class="input-group-text">Payment Status</label>
                                                <select class="form-select" name="payment_statue">
                                                    <option selected value="0">Pending</option>
                                                    <option value="1">Paid</option>
                                                    <option value="3">Cancel</option>
                                                </select>
                                                
                                            </div>
                                            <div class="input-group mb-3">
                                                <label class="input-group-text">Payment Ref.</label>
                                                <input type="text" class="form-control" name="payment_reference" value="{{ $order->payment_id }}">
                                            </div>
                                            <div class="input-group mb-3">
                                                <label class="input-group-text">Payment Amount</label>
                                                <input type="text" class="form-control" name="paid_amount">
                                            </div>
                                            <div class="input-group mb-3">
                                                <label class="input-group-text">Delivery Date</label>
                                                <input type="text" class="form-control date-picker" name="delivery_date">
                                            </div>
                                            <div class="float-end">
                                                <button class="btn btn-outline-success" type="submit">
                                                    <i class="fa fa-save"></i> Update
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                

                                {{-- <div class="float-end">
                                    <a href="javascript:window.print()" class="btn btn-success me-1"><i class="fa fa-print"></i></a>
                                    <a href="#" class="btn btn-primary w-md">Send</a>
                                </div>
                                 --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </x-slot>
</x-backend-layout>