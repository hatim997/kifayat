@extends('dashboard.layouts.master')

@section('title', __('Student Portal'))
@section('description', '')
@section('keywords', '')
@section('author', '')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/dashboard/student-portal.css') }}" />
@endsection

@section('backbutton')
    <a href="{{ route('choose-portal') }}" class="btn btn-back">
        <i class="fa-solid fa-arrow-left"></i> <span>BACK</span>
    </a>
@endsection

@section('content')
    <div class="container">
        <!-- Welcome Section -->
        <div class="dashboard-header mt-5">
            <h4>Welcome back, {{ Auth::user()->name }}!</h4>
            <p>Continue your learning journey with our digital resources</p>
            <div class="row info-box-container text-center mt-4">
                <div class="col-md-4 info-box">
                    <h4>12</h4>
                    <p>Videos Watched</p>
                </div>
                <div class="col-md-4 info-box">
                    <h4>8</h4>
                    <p>Books Read</p>
                </div>
                <div class="col-md-4 info-box">
                    <h4>95%</h4>
                    <p>Progress</p>
                </div>
            </div>
        </div>

        <!-- Quick Access -->
        <div class="section-title d-flex justify-content-between align-items-center mb-3">
            <h5>Quick Access</h5>
        </div>
        <div class="row quick-access mb-4">
            <div class="col-md-3">
                <a href="{{ route('student.videos') }}">
                    <div class="card p-3">
                        <div class="quick-access-box">
                            <span class="me-2 fs-4 icon-box red-box"><i class="fa-solid fa-play"></i></span>
                            <div class="quick-access-text">
                                <p>Video Library</p>
                                <small>Access educational videos</small>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="{{ route('student.audios') }}">
                    <div class="card p-3">
                        <div class="quick-access-box">
                            <span class="me-2 fs-4 icon-box green-box"><i class="fa-solid fa-headphones"></i></span>
                            <div class="quick-access-text">
                                <p>Audio Books</p>
                                <small>Listen to audio content</small>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <!-- Recent Videos -->
        <div class="section-title d-flex justify-content-between align-items-center mb-3">
            <h5>Recent Videos</h5>
            <a href="{{ route('student.videos') }}" class="text-decoration-none view-all-btn">View All</a>
        </div>
        <div class="row mb-4">
            <div class="col-md-4 mb-3">
                <div class="video-card">
                    <div class="video-thumb position-relative" data-video="{{ asset('assets/test_video.mp4') }}">
                        <img src="{{ asset('assets/images/video-thumbnails/latter-a.png') }}" alt="A" class="img-fluid">
                        <i class="fa-solid fa-play play-icon"
                            style="position:absolute; top:50%; left:50%; transform:translate(-50%, -50%); font-size:2rem; color:white;"></i>
                    </div>
                    <div class="video-content p-3">
                        <h6>A</h6>
                        <small class="video-content-para">Learning letters of the alphabets with examples</small>
                        <div class="video-content-btn">
                            <small class="text-muted">For Pre Primary</small>
                            <button class="btn btn-sm btn-info mt-2 text-white">Watch</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="video-card">
                    <div class="video-thumb position-relative" data-video="{{ asset('assets/test_video.mp4') }}">
                        <img src="{{ asset('assets/images/video-thumbnails/latter-a.png') }}" alt="A" class="img-fluid">
                        <i class="fa-solid fa-play play-icon"
                            style="position:absolute; top:50%; left:50%; transform:translate(-50%, -50%); font-size:2rem; color:white;"></i>
                    </div>
                    <div class="video-content p-3">
                        <h6>B</h6>
                        <small class="video-content-para">Learning letters of the alphabets with examples</small>
                        <div class="video-content-btn">
                            <small class="text-muted">For Pre Primary</small>
                            <button class="btn btn-sm btn-info mt-2 text-white">Watch</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="video-card">
                    <div class="video-thumb position-relative" data-video="{{ asset('assets/test_video.mp4') }}">
                        <img src="{{ asset('assets/images/video-thumbnails/latter-a.png') }}" alt="A" class="img-fluid">
                        <i class="fa-solid fa-play play-icon"
                            style="position:absolute; top:50%; left:50%; transform:translate(-50%, -50%); font-size:2rem; color:white;"></i>
                    </div>
                    <div class="video-content p-3">
                        <h6>C</h6>
                        <small class="video-content-para">Learning letters of the alphabets with examples</small>
                        <div class="video-content-btn">
                            <small class="text-muted">For Pre Primary</small>
                            <button class="btn btn-sm btn-info mt-2 text-white">Watch</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Audio Books -->
        <div class="section-title d-flex justify-content-between align-items-center mb-3">
            <h5>Recent Audio Books</h5>
            <a href="{{ route('student.audios') }}" class="text-decoration-none view-all-btn">View All</a>
        </div>
        <div class="row mb-5 audio-item-row">
            <div class="col-sm-12 col-md-6 col-xl-3 me-2 mt-2 audio-card" data-audio="{{ asset('assets/test_audio.mp3') }}">
                <div class="audio-card-icon" style="background: linear-gradient(90deg, #FB923C 0%, #EF4444 100%);">
                    <i class="fa-solid fa-headphones"></i>
                </div>
                <div class="audio-card-content">
                    <span class="urdu-audio-name">پرستان کی دوست پریان</span>
                    <span class="english-audio-name">Paristan ki dost parian</span>
                </div>
                <button class="audio-card-button">Listen</button>
            </div>
            <div class="col-sm-12 col-md-6 col-xl-3 me-2 mt-2 audio-card" data-audio="{{ asset('assets/test_audio.mp3') }}">
                <div class="audio-card-icon" style="background: linear-gradient(90deg, #60A5FA 0%, #A855F7 100%);">
                    <i class="fa-solid fa-headphones"></i>
                </div>
                <div class="audio-card-content">
                    <span class="urdu-audio-name">راجا اور درزی</span>
                    <span class="english-audio-name">Raja or darzi</span>
                </div>
                <button class="audio-card-button">Listen</button>
            </div>
            <div class="col-sm-12 col-md-6 col-xl-3 me-2 mt-2 audio-card" data-audio="{{ asset('assets/test_audio.mp3') }}">
                <div class="audio-card-icon" style="background: linear-gradient(90deg, #4ADE80 0%, #3B82F6 100%);">
                    <i class="fa-solid fa-headphones"></i>
                </div>
                <div class="audio-card-content">
                    <span class="urdu-audio-name">سرکس کا گھوڑا</span>
                    <span class="english-audio-name">Sarkas ka ghora</span>
                </div>
                <button class="audio-card-button">Listen</button>
            </div>
            <div class="col-sm-12 col-md-6 col-xl-3 me-2 mt-2 audio-card" data-audio="{{ asset('assets/test_audio.mp3') }}">
                <div class="audio-card-icon" style="background: linear-gradient(90deg, #C084FC 0%, #EC4899 100%);">
                    <i class="fa-solid fa-headphones"></i>
                </div>
                <div class="audio-card-content">
                    <span class="urdu-audio-name">سونے کی کلھاڑی</span>
                    <span class="english-audio-name">Sonay ki kulhari</span>
                </div>
                <button class="audio-card-button mt-2">Listen</button>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
