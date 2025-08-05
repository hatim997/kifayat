<!doctype html>

<html lang="en">

<head>
    <title>{{ env('APP_NAME') }} - @yield('title')</title>
    @include('auth.layouts.meta')
    @include('auth.layouts.css')
    @yield('css')
</head>

<body>
    <div class="gradient-background d-flex justify-content-center align-items-center vh-100">

        <div class="position-absolute top-0 start-0 m-3">
            <a href="{{ route('choose-portal') }}" class="btn btn-back"><i class="fa-solid fa-arrow-left"></i> <span>BACK</span></a>
        </div>

        @yield('content')
    </div>

    <!-- JS -->
    @include('auth.layouts.script')
    @yield('script')
</body>

</html>
