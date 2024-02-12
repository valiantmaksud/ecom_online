<section class="gallery_section">
    <div class="swiper gallery_swiper">
        <div class="swiper-wrapper">
            @foreach (banners()->where('position', 'middle') as $item)
                <div class="swiper-slide">
                    <a href="{{ $item->link }}" target="_blank">
                        <img src="{{ asset($item->image) }}" alt="{{ $item->name }}" loading="lazy">
                    </a>
                    <p>{{ $item->title }}</p>
                </div>
            @endforeach
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>