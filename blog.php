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


<?php require "sect/nav.php"; ?>


<!-- Page header -->
<div id="header">
  <div class="row">
    <div class="small-12 columns">
      <h1><span style="color: #0292B6;">GEM</span><span style="color: #e400ff;">BYTE</span></h1>
    </div>
  </div>
</div>

<div class="row">
	<div class="large-12 columns">
		<div class="large-8 columns">
      <!-- Main story -->
			<?php
				$header_title="Gembyte | Blog";
				
				require_once 'cutenews/cn_api.php';
				$entry = cn_api_get_entry();
				if ($entry['t'])
				{
					 // ........
					 $header_title = "Gembyte | " . $entry['t'];

					 //print_r($entry);
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
<script src="js/foundation/foundation.topbar.js"></script>
<script src="js/foundation/foundation.abide.js"></script>
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
