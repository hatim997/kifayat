@extends('dashboard.layouts.master')

@section('title', __('Profile'))
@section('description', '')
@section('keywords', '')
@section('author', '')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard/profile.css') }}" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
@endsection

@section('backbutton')
    {{-- <a href="{{ route('choose-portal') }}" class="btn btn-back">
        <i class="fa-solid fa-arrow-left"></i> <span>BACK</span>
    </a> --}}
@endsection

@section('content')
    <div class="profile-container">
        <div class="profile-card">
            <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                @csrf

                <!-- Profile Image -->
                <label class="profile-img-wrapper" for="uploadImage">
                    @if ($user->profile_img)
                        <img src="{{ asset($user->profile_img) }}" alt="Profile Picture" id="profilePreview">
                    @else
                        @php
                            $name = $user->name;
                            $initials = collect(explode(' ', $name))
                                ->map(fn($part) => strtoupper($part[0]))
                                ->take(2)
                                ->implode('');
                            $colors = ['#F87171', '#60A5FA', '#34D399', '#FBBF24', '#A78BFA', '#F472B6', '#38BDF8'];
                            $color = $colors[crc32($name) % count($colors)];
                        @endphp
                        <div class="user-avatar" style="background-color: {{ $color }};" id="profilePreviewInitials">
                            {{ $initials }}
                        </div>
                    @endif
                    <input type="file" id="uploadImage" name="profile_img" accept="image/*">
                </label>

                <h5 class="mb-3">Edit Profile</h5>

                <div class="mb-3 text-start">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="John Doe"
                        value="{{ $user->name }}">
                </div>

                <div class="mb-3 text-start">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control readonly-field" id="email" value="{{ $user->email }}"
                        readonly>
                </div>

                <div class="mb-4 text-start">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="+92 300 1234567"
                        value="{{ $user->phone }}" oninput="validatePhoneInput(this)">
                </div>

                <button type="submit" class="btn btn-primary">Save Profile</button>
            </form>
        </div>
    </div>
@endsection

@section('script')
    <script>
        const imageInput = document.getElementById('uploadImage');
        const profilePreview = document.getElementById('profilePreview');
        const previewInitials = document.getElementById('profilePreviewInitials');

        imageInput?.addEventListener('change', function() {
            const file = this.files[0];
            if (file && file.type.startsWith('image/')) {
                const url = URL.createObjectURL(file);
                if (profilePreview) {
                    profilePreview.src = url;
                } else if (previewInitials) {
                    previewInitials.outerHTML = `<img src="${url}" alt="Profile Picture" id="profilePreview">`;
                }
            }
        });

        function validatePhoneInput(input) {
            input.value = input.value.replace(/[^0-9+ ]/g, '');
        }
    </script>
@endsection
