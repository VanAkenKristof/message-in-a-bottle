<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://use.typekit.net/osv7jdk.css">
  <link rel="stylesheet" href="/css/style.css">
  <title>Message in a bottle</title>
</head>
<body>
<img id="water" src="/assets/water-png-10.png">

<img id="Logo" src="/assets/Logo White.svg" alt="Message in a bottle - Logo">
<div class="steps">
  <p>1. Steek uw fles in de box</p>
  <p>2. Bekijk je bijdrage</p>
  <p>3. Neem een foto</p>
  <p class="currentStep">4. Bekijk je foto op</p>
</div>

<div id="polaroid">
  <img src="{{ 'storage/photobooth/' . $photo->name . '.jpg' }}">
  <p>{{ Carbon\Carbon::parse($photo->created_at)->format('d-m-Y H:m') }}u</p>
</div>

<h1 id="website">messageinabottle.be</h1>
<a id="done" href="{{ route('photobooth.step1') }}">Done</a>
</body>
</html>
