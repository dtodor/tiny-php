<?php

require_once(dirname(__FILE__) . "/functions.php");

function makeHeader() {
	global $title;
	global $enqueuedStylesheets;
	global $mainNavigationItems;
	global $enqueuedScripts;

	$headerScripts = $enqueuedScripts[false];
?>

<!doctype html>  
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ --> 
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title><?php echo $title; ?></title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!--  Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width; initial-scale=1.0">

  <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">

  <!-- CSS : implied media="all" -->
  <link rel="stylesheet" href="css/style.css?v=1">
	<?php foreach ($enqueuedStylesheets as $stylesheet) : ?>
	<link rel="stylesheet" href="<?php echo $stylesheet; ?>?v=1">
	<?php endforeach; ?>

  <!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
  <script src="js/modernizr-1.5.min.js"></script>
	<?php foreach ($headerScripts as $script) : ?>
  <script src="<?php echo $script; ?>"></script>
	<?php endforeach; ?>
</head>

<body>

  <div id="container">
    <header>
			<ul>
				<?php foreach ($mainNavigationItems as $navItemTitle => $navItemUrl) : ?>
				<li><a href="<?php echo $navItemUrl; ?>" title="<?php echo $navItemTitle; ?>"><?php echo $navItemTitle; ?></a></li>
				<?php endforeach; ?>
			</ul>
    </header>
    
<?php
}
?>
