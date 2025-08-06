@extends('dashboard.layouts.master')

@section('title', __('Video Library'))
@section('description', '')
@section('keywords', '')
@section('author', '')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard/student-videos.css') }}" />
@endsection

@section('backbutton')
    <a href="{{ route('student.portal') }}" class="btn btn-back">
        <i class="fa-solid fa-arrow-left"></i> <span>BACK</span>
    </a>
@endsection

@section('content')
    <div class="header-heading">
        <span>Wonderland Videos</span>
    </div>
    <div class="container item-container mt-5">
        <div class="item-title mb-5">
            <span>Workbooks</span>
        </div>
        @include('dashboard.students.sections.work-book-videos')
        <div class="item-title mt-3 mb-5">
            <span>Songs</span>
        </div>
        @include('dashboard.students.sections.songs-videos')
        <div class="item-title mt-3 mb-5">
            <span>Lowercase Formation</span>
        </div>
        @include('dashboard.students.sections.lower-videos')
        <div class="item-title mt-3 mb-5">
            <span>Uppercase Formation</span>
        </div>
        @include('dashboard.students.sections.upper-videos')
    </div>
@endsection

@section('script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const carousels = document.querySelectorAll('.carousel-wrapper');

            carousels.forEach((carouselWrapper, index) => {
                const carouselTrack = carouselWrapper.querySelector('.carousel-track');
                const prevButton = carouselWrapper.querySelector('.header-prev');
                const nextButton = carouselWrapper.querySelector('.header-next');
                const dotsContainer = carouselWrapper.parentElement.querySelector('.carousel-dots');
                const productCards = carouselTrack.querySelectorAll('.product-card');

                let productsPerSlide = 4;
                let currentIndex = 0;
                let totalSlides = 0;

                function updateProductsPerSlide() {
                    const screenWidth = window.innerWidth;
                    const productCount = productCards.length;

                    if (screenWidth <= 480) {
                        productsPerSlide = 1;
                        totalSlides = productCount;
                    } else if (screenWidth <= 768) {
                        productsPerSlide = 2;
                        totalSlides = productCount - 1;
                    } else if (screenWidth <= 1024) {
                        productsPerSlide = 3;
                        totalSlides = productCount - 2;
                    } else {
                        productsPerSlide = 4;
                        totalSlides = productCount - 3;
                    }
                }

                function setupCarousel() {
                    currentIndex = 0;
                    dotsContainer.innerHTML = '';
                    for (let i = 0; i < totalSlides; i++) {
                        const dot = document.createElement('div');
                        dot.classList.add('dot');
                        if (i === 0) dot.classList.add('active');
                        dot.dataset.index = i;
                        dotsContainer.appendChild(dot);
                    }
                }

                function updateCarousel() {
                    const cardWidth = carouselTrack.querySelector('.product-card').offsetWidth +
                        20; // includes margin
                    const offset = -(cardWidth * currentIndex);
                    carouselTrack.style.transform = `translateX(${offset}px)`;

                    const dots = dotsContainer.querySelectorAll('.dot');
                    dots.forEach((dot, idx) => {
                        dot.classList.toggle('active', idx === currentIndex);
                    });
                }

                function goToPrev() {
                    currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
                    updateCarousel();
                }

                function goToNext() {
                    currentIndex = (currentIndex + 1) % totalSlides;
                    updateCarousel();
                }

                // Dots click
                dotsContainer.addEventListener('click', function(e) {
                    if (e.target.classList.contains('dot')) {
                        currentIndex = parseInt(e.target.dataset.index);
                        updateCarousel();
                    }
                });

                prevButton.addEventListener('click', goToPrev);
                nextButton.addEventListener('click', goToNext);

                // On resize
                window.addEventListener('resize', () => {
                    updateProductsPerSlide();
                    setupCarousel();
                    updateCarousel();
                });

                // Init
                updateProductsPerSlide();
                setupCarousel();
                updateCarousel();
            });
        });
    </script>
@endsection
