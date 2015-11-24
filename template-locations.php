<?php /* Template Name: Template - Locations */ ?>

<?php include("header.php"); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<a href="/" class="logo-v2">Rio Brazilian Steakhouse</a>

	<section class="content-block">
		<div class="wrapper">
			<a class="button white button-locations" href="/">Vancouver</a>
			<a class="button white button-locations" href="/coquitlam">Coquitlam</a>
		</div>
	</section>

<?php endwhile; ?>

<?php include("footer.php"); ?>
