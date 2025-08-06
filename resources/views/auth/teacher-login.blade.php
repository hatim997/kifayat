@extends('auth.layouts.master')

@section('title', __('Teacher Login'))
@section('description', '')
@section('keywords', '')
@section('author', '')

@section('css')
@endsection

@section('content')
    <div class="card login-card">
        <div class="text-center mb-3">
            <div class="icon-circle mb-2">
                <i class="fa-solid fa-chalkboard-user"></i>
            </div>
            <h5 class="fw-bold mb-1">Teachers Login</h5>
            <p class="text-muted">Access your educational resources</p>
        </div>

        <form action="{{ route('teacher.login.attempt') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Email Address</label>
                <input type="email" class="form-control" placeholder="Enter your email" name="email">
            </div>
            <div class="mb-2">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" placeholder="Enter your password" name="password">
            </div>

            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="rememberMe" name="remember">
                    <label class="form-check-label" for="rememberMe">Remember me</label>
                </div>
                <a href="#" class="text-decoration-none">Forgot password?</a>
            </div>

            <button type="submit" class="btn btn-primary w-100 rounded-3">Sign in</button>
        </form>

        <p class="text-center mt-3 font-14">
            Don’t have an account? <a href="#" class="text-primary text-decoration-none">Contact Admin</a>
        </p>
    </div>
@endsection

@section('script')
@endsection
