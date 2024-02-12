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
                                    <i class="far fa-heart"></i> Wishlists
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <table class="table-list">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Serial</th>
                                                    <th scope="col">Product</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Price</th>
                                                    <th scope="col text-transform-initial">Add to cart</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                    <tr class="item-card">
                                                        <td class="table-serial">
                                                            <h6>1</h6>
                                                        </td>
                                                        <td class="table-image">
                                                            <img class="item-image" src="" alt="not found" width="50px" height="48px">
                                                        </td>
                                                        <td class="table-name">
                                                            <h6 class="item-name">Product Name</h6>
                                                        </td>
                                                        <td class="table-price">
                                                            <h6>
                                                                <span class="mt-2 taka-color">৳</span>
                                                                <span class="item-sale-price">78</span>
                                                            </h6>
                                                        </td>
                                                        <td class="table-quantity">
                                                            <a href="javascript:void(0)" class="btn btn-sm btn-black bg-black text-white"><i class="fas fa-cart-plus"></i>Add to Cart</a>
                                                        </td>
                                                        <td class="table-action">
                                                            <a class="trash" href="javascript:void(0)" title="Remove Wishlist"><i class="fas fa-trash"></i></a>
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
