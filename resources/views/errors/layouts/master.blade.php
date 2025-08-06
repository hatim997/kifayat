<!doctype html>

<html lang="en">

<head>
    <title>{{ env('APP_NAME') }} - @yield('title')</title>
    @include('errors.layouts.meta')
    @include('errors.layouts.css')
    @yield('css')
</head>

<body>
    <div class="error-container">
        <img src="{{ asset('assets/images/logos/kifayat.png') }}" alt="Kifayat Logo" class="logo">
        @yield('content')
    </div>


    <!-- JS -->
    @include('errors.layouts.script')
    @yield('script')
</body>

</html>
