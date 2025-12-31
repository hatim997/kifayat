<!DOCTYPE html>
<html>

<head>
    <title>Uraan Urdu Preview</title>
    <script src="https://unpkg.com/@ruffle-rs/ruffle"></script>
    @include('frontend.layouts.css')
    <style>
        * {
            /* margin: 0;
            padding: 0; */
            box-sizing: border-box;
        }

        body,
        html {
            height: 100%;
            overflow: hidden;
        }

        /* Fullscreen player */
        .player-container {
            width: 100%;
            height: 100%;
            position: relative;
        }

        .player {
            width: 100%;
            height: 100%;
            border: none;
            background: #fff;
        }

        /* Back button floating */
        .btn-back {
            border: 1px solid #009F9F;
            color: #009F9F;
            border-radius: 50px;
            padding: 4px 20px;
            width: 100px;
            font-size: 12px;
            background-color: transparent;
            display: flex;
            justify-content: space-evenly;
            align-items: center;
        }

        .btn-back:hover {
            background-color: #009F9F;
            color: #fff !important;
        }
    </style>
</head>

<body>

    <div class="player-container">
        {{-- <a href="{{ route('student.animations') }}" class="btn btn-back">
            <i class="fa-solid fa-arrow-left"></i> <span>BACK</span>
        </a> --}}

        <embed src="{{ asset($file) }}" class="player" />
    </div>

</body>

</html>
