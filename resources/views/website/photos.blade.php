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
        <form action="search.blade.php" method="get">
          <input type="text" name="qry" placeholder="Zoek uw foto">
          <input type="submit" value="">
        </form>
      </div>

      <div class="voteCount">
        <h3>134 stemmen</h3>
        <img src="/assets/thumbsup.svg">
      </div>

      <div class="mediumPolaroid">
        <img src="/assets/photo.png" alt="Your photo">
        <input type="text" name="time" value="04/01/2019 - 10:38u">
      </div>

      <h3 id="vote"><a href="{{ route('website.vote') }}"><img id="personBubble" src="/assets/Check.svg">Stem op deze foto</a></h3>


      <a id="prevPage" href="{{ route('website.about') }}">
        <img src="/assets/Previous.svg">
        <p>Over</p>
      </a>
      <footer>
        <img src="/assets/Copyright.svg" alt="Copyrighted">
        <p>Message in a Bottle - <a href="#">bezoek ons op Facebook</a></p>
      </footer>
    </div>
  </body>
</html>
