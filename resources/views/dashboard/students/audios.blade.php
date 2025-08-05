@extends('dashboard.layouts.master')

@section('title', __('Audio Books'))
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
        <span>URDU AUDIOS</span>
    </div>
    <div class="container mt-5">
        <!-- Grade 1 -->
        <div class="item-title mb-5">
            <span>Grade 1</span>
        </div>
        <div class="row mb-5 audio-item-row">
            <div class="col-sm-12 col-md-6 col-xl-3 mt-2 audio-card" data-audio="assets/test_audio.mp3">
                <div class="audio-card-icon" style="background: linear-gradient(90deg, #FB923C 0%, #EF4444 100%);">
                    <i class="fa-solid fa-headphones"></i>
                </div>
                <div class="audio-card-content">
                    <span class="urdu-audio-name">پرستان کی دوست پریان</span>
                    <span class="english-audio-name">Paristan ki dost parian</span>
                </div>
                <button class="audio-card-button">Listen</button>
            </div>
            <div class="col-sm-12 col-md-6 col-xl-3 mt-2 audio-card" data-audio="assets/test_audio.mp3">
                <div class="audio-card-icon" style="background: linear-gradient(90deg, #60A5FA 0%, #A855F7 100%);">
                    <i class="fa-solid fa-headphones"></i>
                </div>
                <div class="audio-card-content">
                    <span class="urdu-audio-name">راجا اور درزی</span>
                    <span class="english-audio-name">Raja or darzi</span>
                </div>
                <button class="audio-card-button">Listen</button>
            </div>
            <div class="col-sm-12 col-md-6 col-xl-3 mt-2 audio-card" data-audio="assets/test_audio.mp3">
                <div class="audio-card-icon" style="background: linear-gradient(90deg, #4ADE80 0%, #3B82F6 100%);">
                    <i class="fa-solid fa-headphones"></i>
                </div>
                <div class="audio-card-content">
                    <span class="urdu-audio-name">سرکس کا گھوڑا</span>
                    <span class="english-audio-name">Sarkas ka ghora</span>
                </div>
                <button class="audio-card-button">Listen</button>
            </div>
            <div class="col-sm-12 col-md-6 col-xl-3 mt-2 audio-card" data-audio="assets/test_audio.mp3">
                <div class="audio-card-icon" style="background: linear-gradient(90deg, #C084FC 0%, #EC4899 100%);">
                    <i class="fa-solid fa-headphones"></i>
                </div>
                <div class="audio-card-content">
                    <span class="urdu-audio-name">سونے کی کلھاڑی</span>
                    <span class="english-audio-name">Sonay ki kulhari</span>
                </div>
                <button class="audio-card-button">Listen</button>
            </div>
        </div>
        <!-- Grade 2 -->
        <div class="item-title mb-5">
            <span>Grade 2</span>
        </div>
        <div class="row mb-5 audio-item-row">
            <div class="col-sm-12 col-md-6 col-xl-3 mt-2 audio-card" data-audio="assets/test_audio.mp3">
                <div class="audio-card-icon" style="background: linear-gradient(90deg, #FB923C 0%, #EF4444 100%);">
                    <i class="fa-solid fa-headphones"></i>
                </div>
                <div class="audio-card-content">
                    <span class="urdu-audio-name">تتلی کی زندگی</span>
                    <span class="english-audio-name">Titli ki zindagi</span>
                </div>
                <button class="audio-card-button">Listen</button>
            </div>
            <div class="col-sm-12 col-md-6 col-xl-3 mt-2 audio-card" data-audio="assets/test_audio.mp3">
                <div class="audio-card-icon" style="background: linear-gradient(90deg, #60A5FA 0%, #A855F7 100%);">
                    <i class="fa-solid fa-headphones"></i>
                </div>
                <div class="audio-card-content">
                    <span class="urdu-audio-name">روبینہ کی کہانی</span>
                    <span class="english-audio-name">Rubina ki kahani</span>
                </div>
                <button class="audio-card-button">Listen</button>
            </div>
            <div class="col-sm-12 col-md-6 col-xl-3 mt-2 audio-card" data-audio="assets/test_audio.mp3">
                <div class="audio-card-icon" style="background: linear-gradient(90deg, #4ADE80 0%, #3B82F6 100%);">
                    <i class="fa-solid fa-headphones"></i>
                </div>
                <div class="audio-card-content">
                    <span class="urdu-audio-name">لالچ بری بلہ ہے</span>
                    <span class="english-audio-name">Lalach buri bala hai</span>
                </div>
                <button class="audio-card-button">Listen</button>
            </div>
            <div class="col-sm-12 col-md-6 col-xl-3 mt-2 audio-card" data-audio="assets/test_audio.mp3">
                <div class="audio-card-icon" style="background: linear-gradient(90deg, #C084FC 0%, #EC4899 100%);">
                    <i class="fa-solid fa-headphones"></i>
                </div>
                <div class="audio-card-content">
                    <span class="urdu-audio-name">مہنت کا پھل</span>
                    <span class="english-audio-name">Mahnat ka phal</span>
                </div>
                <button class="audio-card-button">Listen</button>
            </div>
        </div>
        <!-- Grade 3 -->
        <div class="item-title mb-5">
            <span>Grade 3</span>
        </div>
        <div class="row mb-5 audio-item-row">
            <div class="col-sm-12 col-md-6 col-xl-3 mt-2 audio-card" data-audio="assets/test_audio.mp3">
                <div class="audio-card-icon" style="background: linear-gradient(90deg, #FB923C 0%, #EF4444 100%);">
                    <i class="fa-solid fa-headphones"></i>
                </div>
                <div class="audio-card-content">
                    <span class="urdu-audio-name">سبز خوابوں کا باغ</span>
                    <span class="english-audio-name">Sabz khwabon ka baagh</span>
                </div>
                <button class="audio-card-button">Listen</button>
            </div>
            <div class="col-sm-12 col-md-6 col-xl-3 mt-2 audio-card" data-audio="assets/test_audio.mp3">
                <div class="audio-card-icon" style="background: linear-gradient(90deg, #60A5FA 0%, #A855F7 100%);">
                    <i class="fa-solid fa-headphones"></i>
                </div>
                <div class="audio-card-content">
                    <span class="urdu-audio-name">مری امی</span>
                    <span class="english-audio-name">Meri Ammi</span>
                </div>
                <button class="audio-card-button">Listen</button>
            </div>
            <div class="col-sm-12 col-md-6 col-xl-3 mt-2 audio-card" data-audio="assets/test_audio.mp3">
                <div class="audio-card-icon" style="background: linear-gradient(90deg, #4ADE80 0%, #3B82F6 100%);">
                    <i class="fa-solid fa-headphones"></i>
                </div>
                <div class="audio-card-content">
                    <span class="urdu-audio-name">ٹیلی وژن</span>
                    <span class="english-audio-name">Television</span>
                </div>
                <button class="audio-card-button">Listen</button>
            </div>
            <div class="col-sm-12 col-md-6 col-xl-3 mt-2 audio-card" data-audio="assets/test_audio.mp3">
                <div class="audio-card-icon" style="background: linear-gradient(90deg, #C084FC 0%, #EC4899 100%);">
                    <i class="fa-solid fa-headphones"></i>
                </div>
                <div class="audio-card-content">
                    <span class="urdu-audio-name">زکوٰۃ</span>
                    <span class="english-audio-name">Zakat</span>
                </div>
                <button class="audio-card-button">Listen</button>
            </div>
        </div>
        <!-- Grade 4 -->
        <div class="item-title mb-5">
            <span>Grade 4</span>
        </div>
        <div class="row mb-5 audio-item-row">
            <div class="col-sm-12 col-md-6 col-xl-3 mt-2 audio-card" data-audio="assets/test_audio.mp3">
                <div class="audio-card-icon" style="background: linear-gradient(90deg, #FB923C 0%, #EF4444 100%);">
                    <i class="fa-solid fa-headphones"></i>
                </div>
                <div class="audio-card-content">
                    <span class="urdu-audio-name">بچوں کے داتوں میں کیڑا لگنا</span>
                    <span class="english-audio-name">Bachon ke daaton main keera lagna</span>
                </div>
                <button class="audio-card-button">Listen</button>
            </div>
            <div class="col-sm-12 col-md-6 col-xl-3 mt-2 audio-card" data-audio="assets/test_audio.mp3">
                <div class="audio-card-icon" style="background: linear-gradient(90deg, #60A5FA 0%, #A855F7 100%);">
                    <i class="fa-solid fa-headphones"></i>
                </div>
                <div class="audio-card-content">
                    <span class="urdu-audio-name">محل زبیدہ</span>
                    <span class="english-audio-name">Mahl Zubaida</span>
                </div>
                <button class="audio-card-button">Listen</button>
            </div>
            <div class="col-sm-12 col-md-6 col-xl-3 mt-2 audio-card" data-audio="assets/test_audio.mp3">
                <div class="audio-card-icon" style="background: linear-gradient(90deg, #4ADE80 0%, #3B82F6 100%);">
                    <i class="fa-solid fa-headphones"></i>
                </div>
                <div class="audio-card-content">
                    <span class="urdu-audio-name">اخبارات کی اہمیت</span>
                    <span class="english-audio-name">Akhbarat ki ahmiat</span>
                </div>
                <button class="audio-card-button">Listen</button>
            </div>
            <div class="col-sm-12 col-md-6 col-xl-3 mt-2 audio-card" data-audio="assets/test_audio.mp3">
                <div class="audio-card-icon" style="background: linear-gradient(90deg, #C084FC 0%, #EC4899 100%);">
                    <i class="fa-solid fa-headphones"></i>
                </div>
                <div class="audio-card-content">
                    <span class="urdu-audio-name">پانی کی اہمیت</span>
                    <span class="english-audio-name">Pani ki ahmiat</span>
                </div>
                <button class="audio-card-button">Listen</button>
            </div>
        </div>
        <!-- Grade 5 -->
        <div class="item-title mb-5">
            <span>Grade 5</span>
        </div>
        <div class="row mb-5 audio-item-row">
            <div class="col-sm-12 col-md-6 col-xl-3 mt-2 audio-card" data-audio="assets/test_audio.mp3">
                <div class="audio-card-icon" style="background: linear-gradient(90deg, #FB923C 0%, #EF4444 100%);">
                    <i class="fa-solid fa-headphones"></i>
                </div>
                <div class="audio-card-content">
                    <span class="urdu-audio-name">حضرت عبدالمطلب کا ایک واقعہ</span>
                    <span class="english-audio-name">Hazrat Abdul Mutalib ka aik waqia</span>
                </div>
                <button class="audio-card-button">Listen</button>
            </div>
            <div class="col-sm-12 col-md-6 col-xl-3 mt-2 audio-card" data-audio="assets/test_audio.mp3">
                <div class="audio-card-icon" style="background: linear-gradient(90deg, #60A5FA 0%, #A855F7 100%);">
                    <i class="fa-solid fa-headphones"></i>
                </div>
                <div class="audio-card-content">
                    <span class="urdu-audio-name">قاسم کی کہانی</span>
                    <span class="english-audio-name">Qasim ki kahani</span>
                </div>
                <button class="audio-card-button">Listen</button>
            </div>
            <div class="col-sm-12 col-md-6 col-xl-3 mt-2 audio-card" data-audio="assets/test_audio.mp3">
                <div class="audio-card-icon" style="background: linear-gradient(90deg, #4ADE80 0%, #3B82F6 100%);">
                    <i class="fa-solid fa-headphones"></i>
                </div>
                <div class="audio-card-content">
                    <span class="urdu-audio-name">غذا اور صحت</span>
                    <span class="english-audio-name">Ghiza or sahat</span>
                </div>
                <button class="audio-card-button">Listen</button>
            </div>
            <div class="col-sm-12 col-md-6 col-xl-3 mt-2 audio-card" data-audio="assets/test_audio.mp3">
                <div class="audio-card-icon" style="background: linear-gradient(90deg, #C084FC 0%, #EC4899 100%);">
                    <i class="fa-solid fa-headphones"></i>
                </div>
                <div class="audio-card-content">
                    <span class="urdu-audio-name">پیاس</span>
                    <span class="english-audio-name">Piyas</span>
                </div>
                <button class="audio-card-button">Listen</button>
            </div>
        </div>
        <!-- Grade 6 -->
        <div class="item-title mb-5">
            <span>Grade 6</span>
        </div>
        <div class="row mb-5 audio-item-row">
            <div class="col-sm-12 col-md-6 col-xl-3 mt-2 audio-card" data-audio="assets/test_audio.mp3">
                <div class="audio-card-icon" style="background: linear-gradient(90deg, #FB923C 0%, #EF4444 100%);">
                    <i class="fa-solid fa-headphones"></i>
                </div>
                <div class="audio-card-content">
                    <span class="urdu-audio-name">سید کمال اخمد رضوی</span>
                    <span class="english-audio-name">Syed Kamal Akhmad Rizwi</span>
                </div>
                <button class="audio-card-button">Listen</button>
            </div>
            <div class="col-sm-12 col-md-6 col-xl-3 mt-2 audio-card" data-audio="assets/test_audio.mp3">
                <div class="audio-card-icon" style="background: linear-gradient(90deg, #60A5FA 0%, #A855F7 100%);">
                    <i class="fa-solid fa-headphones"></i>
                </div>
                <div class="audio-card-content">
                    <span class="urdu-audio-name">علم کی فضیلت</span>
                    <span class="english-audio-name">Ilm ki fazeelat</span>
                </div>
                <button class="audio-card-button">Listen</button>
            </div>
            <div class="col-sm-12 col-md-6 col-xl-3 mt-2 audio-card" data-audio="assets/test_audio.mp3">
                <div class="audio-card-icon" style="background: linear-gradient(90deg, #4ADE80 0%, #3B82F6 100%);">
                    <i class="fa-solid fa-headphones"></i>
                </div>
                <div class="audio-card-content">
                    <span class="urdu-audio-name">کاغذ کی تاریخ</span>
                    <span class="english-audio-name">Kaghaz ki tareekh</span>
                </div>
                <button class="audio-card-button">Listen</button>
            </div>
            <div class="col-sm-12 col-md-6 col-xl-3 mt-2 audio-card" data-audio="assets/test_audio.mp3">
                <div class="audio-card-icon" style="background: linear-gradient(90deg, #C084FC 0%, #EC4899 100%);">
                    <i class="fa-solid fa-headphones"></i>
                </div>
                <div class="audio-card-content">
                    <span class="urdu-audio-name">ہمارے تہوار اور رسمورواج</span>
                    <span class="english-audio-name">Hamaray tahwar or rasm o riwaj </span>
                </div>
                <button class="audio-card-button">Listen</button>
            </div>
        </div>
        <!-- Grade 7 -->
        <div class="item-title mb-5">
            <span>Grade 7</span>
        </div>
        <div class="row mb-5 audio-item-row">
            <div class="col-sm-12 col-md-6 col-xl-3 mt-2 audio-card" data-audio="assets/test_audio.mp3">
                <div class="audio-card-icon" style="background: linear-gradient(90deg, #FB923C 0%, #EF4444 100%);">
                    <i class="fa-solid fa-headphones"></i>
                </div>
                <div class="audio-card-content">
                    <span class="urdu-audio-name">تاج محل</span>
                    <span class="english-audio-name">Taj Mahal</span>
                </div>
                <button class="audio-card-button">Listen</button>
            </div>
            <div class="col-sm-12 col-md-6 col-xl-3 mt-2 audio-card" data-audio="assets/test_audio.mp3">
                <div class="audio-card-icon" style="background: linear-gradient(90deg, #60A5FA 0%, #A855F7 100%);">
                    <i class="fa-solid fa-headphones"></i>
                </div>
                <div class="audio-card-content">
                    <span class="urdu-audio-name">ساینس کی ترقی</span>
                    <span class="english-audio-name">Science ki taraki</span>
                </div>
                <button class="audio-card-button">Listen</button>
            </div>
            <div class="col-sm-12 col-md-6 col-xl-3 mt-2 audio-card" data-audio="assets/test_audio.mp3">
                <div class="audio-card-icon" style="background: linear-gradient(90deg, #4ADE80 0%, #3B82F6 100%);">
                    <i class="fa-solid fa-headphones"></i>
                </div>
                <div class="audio-card-content">
                    <span class="urdu-audio-name">عورت کی عضمت</span>
                    <span class="english-audio-name">Aurat ki azmat</span>
                </div>
                <button class="audio-card-button">Listen</button>
            </div>
            <div class="col-sm-12 col-md-6 col-xl-3 mt-2 audio-card" data-audio="assets/test_audio.mp3">
                <div class="audio-card-icon" style="background: linear-gradient(90deg, #C084FC 0%, #EC4899 100%);">
                    <i class="fa-solid fa-headphones"></i>
                </div>
                <div class="audio-card-content">
                    <span class="urdu-audio-name">فضای آلودگی</span>
                    <span class="english-audio-name">Fizai aludgi</span>
                </div>
                <button class="audio-card-button">Listen</button>
            </div>
        </div>
        <!-- Grade 8 -->
        <div class="item-title mb-5">
            <span>Grade 8</span>
        </div>
        <div class="row mb-5 audio-item-row">
            <div class="col-sm-12 col-md-6 col-xl-3 mt-2 audio-card" data-audio="assets/test_audio.mp3">
                <div class="audio-card-icon" style="background: linear-gradient(90deg, #FB923C 0%, #EF4444 100%);">
                    <i class="fa-solid fa-headphones"></i>
                </div>
                <div class="audio-card-content">
                    <span class="urdu-audio-name">آکسیجن</span>
                    <span class="english-audio-name">Oxigen</span>
                </div>
                <button class="audio-card-button">Listen</button>
            </div>
            <div class="col-sm-12 col-md-6 col-xl-3 mt-2 audio-card" data-audio="assets/test_audio.mp3">
                <div class="audio-card-icon" style="background: linear-gradient(90deg, #60A5FA 0%, #A855F7 100%);">
                    <i class="fa-solid fa-headphones"></i>
                </div>
                <div class="audio-card-content">
                    <span class="urdu-audio-name">پٹھان قوم</span>
                    <span class="english-audio-name">Pathan qom</span>
                </div>
                <button class="audio-card-button">Listen</button>
            </div>
            <div class="col-sm-12 col-md-6 col-xl-3 mt-2 audio-card" data-audio="assets/test_audio.mp3">
                <div class="audio-card-icon" style="background: linear-gradient(90deg, #4ADE80 0%, #3B82F6 100%);">
                    <i class="fa-solid fa-headphones"></i>
                </div>
                <div class="audio-card-content">
                    <span class="urdu-audio-name">جرمن شاعر گوض</span>
                    <span class="english-audio-name">German shayir goz</span>
                </div>
                <button class="audio-card-button">Listen</button>
            </div>
            <div class="col-sm-12 col-md-6 col-xl-3 mt-2 audio-card" data-audio="assets/test_audio.mp3">
                <div class="audio-card-icon" style="background: linear-gradient(90deg, #C084FC 0%, #EC4899 100%);">
                    <i class="fa-solid fa-headphones"></i>
                </div>
                <div class="audio-card-content">
                    <span class="urdu-audio-name">مہنت کا پھل</span>
                    <span class="english-audio-name">Mahnat ka phal</span>
                </div>
                <button class="audio-card-button">Listen</button>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
