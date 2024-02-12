<section class="gallery_section">
    <div class="swiper gallery_swiper">
        <div class="swiper-wrapper">
            @foreach (category() as $item)
                <div class="swiper-slide">
                    <a href="{{ route('frontend.search', ['category'=>$item->slug]) }}" target="_blank">
                        <img src="{{ asset($item->image) }}" alt="{{ $item->name }}" loading="lazy" height="275px" width="275px">
                    </a>
                    <p class="text-center" style="margin-left:20%">
                        <span style="padding: .45em 1em .25em 1em;background-color: #b21f25 !important;" class="badge bg-secondary">{{ $item->name }}</span>
                    </p>
                </div>
            @endforeach
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>
