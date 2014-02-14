<?php
	ob_start (); // Buffer output
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><!--TITLE--></title>
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
      <li><a href="index.php">Home</a></li>
      <li><a href="blog.php">Blog</a></li>
      <li><a href="#" data-reveal-id="demo" data-reveal>How It Works</a></li>
    </ul>
  </section>
</nav>

<div class="row">
	<div class="large-12 columns">
		<div class="large-8 columns">
      <!-- Main story -->
			<?php
				$header_title="Gemybte|Blog";
				
				require_once 'cutenews/cn_api.php';
				$entry = cn_api_get_entry();
				if ($entry['t'])
				{
					 // ........
					 $header_title += $entry['t'];

				}
				
				$template = "Mainstory";
				$number = 1;
				include("cutenews/show_news.php");
			?>
      <br />

      <!-- Two story columns -->
      <div class="row">
        <?php
          if(!isset($_GET['id'])){
            $number = 2;
            $start_from = 1;
            $template = "2Columns";
            include("cutenews/show_news.php");
          }
        ?>
      </div>
		</div>

    <!-- Twitter integration -->
		<div class="large-4 columns">
			Twitter
		</div>
	</div>
</div>

<script src="js/vendor/jquery.js"></script>
<script src="js/foundation.min.js"></script>
<script>
  $(document).foundation();
</script>


</body>
<?php
	$pageContents = ob_get_contents (); 
	ob_end_clean (); 
	echo str_replace ('<!--TITLE-->', $header_title, $pageContents);
?>
</html>
