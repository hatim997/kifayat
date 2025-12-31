@extends('dashboard.layouts.master')

@section('title', __('Uraan Urdu Chapter Details'))

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard/student-audios.css') }}" />
    <style>
        .chapter-container {
            display: flex;
            gap: 20px;
            height: 80vh;
            margin-top: 20px;
        }

        /* Sidebar */
        .chapter-sidebar {
            width: 25%;
            padding: 15px;
            background: #f9f9f9;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow-y: auto;
        }

        .chapter-sidebar a {
            display: block;
            padding: 12px 15px;
            margin-bottom: 10px;
            border-radius: 10px;
            background: linear-gradient(90deg, #60A5FA, #A855F7);
            color: white;
            font-weight: bold;
            text-decoration: none;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .chapter-sidebar a:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .chapter-sidebar a.active {
            background: linear-gradient(90deg, #F59E0B, #EF4444);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
        }

        /* Right Content Area */
        .chapter-content-wrapper {
            width: 100%;
        }
        .chapter-content {
            width: 100%;
            padding: 20px;
            background: #ffffff;
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            /* Prevent overflow */
        }

        .chapter-content.worksheet-mode {
            display: block !important;
            justify-content: unset !important;
            align-items: unset !important;
            overflow: visible !important;
            background: none;
            border-radius: 10px;
            box-shadow: none;
            padding: 10px;
        }

        .swf-container {
            width: 100%;
            max-width: 900px;
            height: 100%;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        /* Scrollbar for sidebar */
        .chapter-sidebar::-webkit-scrollbar {
            width: 8px;
        }

        .chapter-sidebar::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }

        .chapter-sidebar::-webkit-scrollbar-thumb {
            background: #c1c1c1;
            border-radius: 10px;
        }

        .chapter-sidebar::-webkit-scrollbar-thumb:hover {
            background: #a1a1a1;
        }

        .chapter-content img {
            max-width: 100%;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        /* Mobile Responsive */
        @media (max-width: 992px) {
            .chapter-container {
                flex-direction: column;
                /* Stack sidebar and content */
                height: auto;
            }

            .chapter-sidebar {
                width: 100%;
                max-height: 250px;
                /* Allow scrolling if too tall */
                margin-bottom: 15px;
            }

            .chapter-content {
                width: 100%;
                height: auto;
                padding: 15px;
            }

            .swf-container {
                max-width: 100%;
                height: 400px;
                /* Mobile-friendly height */
            }
        }

        @media (max-width: 576px) {
            .chapter-sidebar a {
                padding: 10px 12px;
                font-size: 14px;
            }

            .chapter-content {
                padding: 10px;
            }

            .swf-container {
                height: 300px;
                /* Small phone height */
            }
        }
    </style>
@endsection

@section('backbutton')
    <a href="{{ route('student.uraan-urdu-series') }}" class="btn btn-back">
        <i class="fa-solid fa-arrow-left"></i> <span>BACK</span>
    </a>
@endsection

@section('content')
    <div class="chapter-container">
        <!-- Sidebar -->
        <div class="chapter-sidebar">
            @if ($classChapter && $classChapter->chapterContents->count() > 0)
                @foreach ($classChapter->chapterContents as $content)
                    <a href="#" class="chapter-link" data-url="{{ asset($content->content_url) }}">
                        {{ $content->title }}
                    </a>
                @endforeach
            @endif

            @if (!empty($classChapter->worksheet))
                <a href="#" class="chapter-worksheet-link" data-url="{{ asset($classChapter->worksheet) }}">
                    Student Worksheet
                </a>
            @endif

            @if ((!$classChapter || $classChapter->chapterContents->count() == 0) && empty($classChapter->worksheet))
                <p>No content found <i class="fa-solid fa-circle-exclamation"></i></p>
            @endif
        </div>

        <!-- Content Area -->
        <div class="chapter-content-wrapper">
            <div class="worksheet-toolbar" id="worksheetToolbar" style="display:none; margin:10px 30px; text-align: right;">
                <button type="button" class="btn btn-primary btn-sm" id="printWorksheetBtn">
                    <i class="fa fa-print"></i> Print
                </button>
            </div>

            <div class="chapter-content" id="chapterContentArea">
                <p>Select a content from the left sidebar to view here.</p>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="https://unpkg.com/@ruffle-rs/ruffle"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const links = document.querySelectorAll('.chapter-link');
            const worksheetLinks = document.querySelectorAll('.chapter-worksheet-link');
            const contentArea = document.getElementById('chapterContentArea');

            const ruffle = window.RufflePlayer?.newest();

            function loadSWF(url, linkElement) {
                contentArea.classList.remove('worksheet-mode');

                // Hide print toolbar
                document.getElementById('worksheetToolbar').style.display = 'none';

                links.forEach(l => l.classList.remove('active'));
                worksheetLinks.forEach(l => l.classList.remove('active'));
                linkElement.classList.add('active');

                contentArea.innerHTML = '';

                const swfDiv = document.createElement('div');
                swfDiv.classList.add('swf-container');
                contentArea.appendChild(swfDiv);

                const player = ruffle.createPlayer();
                player.style.width = '100%';
                player.style.height = '100%';
                swfDiv.appendChild(player);

                try {
                    player.load(url);
                } catch (e) {
                    console.error("Failed to load SWF:", e);
                    contentArea.innerHTML = "<p>Failed to load this content.</p>";
                }
            }


            function loadWorksheet(url, linkElement) {
                contentArea.classList.add('worksheet-mode');

                links.forEach(l => l.classList.remove('active'));
                worksheetLinks.forEach(l => l.classList.remove('active'));

                linkElement.classList.add('active');

                contentArea.innerHTML = '';

                // Show print toolbar
                document.getElementById('worksheetToolbar').style.display = 'block';

                const iframe = document.createElement('iframe');
                iframe.src = url + '#toolbar=0&navpanes=0&scrollbar=0';
                iframe.style.width = '100%';
                iframe.style.height = '100%';
                iframe.style.minHeight = '650px';
                iframe.style.border = 'none';
                iframe.style.borderRadius = '10px';
                iframe.style.boxShadow = '0 4px 10px rgba(0,0,0,0.2)';
                iframe.setAttribute('loading', 'lazy');
                iframe.id = 'worksheetIframe';

                contentArea.appendChild(iframe);
            }



            // SWF click handler
            links.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const url = this.dataset.url;
                    if (url) loadSWF(url, this);
                });
            });

            // Worksheet click handler
            worksheetLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const url = this.dataset.url;
                    if (url) loadWorksheet(url, this);
                });
            });

            // Auto-load first content (SWF or worksheet)
            if (links.length > 0) {
                loadSWF(links[0].dataset.url, links[0]);
            } else if (worksheetLinks.length > 0) {
                loadWorksheet(worksheetLinks[0].dataset.url, worksheetLinks[0]);
            }

            document.getElementById('printWorksheetBtn').addEventListener('click', function () {
                const iframe = document.getElementById('worksheetIframe');
                if (iframe && iframe.contentWindow) {
                    iframe.contentWindow.focus();
                    iframe.contentWindow.print();
                }
            });

        });
    </script>
@endsection
