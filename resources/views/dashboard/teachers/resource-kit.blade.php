@extends('dashboard.layouts.master')

@section('title', __('Teacher’s Resources Guide'))
@section('description', '')
@section('keywords', '')
@section('author', '')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard/resource-kit.css') }}" />
@endsection

@section('backbutton')
    <a href="{{ route('teacher.portal') }}" class="btn btn-back">
        <i class="fa-solid fa-arrow-left"></i> <span>BACK</span>
    </a>
@endsection

@section('content')
    <div class="header-heading">
        <span>Teacher’s Resources Guide</span>
    </div>
    <div class="container item-container mt-5">
        <!-- English Books -->
        <div class="item-title">
            <span>English/Phonics</span>
        </div>
        <div class="boxes mt-5">
            <a href="{{ asset('assets/ebooks/english/MBS-Jr-Infant-Teaching-Guides') }}" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/mbs-1.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">MBS Jr. Infant <br> Teaching Guide</span>
                    <div class="vertical-bottom">
                        <span class="badge english">English</span>
                        <div class="mute-text">
                            <span>PDF • 342 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ asset('assets/ebooks/english/MBS-Sr-Infant-Teaching-Guides') }}" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/mbs-2.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">MBS Jr. Infant <br> Teaching Guide</span>
                    <div class="vertical-bottom">
                        <span class="badge english">English</span>
                        <div class="mute-text">
                            <span>PDF • 342 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ asset('assets/ebooks/english/My-book-of-Rhymes') }}" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/mbs-3.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">MBS Jr. Infant <br> Teaching Guide</span>
                    <div class="vertical-bottom">
                        <span class="badge english">English</span>
                        <div class="mute-text">
                            <span>PDF • 342 pages</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Mathematics Books -->
        <div class="item-title mt-5">
            <span>Mathematics</span>
        </div>
        <div class="boxes mt-5">
            <a href="#" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/math-jr-1.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Maths Jr. Infant <br> Part 1 TG</span>
                    <div class="vertical-bottom">
                        <span class="badge mathematics">Mathematics</span>
                        <div class="mute-text">
                            <span>PDF • 342 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/math-jr-2.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Maths Jr. Infant <br> Part 2 TG</span>
                    <div class="vertical-bottom">
                        <span class="badge mathematics">Mathematics</span>
                        <div class="mute-text">
                            <span>PDF • 342 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/math-sr-1.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Maths Sr. Infant <br> Part 1 TG</span>
                    <div class="vertical-bottom">
                        <span class="badge mathematics">Mathematics</span>
                        <div class="mute-text">
                            <span>PDF • 342 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/math-sr-2.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Maths Sr. Infant <br> Part 2 TG</span>
                    <div class="vertical-bottom">
                        <span class="badge mathematics">Mathematics</span>
                        <div class="mute-text">
                            <span>PDF • 342 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/mathstar-grade-1.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Maths Stars 1 TG</span>
                    <div class="vertical-bottom">
                        <span class="badge mathematics">Mathematics</span>
                        <div class="mute-text">
                            <span>PDF • 342 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/mathstar-grade-2.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Maths Stars 2 TG</span>
                    <div class="vertical-bottom">
                        <span class="badge mathematics">Mathematics</span>
                        <div class="mute-text">
                            <span>PDF • 342 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/mathstar-grade-3.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Maths Stars 3 TG</span>
                    <div class="vertical-bottom">
                        <span class="badge mathematics">Mathematics</span>
                        <div class="mute-text">
                            <span>PDF • 342 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/mathstar-grade-4.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Maths Stars 4 TG</span>
                    <div class="vertical-bottom">
                        <span class="badge mathematics">Mathematics</span>
                        <div class="mute-text">
                            <span>PDF • 342 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/mathstar-grade-5.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Maths Stars 5 TG</span>
                    <div class="vertical-bottom">
                        <span class="badge mathematics">Mathematics</span>
                        <div class="mute-text">
                            <span>PDF • 342 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/mathstar-grade-6.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Maths Stars 6 TG</span>
                    <div class="vertical-bottom">
                        <span class="badge mathematics">Mathematics</span>
                        <div class="mute-text">
                            <span>PDF • 342 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/mathstar-grade-7.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Maths Stars 7 TG</span>
                    <div class="vertical-bottom">
                        <span class="badge mathematics">Mathematics</span>
                        <div class="mute-text">
                            <span>PDF • 342 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/mathstar-grade-8.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Maths Stars 8 TG</span>
                    <div class="vertical-bottom">
                        <span class="badge mathematics">Mathematics</span>
                        <div class="mute-text">
                            <span>PDF • 342 pages</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- General Knowledge Books -->
        <div class="item-title mt-5">
            <span>General Knowledge</span>
        </div>
        <div class="boxes mt-5">
            <a href="#" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/small-world-jr.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Small World <br> Junior TG</span>
                    <div class="vertical-bottom">
                        <span class="badge science">Science</span>
                        <div class="mute-text">
                            <span>PDF • 342 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/small-world-sr.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Small World <br> Senior TG</span>
                    <div class="vertical-bottom">
                        <span class="badge science">Science</span>
                        <div class="mute-text">
                            <span>PDF • 342 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/small-world-class-1.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Small World <br> Class 1</span>
                    <div class="vertical-bottom">
                        <span class="badge science">Science</span>
                        <div class="mute-text">
                            <span>PDF • 342 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/small-world-class-2.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Small World <br> Class 2</span>
                    <div class="vertical-bottom">
                        <span class="badge science">Science</span>
                        <div class="mute-text">
                            <span>PDF • 342 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/small-world-class-4.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Small World <br> Class 3</span>
                    <div class="vertical-bottom">
                        <span class="badge science">Science</span>
                        <div class="mute-text">
                            <span>PDF • 342 pages</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Urdu Books -->
        <div class="item-title mt-5">
            <span>Urdu</span>
        </div>
        <div class="boxes mt-5">
            <a href="{{ asset('assets/Samar-e-Urdu-Aaroo') }}" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/samar-e-urdu-aam-class-1.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Samar e Urdu <br> Aam Class 1 TG</span>
                    <div class="vertical-bottom">
                        <span class="badge urdu">Urdu</span>
                        <div class="mute-text">
                            <span>PDF • 342 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/samar-e-urdu-anar-class-2.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Samar e Urdu <br> Aanar Class 2 TG</span>
                    <div class="vertical-bottom">
                        <span class="badge urdu">Urdu</span>
                        <div class="mute-text">
                            <span>PDF • 342 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/samar-e-urdu-angoor-class-3.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Samar e Urdu <br> Angoor Class 3 TG</span>
                    <div class="vertical-bottom">
                        <span class="badge urdu">Urdu</span>
                        <div class="mute-text">
                            <span>PDF • 342 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/samar-e-urdu-saib-class-4.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Samar e Urdu <br> Saib Class 4 TG</span>
                    <div class="vertical-bottom">
                        <span class="badge urdu">Urdu</span>
                        <div class="mute-text">
                            <span>PDF • 342 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/samar-e-urdu-santra-class-5.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Samar e Urdu <br> Santra Class 5 TG</span>
                    <div class="vertical-bottom">
                        <span class="badge urdu">Urdu</span>
                        <div class="mute-text">
                            <span>PDF • 342 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/samar-e-urdu-neem-class-6.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Samar e Urdu <br> Neem Class 6 TG</span>
                    <div class="vertical-bottom">
                        <span class="badge urdu">Urdu</span>
                        <div class="mute-text">
                            <span>PDF • 342 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/samar-e-urdu-snobar-class-7.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Samar e Urdu <br> Sanober Class 7 TG</span>
                    <div class="vertical-bottom">
                        <span class="badge urdu">Urdu</span>
                        <div class="mute-text">
                            <span>PDF • 342 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/samar-e-urdu-amaltas-class-8.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Samar e Urdu <br> Amaltas Class 8 TG</span>
                    <div class="vertical-bottom">
                        <span class="badge urdu">Urdu</span>
                        <div class="mute-text">
                            <span>PDF • 342 pages</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Urdu Dhanak Series Books -->
        <div class="item-title mt-5">
            <span>Urdu Dhanak Series</span>
        </div>
        <div class="boxes mt-5">
            <a href="#" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/dhanak-urdu-laal-1.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Dhanak Urdu laal <br> Class 1</span>
                    <div class="vertical-bottom">
                        <span class="badge urdu">Urdu</span>
                        <div class="mute-text">
                            <span>PDF • 342 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/dhanak-urdu-neela-2.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Dhanak Urdu Neela <br> Class 2</span>
                    <div class="vertical-bottom">
                        <span class="badge urdu">Urdu</span>
                        <div class="mute-text">
                            <span>PDF • 342 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/dhanak-urdu-peela-3.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Dhanak Urdu Peela <br> Class 3</span>
                    <div class="vertical-bottom">
                        <span class="badge urdu">Urdu</span>
                        <div class="mute-text">
                            <span>PDF • 342 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/dhanak-urdu-hara-4.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Dhanak Urdu Hara <br> Class 4</span>
                    <div class="vertical-bottom">
                        <span class="badge urdu">Urdu</span>
                        <div class="mute-text">
                            <span>PDF • 342 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/dhanak-urdu-narangi-5.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Dhanak Urdu Naranji <br> Class 5</span>
                    <div class="vertical-bottom">
                        <span class="badge urdu">Urdu</span>
                        <div class="mute-text">
                            <span>PDF • 342 pages</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Dhanak Series Special Edition Books -->
        <div class="item-title mt-5">
            <span>Dhanak Series Special Edition</span>
        </div>
        <div class="boxes mt-5">
            <a href="#" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/dhanak-urdu-jamni-6.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Dhanak Urdu Jamni <br> Class 6 TG</span>
                    <div class="vertical-bottom">
                        <span class="badge urdu">Urdu</span>
                        <div class="mute-text">
                            <span>PDF • 342 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/dhanak-urdu-unabi-7.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Dhanak Urdu Unabi <br> Class 7 TG</span>
                    <div class="vertical-bottom">
                        <span class="badge urdu">Urdu</span>
                        <div class="mute-text">
                            <span>PDF • 342 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/dhanak-urdu-safaid-8.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Dhanak Urdu Safaid <br> Class 8 TG</span>
                    <div class="vertical-bottom">
                        <span class="badge urdu">Urdu</span>
                        <div class="mute-text">
                            <span>PDF • 342 pages</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Islamiat (Mera Piyara Deen Islam) Books -->
        <div class="item-title mt-5">
            <span>Islamiat (Mera Piyara Deen Islam)</span>
        </div>
        <div class="boxes mt-5">
            <a href="#" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/mera-piyara-deen-e-islam-class-3.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Mera Piyara Deen-e-Islam <br> Class 3</span>
                    <div class="vertical-bottom">
                        <span class="badge islamiat">Islamiat</span>
                        <div class="mute-text">
                            <span>PDF • 342 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/mera-piyara-deen-e-islam-class-4.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Mera Piyara Deen-e-Islam <br> Class 4</span>
                    <div class="vertical-bottom">
                        <span class="badge islamiat">Islamiat</span>
                        <div class="mute-text">
                            <span>PDF • 342 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/mera-piyara-deen-e-islam-class-5.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Mera Piyara Deen-e-Islam <br> Class 5</span>
                    <div class="vertical-bottom">
                        <span class="badge islamiat">Islamiat</span>
                        <div class="mute-text">
                            <span>PDF • 342 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/mera-piyara-deen-e-islam-class-6.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Mera Piyara Deen-e-Islam <br> Class 6</span>
                    <div class="vertical-bottom">
                        <span class="badge islamiat">Islamiat</span>
                        <div class="mute-text">
                            <span>PDF • 342 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/mera-piyara-deen-e-islam-class-7.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Mera Piyara Deen-e-Islam <br> Class 7</span>
                    <div class="vertical-bottom">
                        <span class="badge islamiat">Islamiat</span>
                        <div class="mute-text">
                            <span>PDF • 342 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/mera-piyara-deen-e-islam-class-8.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Mera Piyara Deen-e-Islam <br> Class 8</span>
                    <div class="vertical-bottom">
                        <span class="badge islamiat">Islamiat</span>
                        <div class="mute-text">
                            <span>PDF • 342 pages</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Islamiat (Lazmi) Books -->
        <div class="item-title mt-5">
            <span>Islamiat (Lazmi)</span>
        </div>
        <div class="boxes mt-5">
            <a href="#" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/islamiat-lazmi-class-3.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Islamiat Lazmi <br> Class 3 TG</span>
                    <div class="vertical-bottom">
                        <span class="badge islamiat">Islamiat</span>
                        <div class="mute-text">
                            <span>PDF • 342 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/islamiat-lazmi-class-4.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Islamiat Lazmi <br> Class 4 TG</span>
                    <div class="vertical-bottom">
                        <span class="badge islamiat">Islamiat</span>
                        <div class="mute-text">
                            <span>PDF • 342 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/islamiat-lazmi-class-5.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Islamiat Lazmi <br> Class 5 TG</span>
                    <div class="vertical-bottom">
                        <span class="badge islamiat">Islamiat</span>
                        <div class="mute-text">
                            <span>PDF • 342 pages</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endsection

@section('script')
@endsection
