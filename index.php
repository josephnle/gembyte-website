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

<?php require "sect/nav.php"; ?>


<div id="headwrap">
  <div class="row">
    <div class="small-12 medium-5 columns">
      <ul data-orbit>
        <li data-orbit-slide="headline-1">
          <div>
            <img src="img/iphone_blank_slant.png" alt="slide 1" />
          </div>
        </li>
        <li data-orbit-slide="headline-2">
          <div>
            <img src="img/iphone_blank_slant.png" alt="slide 2" />
          </div>
        </li>
        <li data-orbit-slide="headline-3">
          <div>
            <img src="img/iphone_blank_slant.png" alt="slide 3" />
          </div>
        </li>
        <li data-orbit-slide="headline-4">
          <div>
            <img src="img/iphone_blank_slant.png" alt="slide 4" />
          </div>
        </li>
      </ul>
    </div>
    <div id="bullets" class="small-12 medium-2 columns show-for-medium-up">
    </div>
    <div class="small-12 medium-5 columns">
      <div class="small-12 medium-6 columns">
        <img src="img/iphone_slant_logo.png" />
      </div>
      <div class="small-12 medium-6 columns">
        <h3><span style="color: #0292B6;">GEM</span><span style="color: #e400ff;">BYTE</span></h3>
        <p class="blue">A global currency for all your games. Play one game and earn rewards for another.</p>
        <a class="button small" href="#">LEARN MORE</a>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="small-12 medium-5 medium-offset-2 columns">
    <h3 class="blue">BLOG</h3>
    <p>Stay up to date with development</p>
    <a href="#" class="button">LEARN MORE</a>
  </div>
  <div class="small-12 medium-5 columns end">
    <h3 class="yellow">HOW IT WORKS</h3>
    <p>See a demo of how our product works</p>
    <a href="#" data-reveal-id="demo" data-reveal class="button yellow">VIDEO</a>
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
<script src="js/foundation/foundation.topbar.js"></script>
<script>
  $(document).foundation();
</script>
</body>
</html>
