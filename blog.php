<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Gembyte | Home</title>
  <link rel="stylesheet" href="css/foundation.css" />
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
      <li><a href="index.php">Home</a></li>
      <li><a href="blog.php">Blog</a></li>
      <li><a href="#" data-reveal-id="demo" data-reveal>How It Works</a></li>
    </ul>
  </section>
</nav>

<div class="row">
	<div class="large-12 columns">
		HI
	</div>
</div>
<div class="row">
	<div class="large-12 columns">
		<div class="large-8 columns">	
			<?php
				
				$template = "Mainstory";
				$number = 1;
				include("./cutenews/show_news.php");
			?>
			<div class="row">
				<div class="large-12 columns" style="float:left;">
					<?php
						if($_GET['id']===null){;
							$number = 0;
							$start_from = 1;
							$template = "2Columns";
							include("./cutenews/show_news.php");
						}		
						
						
					?>
				</div>
				
				
			</div>
		</div>
		<div class="large-4 columns">
			Twitter
		</div>
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
    <a href="#" class="button">VIDEO</a>
  </div>
</div>

<script src="js/vendor/jquery.js"></script>
<script src="js/foundation.min.js"></script>
<script>
  $(document).foundation();
</script>


</body>
</html>
