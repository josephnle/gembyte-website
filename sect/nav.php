<nav class="top-bar" data-topbar>
  <ul class="title-area">
    <li class="name">
        <img class="show-for-small-only" src="img/gembyte_icon.png"/>
    </li>
    <li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
  </ul>

  <!-- Center logo -->
  <div id="logo" class="show-for-large-up text-center">
    <img src="img/gembyte_icon.png"/>
  </div>

  <section class="top-bar-section">

    <!-- Left Nav Section -->
    <ul class="left">
      <li><a href="index.php">Home</a></li>
      <li><a href="blog.php">Blog</a></li>
      <li><a href="#" data-reveal-id="demo" data-reveal>How It Works</a></li>
    </ul>

    <!-- Right Nav Section -->
    <ul class="right">
      <li id="join_button" class="show-for-medium-up">
        <a href="#" data-reveal-id="join" data-reveal class="button round secondary expand">Join</a>
      </li>
      <li class="show-for-small-only">
        <a href="#" data-reveal-id="join" data-reveal>Join</a>
      </li>
    </ul>
  </section>
</nav>

<div id="demo" class="reveal-modal medium" data-reveal>
  <h2>How it works</h2>
  <div class="flex-video">
    <iframe width="420" height="315" src="//www.youtube.com/embed/aiBt44rrslw" frameborder="0" allowfullscreen></iframe>
  </div>
  <a class="close-reveal-modal">x</a>
</div>

<div id="join" class="reveal-modal tiny" data-reveal>
  <h2>Join us!</h2>
  <p class="lead">Send us your email and we'll send you updates as they come.</p>
  <form data-abide>
    <div class="email-field">
      <label>Email <small>required</small>
        <input type="email" placeholder="john@johndoe.com" required>
      </label>
      <small class="error">An email address is required.</small>
    </div>
    <button class="right small" type="submit">Submit</button>
  </form>

  <a class="close-reveal-modal">x</a>
</div>