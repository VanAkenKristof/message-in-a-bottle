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
  <p class="currentStep">2. Bekijk je bijdrage</p>
  <p>3. Neem een foto</p>
  <p>4. Bekijk je foto op messageinabottle.be</p>
</div>

<h1 id="proficiat">Proficiat! u hebt een <img src="/assets/fish.svg"> gered</h1>
<h2 id="tekenen">Petitie ondertekenen?</h2>
<p id="akkoord">Ik ga akkoord om een foto te nemen</p>
<a id="ja" href="{{ route('photobooth.step3') }}">Ja</a>
<a id="nee" href="{{ route('photobooth.step1') }}">Nee</a>
</body>
</html>
