<!DOCTYPE html>

<html lang="en">

@include('frontend.layouts.includes._head')

{{ $styles ?? '' }}

<body>

    {{-- Including Cartlist Popup Modal --}}
    @include('frontend.partials.cart-modal')


    {{-- Including Quick View Popup Modal --}}
    @include('frontend.partials._quick-view-modal')


    {{-- Including Navbar part --}}
    @include('frontend.layouts.includes._navbar')

    <x-alert />
    {{-- Body Content goes here --}}
    {{ $content ?? 'Default Content' }}


    {{-- Including Footer part --}}
    @include('frontend.layouts.includes._footer')




    {{-- Including Master File Script --}}
    @include('frontend.layouts.includes._master_file_script')

    {{ $scripts ?? '' }}

</body>

</html>
