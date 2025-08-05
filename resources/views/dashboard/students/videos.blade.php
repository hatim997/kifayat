@extends('dashboard.layouts.master')

@section('title', __('Video Library'))
@section('description', '')
@section('keywords', '')
@section('author', '')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard/student-videos.css') }}" />
@endsection

@section('backbutton')
    <a href="{{ route('student.portal') }}" class="btn btn-back">
        <i class="fa-solid fa-arrow-left"></i> <span>BACK</span>
    </a>
@endsection

@section('content')
    <div class="header-heading">
        <span>Wonderland Videos</span>
    </div>
    <div class="container item-container mt-5">
        <div class="item-title mb-5">
            <span>Workbooks</span>
        </div>
        <div class="row mb-4">
            <div class="col-sm-12 col-md-6 col-xl-3 mb-3">
                <div class="video-card">
                    <div class="video-thumb position-relative" data-video="assets/test_video.mp4">
                        <img src="assets/images/video-thumbnails/latter-a.png" alt="A" class="img-fluid">
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
            <div class="col-sm-12 col-md-6 col-xl-3 mb-3">
                <div class="video-card">
                    <div class="video-thumb position-relative" data-video="assets/test_video.mp4">
                        <img src="assets/images/video-thumbnails/latter-b.png" alt="B" class="img-fluid">
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
            <div class="col-sm-12 col-md-6 col-xl-3 mb-3">
                <div class="video-card">
                    <div class="video-thumb position-relative" data-video="assets/test_video.mp4">
                        <img src="assets/images/video-thumbnails/latter-c.png" alt="C" class="img-fluid">
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
            <div class="col-sm-12 col-md-6 col-xl-3 mb-3">
                <div class="video-card">
                    <div class="video-thumb position-relative" data-video="assets/test_video.mp4">
                        <img src="assets/images/video-thumbnails/latter-d.png" alt="D" class="img-fluid">
                        <i class="fa-solid fa-play play-icon"
                            style="position:absolute; top:50%; left:50%; transform:translate(-50%, -50%); font-size:2rem; color:white;"></i>
                    </div>
                    <div class="video-content p-3">
                        <h6>D</h6>
                        <small class="video-content-para">Learning letters of the alphabets with examples</small>
                        <div class="video-content-btn">
                            <small class="text-muted">For Pre Primary</small>
                            <button class="btn btn-sm btn-info mt-2 text-white">Watch</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item-title mt-3 mb-5">
            <span>Songs</span>
        </div>
        <div class="row mb-4">
            <div class="col-sm-12 col-md-6 col-xl-3 mb-3">
                <div class="video-card">
                    <div class="video-thumb position-relative" data-video="assets/test_video.mp4">
                        <img src="assets/images/video-thumbnails/latter-a.png" alt="A" class="img-fluid">
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
            <div class="col-sm-12 col-md-6 col-xl-3 mb-3">
                <div class="video-card">
                    <div class="video-thumb position-relative" data-video="assets/test_video.mp4">
                        <img src="assets/images/video-thumbnails/latter-b.png" alt="B" class="img-fluid">
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
            <div class="col-sm-12 col-md-6 col-xl-3 mb-3">
                <div class="video-card">
                    <div class="video-thumb position-relative" data-video="assets/test_video.mp4">
                        <img src="assets/images/video-thumbnails/latter-c.png" alt="C" class="img-fluid">
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
            <div class="col-sm-12 col-md-6 col-xl-3 mb-3">
                <div class="video-card">
                    <div class="video-thumb position-relative" data-video="assets/test_video.mp4">
                        <img src="assets/images/video-thumbnails/latter-d.png" alt="D" class="img-fluid">
                        <i class="fa-solid fa-play play-icon"
                            style="position:absolute; top:50%; left:50%; transform:translate(-50%, -50%); font-size:2rem; color:white;"></i>
                    </div>
                    <div class="video-content p-3">
                        <h6>D</h6>
                        <small class="video-content-para">Learning letters of the alphabets with examples</small>
                        <div class="video-content-btn">
                            <small class="text-muted">For Pre Primary</small>
                            <button class="btn btn-sm btn-info mt-2 text-white">Watch</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item-title mt-3 mb-5">
            <span>Lowercase Formation</span>
        </div>
        <div class="row mb-4">
            <div class="col-sm-12 col-md-6 col-xl-3 mb-3">
                <div class="video-card">
                    <div class="video-thumb position-relative" data-video="assets/test_video.mp4">
                        <img src="assets/images/video-thumbnails/latter-a.png" alt="A" class="img-fluid">
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
            <div class="col-sm-12 col-md-6 col-xl-3 mb-3">
                <div class="video-card">
                    <div class="video-thumb position-relative" data-video="assets/test_video.mp4">
                        <img src="assets/images/video-thumbnails/latter-b.png" alt="B" class="img-fluid">
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
            <div class="col-sm-12 col-md-6 col-xl-3 mb-3">
                <div class="video-card">
                    <div class="video-thumb position-relative" data-video="assets/test_video.mp4">
                        <img src="assets/images/video-thumbnails/latter-c.png" alt="C" class="img-fluid">
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
            <div class="col-sm-12 col-md-6 col-xl-3 mb-3">
                <div class="video-card">
                    <div class="video-thumb position-relative" data-video="assets/test_video.mp4">
                        <img src="assets/images/video-thumbnails/latter-d.png" alt="D" class="img-fluid">
                        <i class="fa-solid fa-play play-icon"
                            style="position:absolute; top:50%; left:50%; transform:translate(-50%, -50%); font-size:2rem; color:white;"></i>
                    </div>
                    <div class="video-content p-3">
                        <h6>D</h6>
                        <small class="video-content-para">Learning letters of the alphabets with examples</small>
                        <div class="video-content-btn">
                            <small class="text-muted">For Pre Primary</small>
                            <button class="btn btn-sm btn-info mt-2 text-white">Watch</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item-title mt-3 mb-5">
            <span>Uppercase Formation</span>
        </div>
        <div class="row mb-4">
            <div class="col-sm-12 col-md-6 col-xl-3 mb-3">
                <div class="video-card">
                    <div class="video-thumb position-relative" data-video="assets/test_video.mp4">
                        <img src="assets/images/video-thumbnails/latter-a.png" alt="A" class="img-fluid">
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
            <div class="col-sm-12 col-md-6 col-xl-3 mb-3">
                <div class="video-card">
                    <div class="video-thumb position-relative" data-video="assets/test_video.mp4">
                        <img src="assets/images/video-thumbnails/latter-b.png" alt="B" class="img-fluid">
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
            <div class="col-sm-12 col-md-6 col-xl-3 mb-3">
                <div class="video-card">
                    <div class="video-thumb position-relative" data-video="assets/test_video.mp4">
                        <img src="assets/images/video-thumbnails/latter-c.png" alt="C" class="img-fluid">
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
            <div class="col-sm-12 col-md-6 col-xl-3 mb-3">
                <div class="video-card">
                    <div class="video-thumb position-relative" data-video="assets/test_video.mp4">
                        <img src="assets/images/video-thumbnails/latter-d.png" alt="D" class="img-fluid">
                        <i class="fa-solid fa-play play-icon"
                            style="position:absolute; top:50%; left:50%; transform:translate(-50%, -50%); font-size:2rem; color:white;"></i>
                    </div>
                    <div class="video-content p-3">
                        <h6>D</h6>
                        <small class="video-content-para">Learning letters of the alphabets with examples</small>
                        <div class="video-content-btn">
                            <small class="text-muted">For Pre Primary</small>
                            <button class="btn btn-sm btn-info mt-2 text-white">Watch</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
