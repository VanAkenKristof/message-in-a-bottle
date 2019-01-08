<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://use.typekit.net/osv7jdk.css">
    <link rel="stylesheet" href="/css/website/style.css">
    <title>Message in a bottle</title>
  </head>
  <body>
    <div id="aboutBackground" class="background overlay">
      <div id="top">
        <p>About</p>
      </div>
      <div class="aboutTxt">
        <p>Bedankt om deel te nemen en de petitie te ondertekenen!</p><br>
        <p>Hier kan je stemmen op jouw favoriete foto en misschien win je zelf wel!</p><br>
        <p>Laten we samen de waterorganismen helpen met hun verder bestaan.</p>
      </div>

      <a id="nextPage" href="{{ route('website.photos') }}">
        <img src="/assets/Next.svg">
        <p>Helden</p>
      </a>
      <a id="prevPage" href="{{ route('website.home') }}">
        <img src="/assets/Previous.svg">
        <p>Home</p>
      </a>
      <footer>
        <img src="/assets/Copyright.svg" alt="Copyrighted">
        <p>Message in a Bottle - <a href="#">bezoek ons op Facebook</a></p>
      </footer>
    </div>
  </body>
</html>
