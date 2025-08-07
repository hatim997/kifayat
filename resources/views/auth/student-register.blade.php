@extends('auth.layouts.master')

@section('title', __('Register'))
@section('description', '')
@section('keywords', '')
@section('author', '')

@section('css')
@endsection

@section('content')
    <div class="card login-card mt-5">
        <div class="text-center mb-3">
            <div class="icon-circle mb-2">
                <i class="fa-solid fa-user-graduate"></i>
            </div>
            <h5 class="fw-bold mb-1">Register</h5>
            <p class="text-muted">Register your account to access resources</p>
        </div>

        <form action="{{ route('student.register.attempt') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" placeholder="Enter your name" name="name">
            </div>
            <div class="mb-3">
                <label class="form-label">Email Address</label>
                <input type="email" class="form-control" placeholder="Enter your email" name="email">
            </div>
            <div class="mb-2">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" placeholder="Enter password" name="password">
            </div>

            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="terms" name="terms" checked>
                    <label class="form-check-label" for="terms">Agreed to our <a href="#">Terms and Conditions</a></label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary w-100 rounded-3">Sign Up</button>
        </form>

        <p class="text-center mt-3 font-14">
            Already have an account? <a href="{{ route('student.login') }}" class="text-primary text-decoration-none">Sign In</a>
        </p>
    </div>
@endsection

@section('script')
@endsection
