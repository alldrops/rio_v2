<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta name="format-detection" content="telephone=no">
	<script src="<?php echo get_template_directory_uri(); ?>/js/libs/modernizr.js"></script>
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">
	<title><?php wp_title( '| Rio Brazilian Steakhouse', true, 'right' ); ?></title>
	<?php wp_head(); ?>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/libs/jquery-1.11.0.min.js"></script>

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/stylesheets/owl.carousel.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/stylesheets/owl.theme.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/stylesheets/datepickr.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/app.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body>
	<div class="off-canvas-wrap" data-offcanvas>
		<main class="inner-wrap">
			<?php include("inc/mobile-navigation.php") ?>
			<?php include('inc/site-header.php') ?>