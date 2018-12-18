<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Message in a Bottle</title>

    </head>
    <body>

    <div id="camera" style="width:800px; height:600px;"></div>
    <div id="image"></div>
    <div id="thingy"></div>
    <p id="snapshot">Take Snapshot</p>


    <script src="https://code.jquery.com/jquery-3.3.1.js"
            integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
            crossorigin="anonymous"></script>

    <script src="/js/webcam.js"></script>
    <script src="/js/step3.js"></script>
    </body>
</html>
