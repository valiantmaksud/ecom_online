<script>
    const submitBtn     = document.getElementById('submit-btn');
    const tosCheckbox   = document.getElementById('tos');
    const firstName     = document.getElementById('first_name');
    const lastName      = document.getElementById('last_name');
    const email         = document.getElementById('email');
    const address       = document.getElementById('address');
    const district      = document.getElementById('district_id');
    const thana         = document.getElementById('thana_id');
    const phone         = document.getElementById('phone');



    $('#district_id').on('change', ()=> {

        $('.shipping-cost-input').val($('#district_id option:selected').data('shippingCost'));
        $('.shipping-cost').text($('#district_id option:selected').data('shippingCost'));

        calcGrandTotal()
    })


    submitBtn.addEventListener('click', (e) => {
        e.preventDefault();
        
        if (firstName.value == '') {
            showToastr('Please enter first name');
            return false;
        }
        if (lastName.value == '') {
            showToastr('Please enter last name');
            return false;
        }
        
        if (address.value == '') {
            showToastr('Please enter address');
            return false;
        }
        if (district.value == '') {
            showToastr('Please select district');
            return false;
        }
        if (thana.value == '') {
            showToastr('Please select thana');
            return false;
        }
        if (phone.value == '') {
            showToastr('Please enter phone');
            return false;
        } 
        if (!tosCheckbox.checked) {
            showToastr('Please accept terms and conditions');
            return false;
        }

        document.getElementById('checkout-form').submit();
    } );

    function calcGrandTotal(){
        let total = Number($('.checkout-total-cart-amount').text().trim());
        let shipping = Number($('.shipping-cost-input').val());
        let coupon = Number($('.coupon-cost').text().trim());
        $('.checkout-total-price').text(total + shipping - coupon)
    }

    $(document).on('ready', ()=> {
        calcGrandTotal()
    })
</script>


<script>

    const couponCode = document.getElementById('coupon_code');

    function checkCoupon() {
        if (couponCode.value == '') {
            showToastr('Please enter coupon code');
            return false;
        }

        let options = {
            url: '{{ route('user-coupon') }}',
            method: 'POST',
            params: {
                _token: '{{ csrf_token() }}',
                code: couponCode.value
            }
        };
        axios(options).then(function(response) {

            if (response.data.status) {
                showToastr('Coupon applied success', 'success');
                let data = response.data.data;
                let couponValue = data.value;
                if (data.type != 'fixed' ) {
                    let total = Number($('.checkout-total-cart-amount').text().trim());
                    couponValue =  total * (couponValue / 100);
                }
                $('.coupon-cost').text(couponValue);
                $('#coupon_id').val(data.id);
                calcGrandTotal()
            } else {
                showToastr(response.data.data);
            }

        }).catch(function(error) {
            console.log(error);
        });
    }
</script>