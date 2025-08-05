<!doctype html>

<html lang="en">

<head>
    <title>{{ env('APP_NAME') }} - @yield('title')</title>
    @include('dashboard.layouts.meta')
    @include('dashboard.layouts.css')
    @yield('css')
</head>

<body>
    @include('dashboard.layouts.header')

    <!-- Back button -->
    <div class="m-3 mb-5">
        @yield('backbutton')
    </div>

    @yield('content')

    <!-- Audio Modal -->
    <div class="modal fade" id="audioModal" tabindex="-1" aria-labelledby="audioModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-3">
                <div class="modal-header">
                    <h5 class="modal-title" id="audioModalLabel">Now Playing</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <audio id="modalAudio" controls controlsList="nodownload" style="width: 100%;">
                        <source src="" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                </div>
            </div>
        </div>
    </div>
    <!-- JS -->
    @include('dashboard.layouts.script')
    @yield('script')
</body>

</html>
