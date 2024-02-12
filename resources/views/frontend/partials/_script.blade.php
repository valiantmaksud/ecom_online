@include('frontend._script.cart')

<script>
    function loadModal(product_id) {
        $.LoadingOverlay("show")
        let options = {
            url: '{{ route('product-quick-view') }}',
            method: 'GET',
            params: {
                product_id: product_id
            }
        };
        axios(options).then(function(response) {

            $('#quick-view-modal').html(response.data);
            $('#quick-view').modal('show');
            initZoom();
            imageShowOnFocus();
            $.LoadingOverlay("hide")

        }).catch(function(error) {
            console.log(error);
            $.LoadingOverlay("hide")
        });
    }
</script>




<script type="text/javascript">
    // $(function(){
    //     $('body').on('click','.quick_view_btn', function(e){
    //         e.preventDefault();
    //         var data = JSON.parse(JSON.stringify($(this).data('product')));
    //         console.log(data);
    //         $('.quick-view').find('.product-name').html(data.name);
    //         $('.quick-view').find('.product-description-content').html(data.description);
    //         $('.quick-view').find('.product-sale-price').html('৳' + data.price);
    //         $('.quick-view').find('.product-offer-price').html('৳'+ data.offer_price);

    //         let li = '';
    //         $('.bzoom_thumb_image').empty();
    //         data.images.forEach(function(image){
    //             li += '<li><img class="bzoom_thumb_image" src="'+image.image+'" /><img class="bzoom_big_image" src="'+image.image+'" /></li>';
    //         });
    //         $('.quick-view').find('#bzoom').html(li);
    //         quickViewInit()
    //         $('#quickViewModal').modal();
    //     });
    // });
</script>

<script>
    $(".select2").select2({
        tags: "true",
        placeholder: "Select an option",
        allowClear: true
    });
</script>

<script>
    // success alert message like popup window
    @if (session()->get('message'))

        Toast.fire({
            icon: 'success',
            title: '<b>{{ session()->get('message') }}</b>'
        })


        // success alert message like popup window
    @elseif (session()->get('success'))
        Toast.fire({
            icon: 'success',
            title: '<b>{{ session()->get('success') }}</b>'
        })


        // error alert message like popup window
    @elseif (session()->get('error'))
        Toast.fire({
            icon: 'error',
            title: '<b>{{ session()->get('error') }}</b>'
        })
    @endif
</script>





<script>
    $('select').each(function() {
        let selected = $(this).data('selected');

        if (typeof selected === "undefined") {
            return;
        }

        $(this).val(selected).prop('selected', 'selected')

    })
</script>


<script>
    $(document).on('click', '.subscriber-btn', storeSubscriber)
    const subscriberInput = $('.subscriber-input')

    function storeSubscriber() {
        if (subscriberInput.val() == '') {
            showToastr('Please enter email.');
            return false;
        }
        let options = {
            url: '{{ route('newsletter.store') }}',
            method: 'POST',

            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json;charset=UTF-8'
            },
            data: {
                email: subscriberInput.val(),
                _token: '{{ csrf_token() }}',
            }
        };
        axios(options).then(function(response) {
            showToastr(response.data.message, 'success');
        }).catch(function(error) {
            console.log(error);
        });
    }
</script>


<script>
    $(function() {
        $('.lazy').Lazy();
    });
</script>
