<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://use.typekit.net/osv7jdk.css">
    <link rel="stylesheet" href="/css/website/style.css">
    <title>Message in a bottle</title>
  </head>
  <body>
    <div id="voteBackground" class="background overlay">
      <div id="top">
        <p>Helden</p>
        <form action="search.blade.php" method="get">
          <input type="text" name="qry" placeholder="Zoek uw foto">
          <input type="submit" value="">
        </form>
      </div>

      <div class="bigPolaroid">
        <img src="/assets/photo.png" alt="Your photo">
        <input type="text" name="time" value="04/01/2019 - 10:38u">
      </div>

      <form id="photoForm" action="voted.blade.php" method="post">
        <img id="personBubble" src="/assets/Person-bubble.svg">
        <h3>Ben je zeker dat je op deze foto wil stemmen?</h3>
        <input type="text" name="mail" placeholder="E-mailadres">
        <input type="submit" value="Stem">
        <a class="cancel" href="photos.blade.php">Annuleren</a>
        <br><br><p>Je kan maar 1 keer stemmen</p>
        <div id="socialLinks">
          <a href="#"><img src="/assets/social-facebook-outline.svg"></a>
          <a href="#"><img src="/assets/social-twitter-outline.svg"></a>
          <a href="#"><img src="/assets/social-linkedin-outline.svg"></a>
        </div>
      </form>


      <a id="prevPage" href="{{ route('website.about') }}">
        <img src="/assets/Previous.svg">
        <p>Over</p>
      </a>
      @include('website._footer')
    </div>
  </body>
</html>
