@extends('dashboard.layouts.master')

@section('title', __('Teacher Portal'))
@section('description', '')
@section('keywords', '')
@section('author', '')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard/teacher-portal.css') }}" />
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
            <h4>Welcome to Your Teaching Hub</h4>
            <p>Access curated resources, books, and materials to enhance your teaching experience</p>
        </div>

        <div class="resource-box">
            <span class="resource-box-title mb-4">Resource Categories</span>
            <div class="resource-box-cards">
                <div class="card">
                    <i class="fa-solid fa-calculator"></i>
                    <span>Answer Kit</span>
                    <p>3 resources available</p>
                    <a href="{{ route('teacher.answer-kit') }}" class="browse-btn">
                        Browse <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
                <div class="card">
                    <i class="fa-solid fa-book-open"></i>
                    <span>Teacher’s Resources</span>
                    <p>52 resources available</p>
                    <a href="{{ route('teacher.resource-kit') }}" class="browse-btn">
                        Browse <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
