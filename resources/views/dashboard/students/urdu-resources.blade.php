@extends('dashboard.layouts.master')

@section('title', __('Chapter Details'))

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard/student-audios.css') }}" />
    <style>
        /* ===== Layout ===== */
        .chapter-container {
            max-width: 1300px;
            margin: auto;
            padding: 30px 20px;
        }

        /* ===== Card ===== */
        .content-card {
            background: #ffffff;
            border-radius: 20px;
            box-shadow: 0 18px 40px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            margin-bottom: 40px;
            transition: all .3s ease;
        }

        .content-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.12);
        }

        /* ===== Header ===== */
        .content-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 18px 24px;
            background: linear-gradient(135deg, #4f46e5, #2563eb);
            color: #fff;
        }

        .content-header h4 {
            margin: 0;
            font-size: 18px;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .badge-type {
            background: rgba(255, 255, 255, 0.25);
            padding: 6px 14px;
            border-radius: 999px;
            font-size: 13px;
            font-weight: 500;
        }

        /* ===== Media ===== */
        .media-wrapper {
            position: relative;
            width: 100%;
            padding-top: 56.25%;
            background: #000;
            user-select: none;
        }

        .media-wrapper iframe,
        .media-wrapper video {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            border: none;
            pointer-events: auto;
        }

        /* Disable selection + right click */
        .media-wrapper {
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        /* ===== Responsive ===== */
        @media (max-width: 768px) {
            .content-header h4 {
                font-size: 16px;
            }

            .badge-type {
                font-size: 12px;
                padding: 5px 12px;
            }
        }
    </style>
@endsection

@section('backbutton')
    <a href="{{ route('student.portal') }}" class="btn btn-back">
        <i class="fa-solid fa-arrow-left"></i> <span>BACK</span>
    </a>
@endsection

@section('content')

    <div class="header-heading">
        <span>Uraan Urdu Series Resources</span>
    </div>

    <div class="chapter-container">

        {{-- Blog / PDF --}}
        <div class="content-card">
            <div class="content-header">
                <h4>
                    <i class="fa-solid fa-book-open"></i>
                    Chapter Article
                </h4>
                <span class="badge-type">Read Only</span>
            </div>

            <div class="media-wrapper" oncontextmenu="return false">
                <iframe src="{{ asset('assets/urdu-resources/lahore-famous-places.pdf') }}#toolbar=0&navpanes=0&scrollbar=0"
                    loading="lazy">
                </iframe>
            </div>
        </div>

        {{-- Video --}}
        {{-- Video --}}
        <div class="content-card">
            <div class="content-header">
                <h4>
                    <i class="fa-brands fa-youtube"></i>
                    Video Lecture
                </h4>
                <span class="badge-type">View Only</span>
            </div>

            <div class="media-wrapper" oncontextmenu="return false">
                <video id="chapterVideo" src="{{ asset('assets/urdu-resources/Khewra-Salt-Mine.mp4') }}"
                    poster="{{ asset('assets/urdu-resources/video-poster.jpg') }}" controls preload="metadata" playsinline
                    controlsList="nodownload noplaybackrate" disablePictureInPicture>
                </video>
            </div>
        </div>


    </div>
@endsection

@section('script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const video = document.getElementById('chapterVideo');
            if (video) {
                video.load(); // forces early buffering
            }
        });

        // Disable right-click on media
        document.addEventListener('contextmenu', function(e) {
            if (e.target.closest('.media-wrapper')) {
                e.preventDefault();
            }
        });
    </script>
@endsection
