<!-- scripts js -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script src="{{ asset('assets/frontend')}}/js/script.js"></script>
<script src="{{ asset('assets/frontend')}}/js/blog-v1.js"></script>
<script src="{{ asset('assets/frontend')}}/js/slider.js"></script>
<script src="{{ asset('assets/frontend')}}/js/price-range.js"></script>
<script src="{{ asset('assets/frontend')}}/js/image-zoom.js"></script>
<script src="{{ asset('assets/frontend')}}/js/quick-view.js"></script>
<script src="{{ asset('assets/frontend')}}/js/main-sidebar-menu.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

<script src="{{ asset('assets/share/sweetalert2/sweetalert2.all.min.js') }}"></script>
<script src="{{ asset('assets/share/js/sweet_toastr.js') }}?v={{ time() }}"></script>
<script src="{{ asset('assets/share/select2/js/select2.min.js') }}"></script>

{{------- FOR PLAYING VIDEO ON BANNER IMAGE JS -------}}
<script src="{{ asset('assets/frontend')}}/js/venobox.min.js"></script>

<script type="text/javascript" src="{{ asset('assets/frontend')}}/js/jquery.lazy.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js"></script>

<script>
    $('.venobox').venobox();
</script>


@include('frontend.partials._script')
