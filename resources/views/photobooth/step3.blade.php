<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Message in a bottle</title>

        <style type="text/css">
            html, body {
                height: 100%;
                margin: 0;
                overflow: hidden;
            }
        </style>

    </head>
    <body>

    <div id="camera" style="width:1920px; height:1080px;"></div>
    {{--<img id="fotoLogo" src="/assets/Logo-NoBorder.svg">--}}
    {{--<img id="lookHere" src="/assets/Smile here.svg">--}}

    <p id="countdown" style="position: absolute; color: #fff; font-size: 400px; left: 870px; top: -100px;">5</p>

    <script src="https://code.jquery.com/jquery-3.3.1.js"
            integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
            crossorigin="anonymous"></script>

    <script src="/js/webcam.js"></script>
    <script src="/js/step3.js?v1"></script>
    </body>
</html>
