<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Gembyte | Home</title>
  <link rel="stylesheet" href="css/foundation.css" />
  <link rel="stylesheet" href="css/gembyte.css" />
  <script src="js/vendor/modernizr.js"></script>
</head>
<body>

<nav class="top-bar" data-topbar>
  <ul class="title-area">
    <li class="name">
      <h1 class="show-for-small-only"><a href="#">Gembyte</a></h1>
    </li>
    <li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
  </ul>

  <section class="top-bar-section">
    <!-- Right Nav Section -->
    <ul class="right">
      <li class="active"><a href="#">Join</a></li>
    </ul>

    <!-- Left Nav Section -->
    <ul class="left">
      <li><a href="#">Home</a></li>
      <li><a href="#">Blog</a></li>
      <li><a href="#">How It Works</a></li>
    </ul>
  </section>
</nav>

<div id="headwrap">
  <div class="row">
    <div class="small-12 medium-5 columns">
      <ul data-orbit>
        <li data-orbit-slide="headline-1">
          <div>
            <h2>Headline 1</h2>
            <h3>Subheadline</h3>
          </div>
        </li>
        <li data-orbit-slide="headline-2">
          <div>
            <h2>Headline 2</h2>
            <h3>Subheadline</h3>
          </div>
        </li>
        <li data-orbit-slide="headline-3">
          <div>
            <h2>Headline 3</h2>
            <h3>Subheadline</h3>
          </div>
        </li>
      </ul>
    </div>
    <div id="bullets" class="small-12 medium-2 columns show-for-medium-up">
    </div>
    <div class="small-12 medium-5 columns">Right</div>
  </div>
</div>

<div class="row">
  <div class="small-12 large-6 columns">
    <h3>BLOG</h3>
    <p>Stay up to date with development</p>
    <a href="#" class="button">LEARN MORE</a>
  </div>
  <div class="small-12 large-6 columns">
    <h3>HOW IT WORKS</h3>
    <p>See a demo of how our product works</p>
    <a href="#" data-reveal-id="demo" data-reveal class="button">VIDEO</a>
  </div>
</div>

<div id="demo" class="reveal-modal medium" data-reveal>
  <h2>How it works</h2>
  <div class="flex-video">
    <iframe width="420" height="315" src="//www.youtube.com/embed/aiBt44rrslw" frameborder="0" allowfullscreen></iframe>
  </div>
  <a class="close-reveal-modal">&#215;</a>
</div>

<script src="js/vendor/jquery.js"></script>
<script src="js/foundation.min.js"></script>
<script src="js/foundation/foundation.orbit.js"></script>
<script src="js/foundation/foundation.reveal.js"></script>
<script>
  $(document).foundation();
</script>
</body>
</html>
