@extends('dashboard.layouts.master')

@section('title', __('Uraan Urdu Series Worksheets'))
@section('description', '')
@section('keywords', '')
@section('author', '')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard/student-audios.css') }}" />
@endsection

@section('backbutton')
    <a href="{{ route('student.portal') }}" class="btn btn-back">
        <i class="fa-solid fa-arrow-left"></i> <span>BACK</span>
    </a>
@endsection

@section('content')
    <div class="header-heading">
        <span>Uraan Urdu Series Worksheets</span>
    </div>
    <div class="container mt-5">
        @if (isset($urduClasses) && count($urduClasses) > 0)
            @php
                $gradients = [
                    'linear-gradient(90deg, #FB923C 0%, #EF4444 100%)',
                    'linear-gradient(90deg, #60A5FA 0%, #A855F7 100%)',
                    'linear-gradient(90deg, #4ADE80 0%, #3B82F6 100%)',
                    'linear-gradient(90deg, #C084FC 0%, #EC4899 100%)',
                    'linear-gradient(90deg, #FBBF24 0%, #F472B6 100%)',
                    'linear-gradient(90deg, #22D3EE 0%, #3B82F6 100%)',
                    'linear-gradient(90deg, #34D399 0%, #10B981 100%)',
                    'linear-gradient(90deg, #8B5CF6 0%, #6366F1 100%)',
                    'linear-gradient(90deg, #F87171 0%, #FCD34D 100%)',
                    'linear-gradient(90deg, #F472B6 0%, #FB7185 100%)',
                ];
            @endphp
            @foreach ($urduClasses as $class)
                <div class="item-title mb-5">
                    <span>{{ $class->name }}</span>
                </div>
                @if (isset($class->classChapters) && count($class->classChapters) > 0)
                    <div class="row mb-5 audio-item-row">
                        @foreach ($class->classChapters as $chapter)
                            <div class="col-sm-12 col-md-6 col-xl-3 mb-5">
                                <div class="audio-card-icon"
                                    style="background: {{ $gradients[$loop->index % count($gradients)] }};">
                                    <i class="fa-solid fa-feather"></i>
                                </div>
                                <div class="audio-card-content">
                                    <span class="urdu-audio-name">{{ $chapter->name }}</span>
                                </div>
                                <a href="{{ route('student.uraan-urdu-series.chapter', ['class' => $class->slug, 'chapter' => $chapter->slug]) }}" class="audio-card-button">View</a>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="text-center py-5">
                        <i class="fa-solid fa-circle-exclamation fa-2x text-danger mb-3"></i>
                        <h5>No chapters found</h5>
                    </div>
                @endif
            @endforeach
        @endif
    </div>
@endsection

@section('script')
@endsection
