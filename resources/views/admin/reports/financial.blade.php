<x-backend-layout>
    <x-slot name="title">Orders</x-slot>
    <x-slot name="content">

        <div class="card">
            <div class="card-body">
                <form action="">
                    <div class="row mb-3">
        
                        <div class="col-sm-3">
                            <div class="input-group">
                                <div class="input-group-text">From Date</div>
                                <input type="date" name="from_date" value="{{ request('from_date') }}" class="form-control">
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="input-group">
                                <div class="input-group-text">To Date</div>
                                <input type="date" name="to_date" value="{{ request('to_date') }}" class="form-control">
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="input-group">
                                <div class="input-group-text">Order No</div>
                                <input type="text" name="order_id" value="{{ request('order_id') }}" class="form-control">
                            </div>
                        </div>
        
                        <div class="col-sm-3">
                            <div class="input-group">
                                <div class="input-group-text">Status</div>
                                <select name="order_status" class="form-control select2" data-placeholder="Select Status" data-selected="{{ request('order_status') }}">
                                    <option value=""></option>
                                    <option value="0">Pending</option>
                                    <option value="1">Processing</option>
                                    <option value="2">Deliveried</option>
                                    <option value="3">Cancelled</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="float-end">
                        <button class="btn btn-sm btn-outline-info">
                            <i class="fa fa-search"></i> Search
                        </button>
                        <a href="{{ request()->url() }}" class="btn btn-sm btn-outline-danger">
                            <i class="fa fa-refresh" aria-hidden="true"></i> Refresh
                        </a>
                    </div>
        
                </form>
            </div>
        </div>

        

        <div class="card">
            <div class="card-body">
                <div class="table-responsive">

                    <table class="table table-hover table-nowrap mb-0 align-middle">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Date</th>
                                <th>Order No.</th>
                                <th>Total Product</th>
                                <th>Product Cost</th>
                                <th>Selling Price</th>
                                <th>Discount</th>
                                <th class="text-right">Total Profit</th>
                            </tr>
                        </thead>

                        <tbody>
                            @php
                                $total_cost = $total_profit = $total_discount = 0;
                            @endphp

                            @forelse ($orders as $key => $item)
                                <tr>
                                    <td>{{ $orders->firstItem() + $key }}</td>
                                    <td>
                                        {{ $item->date }}
                                    </td>
                                    <td>
                                        {{ $item->order_id }}
                                    </td>
                                    <td>
                                        {{ $item->orderDetails->count() }}
                                    </td>
                                    <td>
                                        {{ $item->orderDetails->sum(function($item){
                                            return $item->product->product_cost;
                                        }) }}
                                    </td>
                                    <td>
                                        {{ $item->orderDetails->sum(function($item){
                                            return $item->product->selling_price;
                                        }) }}
                                    </td>
                                    <td>{{ $item->discount_amount }}</td>

                                    <td>
                                        {{ $item->orderDetails->sum(function($item){
                                            return $item->product->selling_price - $item->product->product_cost;
                                        }) - $item->discount_amount }}
                                    </td>
                                    <td class="text-center">
                                        
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="30" class="text-center text-danger py-3"
                                        style="background: #eaf4fa80 !important; font-size: 18px">
                                        <strong>No records found!</strong>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                    {{-- <x-paginate />
                    @include('admin.partials._paginate', ['data' => $products]) --}}


                </div>
            </div>
        </div>
    </x-slot>
</x-backend-layout>
