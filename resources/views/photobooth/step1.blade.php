<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://use.typekit.net/osv7jdk.css">
    <link rel="stylesheet" href="/flickity/flickity.css" media="screen">
    <link rel="stylesheet" href="/css/style.css">
    <title>Message in a bottle</title>
  </head>
  <body>
    <img id="water" src="/assets/water-png-10.png">

    <a href="{{ route('photobooth.step2') }}">
      <img id="Logo" src="/assets/Logo-NoBorder.svg" alt="Message in a bottle - Logo">
    </a>

    <div class="steps">
      <p class="currentStep">1. Steek uw fles in de box</p>
      <p>2. Bekijk je bijdrage</p>
      <p>3. Neem een foto</p>
      <p>4. Bekijk je foto op messageinabottle.be</p>
    </div>

    <div class="recentPhotos">
      <h3>Recent genomen foto's</h3>
      <div class="main-carousel" data-flickity='{ "autoPlay": true, "wrapAround": true, "setGallerySize": false, "selectedAttraction": 0.01, "friction": 0.20 }'>

          @foreach($photos as $photo)

          <div class="carousel-cell">
              <img src="{{ "/storage/photobooth/" . $photo->name  . ".jpg"}}">
              <p>{{ Carbon\Carbon::parse($photo->created_at)->format('d-m-Y H:m') }}u</p>
          </div>

          @endforeach

      </div>
    </div>
    <script type="text/javascript" src="/flickity/flickity-docs.min.js"></script>
  </body>
</html>
