<?php /* Template Name: Template - Careers */ ?>

<?php include("header.php"); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<?php # include("inc/top-banner.php") ?>

	<section class="banner banner--menu">
        
    </section>

	<section class="row">
        <h1 class="page-title text-center has-border">Careers</h1>
		<?php the_content(); ?>
	</section>

<?php endwhile; ?>

<?php include("footer.php"); ?>