<?php /* Template Name: Template - Home */ ?>

<?php include("header.php"); ?>

		
	<?php while ( have_posts() ) : the_post(); ?>

		<?php include("inc/top-banner.php") ?>

		<!-- <section class="banner banner--menu" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/images/banner-menu.jpg">
			
		</section> -->

		<section class="intro-home row">
			<h1 class="page-title text-center has-border">The best Brazilian Steakhouse in Vancouver</h1>
			<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla euismod ex dolor, eget venenatis ipsum porttitor in. Nulla nisi mi, rutrum at le. Lorem ipsum dolor sit amet, aconsectetur adipiscing elit. Nulla nisi mi, rutrum at leo ac, elementum tincidunt massa. Donec rhoncus non ante non vulputate. </p>
		</section>

		<?php # SECTION - MENU ?>
		
		<section class="banner banner--middle banner--menu" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/images/image_1.jpg">
			
		</section>

		<!-- Reservation widget -->

		<?php include("inc/reservation.php") ?>
		
		<?php # SECTION - ABOUT US ?>

		<?php $full_width_section_image = get_field('full_width_section_image'); ?>
		<?php $full_width_section_text = get_field('full_width_section_text'); ?>

		<?php if(!empty($full_width_section_image)) { ?>
			<!-- <section class="content-block full-width dark-overlay" style="background: url('<?php $print_image = wp_get_attachment_image_src( $full_width_section_image, 'full' ); echo $print_image[0]; ?>') no-repeat center top;">
				<div class="row">
					<div class="inner-wrapper">
						<?php if(!empty($full_width_section_text)) { ?>
							<?php echo $full_width_section_text ?>
							<a href="about" class="button white left">READ MORE ABOUT US</a>
						<?php } ?>
					</div>
				</div>
			</section> -->
		<?php } ?>
	<?php endwhile; ?>

	<section class="banner banner--middle banner--menu" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/images/image_2.jpg">
			
	</section>

<?php include("footer.php"); ?>
