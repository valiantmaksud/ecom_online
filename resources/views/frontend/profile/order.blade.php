<x-layout>
    <x-slot name="title">Order</x-slot>
    <x-slot name="content">

        <section class="inner-section profile-part">
            <div class="main">
                <div class="row" style="width: 100%">
                    <div class="col-lg-3">
                        <div class="profile-sidebar">
                            @include('frontend.profile._inc.sidebar')
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="profile-body">
                            <div class="customer-profile">

                                <div class="heading my-3">
                                    <i class="far fa-list"></i> My Orders
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th scope="col" style="width:15%">Invoice Number</th>
                                                    <th scope="col" style="width:8%" class="pl-pr-0">Order Date</th>
                                                    <th scope="col" style="width:20%" class="pl-pr-0">Products</th>
                                                    <th scope="col" style="width:15%" class="grand-total-td">Total Price</th>
                                                    <th scope="col" style="width:10%" class="pl-pr-0">Status</th>
                                                    <th scope="col" style="width:10%">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse (optional(auth()->user())->orders ?? [] as $item)
                                                    <tr>
                                                        <td class="table-serial" style="width:15%">{{ $item->order_id }}</td>
                                                        <td class="table-name" style="width:8%">
                                                            <h6>{{ $item->date }}</h6>
                                                        </td>
                                                        <td class="table-name">
                                                            @foreach ($item->orderDetails as $detail)
                                                                <span><a href="{{ route('product.show', $detail->product->slug) }}" target="_blank" rel="noopener noreferrer">{{ $detail->product?->name }} - {{ $detail->quantity }} qty</a></span>
                                                                
                                                                <br>
                                                            @endforeach
                                                        </td>
                                                        <td class="table-subtotal" style="width:15%">
                                                            <h6><span class="mt-2" style="color:black"></span>{{ number_format($item->payable_amount, 2) }}</h6>
                                                        </td>
                                                        <td class="order-status" style="width:10%">
                                                            <span class="badge bg-secondary">
                                                                @if ($item->order_status == 0)
                                                                    Pending
                                                                @elseif ($item->order_status == 1)
                                                                    Processing
                                                                @elseif ($item->order_status == 2)
                                                                    Deliveried
                                                                @elseif ($item->order_status == 3)
                                                                    Returned
                                                                @endif
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <a href="{{ route('frontend.profile.order.show', $item->id) }}"
                                                                class="item">
                                                                <i class="fas fa-print"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @empty
                                                <tr>
                                                    <td class="text-ddanger" colspan="15">
                                                        <strong>No recent orders !</strong>
                                                    </td>
                                                </tr>
                                                @endforelse
                                                

                                            </tbody>
                                        </table>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </section>


    </x-slot>
</x-layout>
