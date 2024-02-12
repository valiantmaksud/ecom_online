<div class="mobile_menu">
    <div class="menu_head">
        <h4>{{ website_setting('site_title') ?? company()->name }}</h4>
        <div class="cross_btn">
            <i class="fas fa-times"></i>
        </div>
    </div>
    <ul>
        <li>
            <a href="/">Home</a>
        </li>
        @foreach (category() as $item)
        <li>
            <a href="{{ route('frontend.search', ['category' => $item->slug]) }}">{{ $item->name }} </a>
        </li>
        @endforeach
    </ul>
    <div class="head_right_menu">
        <i class="fas fa-search"></i>
        <a href="{{ route('frontend.profile.account') }}"><i class="fas fa-user"></i></a>
        {{-- <i class="fas fa-heart"></i> --}}
        <i class="fas fa-shopping-bag"></i>
    </div>
</div>