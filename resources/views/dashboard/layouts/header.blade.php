<div class="top-bar">
    <img src="{{ asset('assets/images/logos/kifayat.png') }}" alt="Logo" height="50">
    {{-- <img src="{{ asset('assets/images/account/profile.png') }}" alt="User" class="avatar"> --}}

    <!-- Avatar Trigger -->
    <img src="{{ asset('assets/images/account/profile.png') }}" alt="User" class="avatar"
         data-bs-toggle="offcanvas" data-bs-target="#sidebarOffcanvas" aria-controls="sidebarOffcanvas">
</div>

<!-- Offcanvas Sidebar -->
<div class="offcanvas offcanvas-end custom-sidebar" tabindex="-1" id="sidebarOffcanvas" aria-labelledby="sidebarOffcanvasLabel">
  <div class="offcanvas-header border-bottom">
    <h5 class="offcanvas-title" id="sidebarOffcanvasLabel">{{ Auth::user()->name }}</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body d-flex flex-column justify-content-between">
    <div>
        <a href="#" class="sidebar-link"><i class="fas fa-user me-2"></i> Profile</a>
        <a href="#" class="sidebar-link"><i class="fas fa-cog me-2"></i> Settings</a>
    </div>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button class="btn btn-logout w-100 mt-4" type="submit"><i class="fas fa-sign-out-alt me-2"></i> Logout</button>
    </form>
  </div>
</div>
