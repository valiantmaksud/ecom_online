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
                                    <i class="far fa-list"></i> Track Order
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th scope="col" style="width:15%">Invoice Number</th>
                                                    <th scope="col" style="width:8%" class="pl-pr-0">Order Date</th>
                                                    <th scope="col" style="width:15%" class="grand-total-td">Total Price</th>
                                                    <th scope="col" style="width:10%" class="pl-pr-0">Status</th>
                                                    <th scope="col" style="width:12%">Track</th>
                                                    <th scope="col" style="width:10%">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                    <tr>
                                                        <td class="table-serial" style="width:15%" >
                                                            <h6>3458034</h6>
                                                        </td>
                                                        <td class="table-name" style="width:8%" >
                                                            <h6>2022-02-2</h6>
                                                        </td>
                                                        <td class="table-subtotal" style="width:15%" >
                                                            <h6><span class="mt-2" style="color:black"></span>500</h6>
                                                        </td>
                                                        <td class="order-status" style="width:10%" >

                                                            <span class="badge bg-secondary"> Pending </span>
                                                            {{-- <span class="badge bg-info"> Accepted </span>
                                                            <span class="badge bg-primary"> Processing </span>
                                                            <span class="badge bg-success"> On the way </span>
                                                            <span class="badge bg-warning"> Delivered </span>
                                                            <span class="badge bg-danger"> Cancelled </span>
                                                            <span class="badge bg-dark">Default</span> --}}

                                                        </td>
                                                        <td class="table-price" style="width:12%" >
                                                            <p><span class="mt-2" style="color:black">COD</span></p>
                                                        </td>
                                                        <td style="width:10%" >

                                                            <a class="item" href="javascript:void(0)" >
                                                                <i class="fas fa-pencil"></i>
                                                            </a>

                                                        </td>
                                                    </tr>

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

