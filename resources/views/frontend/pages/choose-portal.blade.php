@extends('frontend.layouts.master')

@section('title', __('Choose Portal'))
@section('description', '')
@section('keywords', '')
@section('author', '')

@section('css')
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="choose-portal-title">
                    <span class="title">
                        Choose Your Portal
                    </span>
                    <span class="para">
                        Access your personalized learning environment
                    </span>
                </div>
                <div class="choose-portal-cards">
                    <a href="{{ route('student.login') }}">
                        <div class="card">
                            <div class="text-center mb-3">
                                <div class="icon-circle mb-2 student-icon">
                                    <i class="fa-solid fa-user-graduate"></i>
                                </div>
                                <h5 class="fw-bold mb-1 portal-card-title">Student Portal</h5>
                                <p class="text-muted portal-card-para">Access videos, audiobooks, and digital learning
                                    resources</p>
                                <div class="icons">
                                    <div class="video-icon">
                                        <i class="fa-solid fa-video"></i>
                                        <span>Videos</span>
                                    </div>
                                    <div class="audio-icon">
                                        <i class="fa-solid fa-headphones"></i>
                                        <span>Audios</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('teacher.login') }}">
                        <div class="card">
                            <div class="text-center mb-3">
                                <div class="icon-circle teacher-icon mb-2">
                                    <i class="fa-solid fa-chalkboard-user"></i>
                                </div>
                                <h5 class="fw-bold mb-1 portal-card-title">Teacher Portal</h5>
                                <p class="text-muted portal-card-para">Access teaching resources, lesson plans, and
                                    educational materials</p>
                                <div class="icons">
                                    <div class="video-icon">
                                        <i class="fa-solid fa-book"></i>
                                        <span>Resources</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
