<script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- jQuery (required for Toastr) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    toastr.options = {
        "closeButton": false,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "timeOut": "2000"
    };
    @if (session('success'))
        toastr.success("{{ session('success') }}");
    @endif

    @if (session('error'))
        toastr.error("{{ session('error') }}");
    @endif

    @if (session('message'))
        toastr.info("{{ session('message') }}");
    @endif

    @if ($errors->any())
        toastr.error("{{ $errors->first() }}");
    @endif
</script>
<script>
    function playFullscreenVideo(videoSrc) {
        if (!videoSrc) return;

        console.log("Playing:", videoSrc);
        const video = document.createElement('video');
        video.src = videoSrc;
        video.type = "video/mp4";
        video.controls = true;
        video.autoplay = true;
        document.body.appendChild(video);

        const requestFullScreen = video.requestFullscreen || video.webkitRequestFullscreen || video.msRequestFullscreen;

        if (requestFullScreen) {
            requestFullScreen.call(video);
            video.play();
        }

        // Exit cleanup
        video.addEventListener('fullscreenchange', () => {
            if (!document.fullscreenElement) {
                video.pause();
                video.remove();
            }
        });

        video.addEventListener('webkitfullscreenchange', () => {
            if (!document.webkitFullscreenElement) {
                video.pause();
                video.remove();
            }
        });
    }

    // Thumbnail click
    document.querySelectorAll('.video-thumb').forEach(thumb => {
        thumb.addEventListener('click', function() {
            const videoSrc = this.getAttribute('data-video');
            playFullscreenVideo(videoSrc);
        });
    });

    // Watch button click
    document.querySelectorAll('.video-content-btn .btn-info').forEach(button => {
        button.addEventListener('click', function() {
            const thumb = this.closest('.video-card').querySelector('.video-thumb');
            const videoSrc = thumb?.getAttribute('data-video');
            playFullscreenVideo(videoSrc);
        });
    });

    // Audio Modal function
    document.querySelectorAll('.audio-card-button').forEach(button => {
        button.addEventListener('click', function() {
            const audioSrc = this.closest('.audio-card').getAttribute('data-audio');
            const modalAudio = document.getElementById('modalAudio');
            modalAudio.src = audioSrc;
            modalAudio.load();
            const modal = new bootstrap.Modal(document.getElementById('audioModal'));
            modal.show();
        });
    });
</script>
