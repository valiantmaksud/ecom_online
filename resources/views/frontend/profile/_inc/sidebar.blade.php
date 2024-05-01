
<div class="left-side common-side profile-left-side">
    @if (file_exists(auth()->user()->image))
        <img class="rounded-circle header-profile-user" src="{{ asset(auth()->user()->image) }}" alt="Header Avatar" style="height: 280px">
    @else
        <img class="rounded-circle header-profile-user" src="{{ asset('assets/admin') }}/images/users/avatar-1.jpg" alt="Header Avatar" style="height: 280px">
    @endif
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <a class="nav-link {{ request()->routeIs('frontend.profile.account') ? 'active' : '' }}" href="{{ route('frontend.profile.account') }}">Account</a>
        <a class="nav-link {{ request()->routeIs('frontend.profile.order') ? 'active' : '' }}" href="{{ route('frontend.profile.order') }}">Order</a>
        <a class="nav-link" href="{{ route('frontend.auth.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <span>Logout</span>
        </a>
        <form id="logout-form" action="{{ route('frontend.auth.logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</div>
