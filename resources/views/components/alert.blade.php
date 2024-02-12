@if ($errors->any())
    <div class="alert alert-danger alert-outline alert-dismissible fade show" role="alert">
        @foreach ($errors->all() as $error)
            <i class="uil uil-exclamation-octagon font-size-16 text-danger me-2"></i>
            {{ $error }}
        @endforeach
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif



@if (session()->get('message'))
    <div class="alert alert-success alert-outline alert-dismissible fade show" role="alert">
        <i class="uil uil-check font-size-16 text-success me-2"></i>
        {{ session()->get('message') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if (session()->get('error'))
    <div class="alert alert-warning alert-outline alert-dismissible fade show" role="alert">
        <i class="uil uil-exclamation-triangle font-size-16 text-warning me-2"></i>
        {{ session()->get('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
