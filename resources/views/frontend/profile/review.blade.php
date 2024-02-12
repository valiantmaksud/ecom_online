<x-layout>
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
                                    <i class="far fa-star"></i> Product Reviews
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <table class="table-list">
                                            <thead>
                                                <tr>
                                                    <th scope="col">SL</th>
                                                    <th scope="col">Product</th>
                                                    <th scope="col">Rating</th>
                                                    <th scope="col">View</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($orders ?? [] as $item)
                                                    @foreach ($item->orderDetails as $order)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ optional($order->product)->name }}</td>
                                                            <td>
                                                                <div class="stars">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star-half-alt"></i>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <a href="{{ route('product.show', $order->product->slug) }}">
                                                                    <i class="fas fa-eye"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    @endforeach

                                                @empty
                                                <tr>
                                                    <td colspan="30">
                                                        <strong class="text-danger">No Order found !</strong>
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
