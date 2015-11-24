<?php /* Template Name: Template - About */ ?>

<?php include("header.php"); ?>

<div class="main-content">
		
	<?php while ( have_posts() ) : the_post(); ?>

		<?php # include("inc/top-banner.php") ?>

		<section class="banner banner--menu">
        
    	</section>

		<?php # SECTION - ABOUT US ?>

		<section class="row" >
			<?php the_content(); ?>
		</section>
		
		<section class="banner banner--menu">
        
    	</section>


	<?php endwhile; ?>
</div>

<?php include("footer.php"); ?>