<!doctype html>

<html lang="en">

<head>
    <title>{{ env('APP_NAME') }} - @yield('title')</title>
    @include('frontend.layouts.meta')
    @include('frontend.layouts.css')
    @yield('css')
</head>

<body>
    <div class="gradient-background d-flex justify-content-center align-items-center vh-100">

        <div class="position-absolute top-0 start-0 m-3">
            <button class="btn btn-back"><i class="fa-solid fa-arrow-left"></i> <span>BACK</span></button>
        </div>

        @yield('content')
    </div>

    <!-- JS -->
    @include('frontend.layouts.script')
    @yield('script')
</body>

</html>
