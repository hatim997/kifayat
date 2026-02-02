@extends('dashboard.layouts.master')

@section('title', __('Chapter Details'))

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/dashboard/student-audios.css') }}" />
<style>
/* ====== Layout ====== */
.chapter-container {
    max-width: 1300px;
    margin: auto;
    padding: 24px;
}

/* ====== Card ====== */
.content-card {
    background: rgba(255,255,255,0.9);
    backdrop-filter: blur(10px);
    border-radius: 18px;
    box-shadow: 0 15px 35px rgba(0,0,0,0.08);
    overflow: hidden;
    margin-bottom: 35px;
    transition: transform .3s ease, box-shadow .3s ease;
}

.content-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 25px 45px rgba(0,0,0,0.12);
}

/* ====== Header ====== */
.content-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 18px 22px;
    background: linear-gradient(135deg, #4f46e5, #3b82f6);
    color: #fff;
}

.content-header h4 {
    margin: 0;
    font-size: 18px;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 10px;
}

.badge-type {
    background: rgba(255,255,255,0.2);
    padding: 6px 12px;
    border-radius: 20px;
    font-size: 13px;
}

/* ====== Media ====== */
.media-wrapper {
    position: relative;
    width: 100%;
    padding-top: 56.25%; /* 16:9 */
}

.media-wrapper iframe {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    border: none;
}

/* ====== Footer ====== */
.card-footer {
    padding: 16px;
    background: #f8fafc;
    text-align: center;
}

.card-footer a {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 10px 20px;
    background: #2563eb;
    color: #fff;
    border-radius: 10px;
    text-decoration: none;
    font-weight: 500;
    transition: .3s;
}

.card-footer a:hover {
    background: #1e40af;
}

/* ====== Responsive ====== */
@media (max-width: 768px) {
    .content-header h4 {
        font-size: 16px;
    }

    .badge-type {
        font-size: 12px;
        padding: 5px 10px;
    }
}
</style>
@endsection

@section('backbutton')
<a href="{{ route('student.portal') }}" class="btn btn-back">
    <i class="fa-solid fa-arrow-left"></i> <span>BACK</span>
</a>
@endsection

@section('content')
<div class="header-heading">
    <span>Uraan Urdu Series Resources</span>
</div>
<div class="chapter-container">

    {{-- Blog --}}
    <div class="content-card">
        <div class="content-header">
            <h4>
                <i class="fa-solid fa-book-open"></i>
                Chapter Article
            </h4>
            <span class="badge-type">Blog</span>
        </div>

        <div class="media-wrapper">
            <iframe src="https://newzflex.com/23173" loading="lazy"></iframe>
        </div>

        <div class="card-footer">
            <a href="https://newzflex.com/23173" target="_blank">
                <i class="fa-solid fa-up-right-from-square"></i>
                Open Full Article
            </a>
        </div>
    </div>

    {{-- Video --}}
    <div class="content-card">
        <div class="content-header">
            <h4>
                <i class="fa-brands fa-youtube"></i>
                Video Lecture
            </h4>
            <span class="badge-type">Video</span>
        </div>

        <div class="media-wrapper">
            <iframe
                src="https://www.youtube.com/embed/6qosFCwKbZU"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>
        </div>
    </div>

</div>
@endsection

@section('script')
@endsection
