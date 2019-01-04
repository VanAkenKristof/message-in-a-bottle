<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://use.typekit.net/osv7jdk.css">
    <link rel="stylesheet" href="/css/website/style.css">
    <title>Message in a bottle</title>
  </head>
  <body>
    <div id="searchBackground" class="background overlay">
      <div id="top">
        <p>Uw foto</p>
        <form action="search.blade.php" method="get">
          <input type="text" name="qry" placeholder="Zoek uw foto">
          <input type="submit" value="">
        </form>
      </div>

      <div class="bigPolaroid">
        <img src="/assets/photo.png" alt="Your photo">
        <input type="text" name="time" value="04/01/2019 - 10:38u">
      </div>

      <form id="photoForm" action="personalised.blade.php" method="post">
        <img id="personBubble" src="/assets/Person-bubble.svg">
        <h3>Personaliseer jouw foto</h3>
        <input type="text" name="name" placeholder="Je naam">
        <input type="submit" value="Stel in">
        <a class="cancel" href="home.blade.php">Annuleren</a>
        <div id="socialLinks">
          <a href="#"><img src="/assets/social-facebook-outline.svg"></a>
          <a href="#"><img src="/assets/social-twitter-outline.svg"></a>
          <a href="#"><img src="/assets/social-linkedin-outline.svg"></a>
        </div>
      </form>


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
