<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://use.typekit.net/osv7jdk.css">
    <link rel="stylesheet" href="/css/website/style.css">
    <title>Message in a bottle</title>
  </head>
  <body>
    <div id="aboutBackground" class="background overlay"></div>
    <div id="about">
      <div id="top">
        <p>About</p>
        <a href="/home"><img src="/assets/Logo-NoBorder.svg" alt="Message in a bottle Logo"></a>
      </div>
      <div class="aboutTxt">
        <p>Message in a bottle is een project gemaakt door vier studenten Multimedia Technology.</p><br>
        <p>Met dit project willen we met een promoteam mensen bewustmaken, dat plastic beter gerecycleerd moet worden. Dit doen we door een petitie te starten die ondertekend wordt met foto’s. Hiervoor hebben we een photobooth gecreëerd, waarin mensen een leeg plastiek flesje kunnen weggooien en de petitie kunnen ondertekenen door een foto in te zenden.</p><br>
        <p>Op deze manier willen we mensen op een fijne manier aanspreken, in plaats van een lastige petitie te maken waarbij je je mailadres en naam telkens moet invullen. Want laat ons eerlijk zijn, who doesn’t love to take a picture?</p><br>
        <p>Dus</p>
        <ul>
          <ol>1.	Vind één van onze photobooths</ol>
          <ol>2.	Gooi een leeg plastieken flesje in de doos</ol>
          <ol>3.	Onderteken de petitie</ol>
          <ol>4.	Keep the oceaan clean!</ol>
          <ol>5.	Thank you so much!</ol>
        </ul><br>
        <p>Ons team bedankt jullie voor jullie inzet!</p><br>
        <p>Indy, Ian, Kristof en Vincent</p><br>
        <div class="social">
          <a href="https://www.facebook.com/Message-in-a-bottle-911102819093545/">
            <img src="/assets/social-facebook-outline.svg" alt="Message in a bottle on Facebook">
          </a>
          <a href="https://twitter.com/MIAB_Belgium/">
            <img src="/assets/social-twitter-outline.svg" alt="Message in a bottle on Twitter">
          </a>
          <a href="https://www.instagram.com/messageinabottlebe/">
            <img src="/assets/social-instagram-outline.svg" alt="Message in a bottle on Instagram">
          </a>
        </div>
      </div>

      <a id="nextPage" href="{{ route('website.photos') }}">
        <img src="/assets/Next.svg">
        <p>Helden</p>
      </a>
      <a id="prevPage" href="{{ route('website.home') }}">
        <img src="/assets/Previous.svg">
        <p>Home</p>
      </a>
      @include('website._footer')
    </div>
  </body>
</html>
