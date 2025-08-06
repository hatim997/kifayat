@extends('dashboard.layouts.master')

@section('title', __('Answer Kit'))
@section('description', '')
@section('keywords', '')
@section('author', '')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard/answer-kit.css') }}" />
@endsection

@section('backbutton')
    <a href="{{ route('teacher.portal') }}" class="btn btn-back">
        <i class="fa-solid fa-arrow-left"></i> <span>BACK</span>
    </a>
@endsection

@section('content')
    <div class="header-heading">
        <span>Answer Kit</span>
    </div>
    <div class="container item-container mt-5">
        <div class="item-title">
            <span>Mathematics</span>
        </div>
        <div class="boxes mt-5">
            <a href="{{ asset('assets/ebooks/answer-keys/Maths-Star-3-answer-key') }}" target="_blank" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/mathstar-grade-3.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Math Stars 3 <br> Answer Key</span>
                    <div class="vertical-bottom">
                        <span class="badge mathematics">Mathematics</span>
                        <div class="mute-text">
                            <span>PDF • 8 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ asset('assets/ebooks/answer-keys/Maths-Star-4-answer-key') }}" target="_blank" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/mathstar-grade-4.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Math Stars 4 <br> Answer Key</span>
                    <div class="vertical-bottom">
                        <span class="badge mathematics">Mathematics</span>
                        <div class="mute-text">
                            <span>PDF • 10 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ asset('assets/ebooks/answer-keys/Maths-Star-5-answer-key') }}" target="_blank" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/mathstar-grade-5.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Math Stars 5 <br> Answer Key</span>
                    <div class="vertical-bottom">
                        <span class="badge mathematics">Mathematics</span>
                        <div class="mute-text">
                            <span>PDF • 11 pages</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endsection

@section('script')
@endsection
