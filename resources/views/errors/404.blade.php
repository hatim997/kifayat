@extends('errors.layouts.master')

@section('title', __('404 Not Found'))
@section('description', '')
@section('keywords', '')
@section('author', '')

@section('css')
@endsection

@section('content')
    <div class="error-code">404</div>
    <div class="error-message">Page Not Found</div>
    <div class="error-description">
        Oops! The page you’re looking for doesn’t exist or has been moved.
    </div>
    <a href="{{ route('choose-portal') }}" class="btn btn-primary btn-home">Go to Homepage</a>
@endsection

@section('script')
@endsection
