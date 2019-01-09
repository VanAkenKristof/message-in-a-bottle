<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://use.typekit.net/osv7jdk.css">
    <link rel="stylesheet" href="/css/website/style.css">
    <title>Message in a bottle</title>
</head>
<body>
<div id="photosBackground" class="background overlay">
    <div id="top">
        <p>Helden</p>
        <a href="/home"><img src="/assets/Logo-NoBorder.svg" alt="Message in a bottle Logo"></a>
    </div>

    <div id="photoList">
        @foreach($photos as $photo)
            <div class="smallPolaroid">
                <img src="{{ 'storage/photobooth/' . $photo->name . '.jpg' }}">
                <p>{{ Carbon\Carbon::parse($photo->created_at)->format('d-m-Y H:i') }}u</p>
            </div>
        @endforeach
    </div>

    <div id="links">
        {{ $photos->links() }}
    </div>

    <a id="prevPage" href="/about">
        <img src="/assets/Previous.svg">
        <p>Over</p>
    </a>
    @include('website._footer')
</div>
</body>
</html>
