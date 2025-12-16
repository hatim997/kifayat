<div class="top-bar">
    <a href="{{ route('choose-portal') }}">
        <img src="{{ asset('assets/images/logos/kifayat.png') }}" alt="Logo" height="50">
    </a>
    {{-- <img src="{{ asset('assets/images/account/profile.png') }}" alt="User" class="avatar"> --}}

    <!-- Avatar Trigger -->
    {{-- <img src="{{ asset('assets/images/account/profile.png') }}" alt="User" class="avatar" data-bs-toggle="offcanvas"
        data-bs-target="#sidebarOffcanvas" aria-controls="sidebarOffcanvas"> --}}

    @if (!request()->routeIs('student.*'))
        @if (Auth::user()->profile_img)
            <img src="{{ asset(Auth::user()->profile_img) }}" alt="User" class="avatar" data-bs-toggle="offcanvas"
                data-bs-target="#sidebarOffcanvas" aria-controls="sidebarOffcanvas">
        @else
            @php
                $name = Auth::user()->name;
                $initials = collect(explode(' ', $name))->map(fn($part) => strtoupper($part[0]))->take(2)->implode('');
                $colors = ['#F87171', '#60A5FA', '#34D399', '#FBBF24', '#A78BFA', '#F472B6', '#38BDF8'];
                $color = $colors[crc32($name) % count($colors)];
            @endphp

            <div class="user-initials-avatar" style="background-color: {{ $color }};" data-bs-toggle="offcanvas"
                data-bs-target="#sidebarOffcanvas" aria-controls="sidebarOffcanvas">
                {{ $initials }}
            </div>
        @endif
    @endif
</div>

<!-- Offcanvas Sidebar -->
@if (!request()->routeIs('student.*'))
    <div class="offcanvas offcanvas-end custom-sidebar" tabindex="-1" id="sidebarOffcanvas">
        <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title">{{ Auth::user()->name }}</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>

        <div class="offcanvas-body d-flex flex-column justify-content-between">
            <div>
                <a href="{{ route('profile.index') }}" class="sidebar-link">
                    <i class="fas fa-user me-2"></i> Profile
                </a>
            </div>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="btn btn-logout w-100 mt-4" type="submit">
                    <i class="fas fa-sign-out-alt me-2"></i> Logout
                </button>
            </form>
        </div>
    </div>
@endif
