<script>
    const user_id       = {{ auth()->id() ?? 0 }};
    let cartItem        = $('.cart-items');
    let cartItemCount   = $('.cart-item');
    let cartTQty        = $('.cart-total-quantity');
    let cartTPrice      = $('.cart-total-amount');
    let cartGrandTotal  = $('#cartGrandTotal, .checkout-total-cart-amount');
    let orderPageCart   = $('.order-page-cart-items');

    const options = {
        url: 'http://localhost:3000/api/home',
        method: 'POST',
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json;charset=UTF-8'
        },
        data: {
            name: 'David',
            age: 45
        }
    };


    $(document).on('click', '.add-to-cart-btn', addToCart)


    // function axiosGet(options) {
    //     axios(options)..then(function(response) {
    //         console.log(response);
    //     }).catch(function(error) {
    //         console.log(error);
    //     });
    // }



    // function axiosPost(options) {
    //     axios(options).then(function(response) {
    //         console.log(response);
    //     }).catch(function(error) {
    //         console.log(error);
    //     });
    // }


    cartItems();


    function checkUser() {
        if (!user_id) {
            window.location.href = '{{ route('frontend.auth.login') }}';
            return false;
        }
    }

    function cartItems() {
        let options = {
            url: '{{ route('cart.index') }}',
            method: 'GET',
            params: {
                referer: '{{ request()->url() }}'
            }
        };
        axios(options).then(function(response) {

            cartItem.html(response.data.view);
            cartTQty.html(response.data.total > 0 ? cartItem.find('.cart-item').length : 0);
            cartTPrice.html(response.data.total);
            cartGrandTotal.html(response.data.total);

            if (response.data.view2 != '') {
                orderPageCart.html(response.data.view2);
                checkoutPageTotal();
            }

        }).catch(function(error) {
            console.log(error);
        });
    }


    function addToCart() {

        $.LoadingOverlay("show")

        let product_id = $(this).data('product-id');
        let quantity = $(this).parents('.product_box, .product_info, .order_cart').children('.order_cart').children('.quantity').find('.quantity_input').val() || 1;
        let size_id = $(this).parents('.product_box, .product_info, .order_cart').children('.sizes').children('.aiz-megabox').find('input[type=radio]:checked').val()

        
        checkUser();

        // quantity = Number($('input[name=quantity]').val() || 0);
        // console.log('ttt',$('.quantity_input').val());

        let options = {
            url: '{{ route('cart.store') }}',
            method: 'POST',

            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json;charset=UTF-8'
            },
            data: {
                product_id: product_id,
                quantity: quantity,
                size_id: size_id,
                _token: '{{ csrf_token() }}',
                referer: '{{ request()->url() }}'

            }
        };
        axios(options).then(function(response) {
            showToastr(response.data.message, 'success');
            cartItems();
            $.LoadingOverlay("hide")
        }).catch(function(error) {
            console.log(error);
            $.LoadingOverlay("hide")
        });
    }

    function updateCart(rowId, quantity) {

        checkUser();
        $.LoadingOverlay("show")
        let url = '{{ route('cart.destroy', ':id') }}';
        url = url.replace(':id', rowId);
        let options = {
            url: url,
            method: 'PATCH',
            data: {
                _token: '{{ csrf_token() }}',
                quantity: quantity,
                referer: '{{ request()->url() }}'

            }
        };
        axios(options).then(function(response) {
            showToastr(response.data.message, 'success');
            cartItems();
            $.LoadingOverlay("hide")
        }).catch(function(error) {
            console.log(error);
            $.LoadingOverlay("hide")
        });
    }



    function removeFromCart(rowId) {
        $.LoadingOverlay("show")
        let url = '{{ route('cart.destroy', ':id') }}';
        url = url.replace(':id', rowId);
        let options = {
            url: url,
            method: 'DELETE',
            data: {
                _token: '{{ csrf_token() }}',
                referer: '{{ request()->url() }}'

            }
        };
        axios(options).then(function(response) {
            showToastr(response.data.message, 'success');
            cartItems();
            $.LoadingOverlay("hide")
        }).catch(function(error) {
            console.log(error);
            $.LoadingOverlay("hide")
        });
    }


function checkoutPageTotal() {
    $('.checkout-total-price').text(Number($('.checkout-total-cart-amount').text()) + 70 );
}
</script>
