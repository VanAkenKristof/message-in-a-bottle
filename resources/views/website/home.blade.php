<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://use.typekit.net/osv7jdk.css">
    <link rel="stylesheet" href="/css/website/style.css">
    <title>Message in a bottle</title>
  </head>
  <body>
    <div id="homeBackground" class="background overlay20">
      <div id="top">
        <p>Home</p>
      </div>

      <h1>Message in a Bottle</h1>
      <h3>Make earth great again</h3>

      <a id="nextPage" href="{{ route('website.about') }}">
        <img src="/assets/Next.svg">
        <p>Over</p>
      </a>
      @include('website._footer')
    </div>
  </body>
</html>
