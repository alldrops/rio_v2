<?php /* Template Name: Template - Menus */ ?>

<?php include("header.php"); ?>

		
<?php while ( have_posts() ) : the_post(); ?>

	<?php # include("inc/top-banner.php") ?>

	<?php # SECTION - ABOUT US ?>

	<section class="row">
		<h1 class="page-title text-center has-border">Menu</h1>
		<?php the_content(); ?>
	</section>

	<?php # SECTION - MENU ITEMS ?>

	<section class="listings">
		<div class="row">
			<div class="columns listings__tile small-12 medium-6 large-4">
				<img class="listings__image" src="https://static.wixstatic.com/media/130ead_d0956beb04f7464b917c3b1753ba5764.jpg_srz_p_308_205_75_22_0.5_1.2_0_jpg_srz" alt="">
				<span class="listings__title bold">Item title blabla</span>
				<span class="listings__subtitle">Item subtitle blabla</span>
			</div>
			<div class="columns listings__tile small-12 medium-6 large-4">
				<img class="listings__image" src="https://static.wixstatic.com/media/130ead_d0956beb04f7464b917c3b1753ba5764.jpg_srz_p_308_205_75_22_0.5_1.2_0_jpg_srz" alt="">
				<span class="listings__title bold">Item title blabla</span>
				<span class="listings__subtitle">Item subtitle blabla</span>
			</div>
			<div class="columns listings__tile small-12 medium-6 large-4">
				<img class="listings__image" src="https://static.wixstatic.com/media/130ead_d0956beb04f7464b917c3b1753ba5764.jpg_srz_p_308_205_75_22_0.5_1.2_0_jpg_srz" alt="">
				<span class="listings__title bold">Item title blabla</span>
				<span class="listings__subtitle">Item subtitle blabla</span>
			</div>
			<div class="columns listings__tile small-12 medium-6 large-4">
				<img class="listings__image" src="https://static.wixstatic.com/media/130ead_d0956beb04f7464b917c3b1753ba5764.jpg_srz_p_308_205_75_22_0.5_1.2_0_jpg_srz" alt="">
				<span class="listings__title bold">Item title blabla</span>
				<span class="listings__subtitle">Item subtitle blabla</span>
			</div>
			<div class="columns listings__tile small-12 medium-6 large-4">
				<img class="listings__image" src="https://static.wixstatic.com/media/130ead_d0956beb04f7464b917c3b1753ba5764.jpg_srz_p_308_205_75_22_0.5_1.2_0_jpg_srz" alt="">
				<span class="listings__title bold">Item title blabla</span>
				<span class="listings__subtitle">Item subtitle blabla</span>
			</div>
			<div class="columns listings__tile small-12 medium-6 large-4">
				<img class="listings__image" src="https://static.wixstatic.com/media/130ead_d0956beb04f7464b917c3b1753ba5764.jpg_srz_p_308_205_75_22_0.5_1.2_0_jpg_srz" alt="">
				<span class="listings__title bold">Item title blabla</span>
				<span class="listings__subtitle">Item subtitle blabla</span>
			</div>
			<div class="columns listings__tile small-12 medium-6 large-4">
				<img class="listings__image" src="https://static.wixstatic.com/media/130ead_d0956beb04f7464b917c3b1753ba5764.jpg_srz_p_308_205_75_22_0.5_1.2_0_jpg_srz" alt="">
				<span class="listings__title bold">Item title blabla</span>
				<span class="listings__subtitle">Item subtitle blabla</span>
			</div>
			<div class="columns listings__tile small-12 medium-6 large-4 end">
				<img class="listings__image" src="https://static.wixstatic.com/media/130ead_d0956beb04f7464b917c3b1753ba5764.jpg_srz_p_308_205_75_22_0.5_1.2_0_jpg_srz" alt="">
				<span class="listings__title bold">Item title blabla</span>
				<span class="listings__subtitle">Item subtitle blabla</span>
			</div>
		</div>
	</section>
	
	<?php if( have_rows('menu_categories') ): ?>
		<div class="row">
			<?php while( have_rows('menu_categories') ): the_row(); ?>
				<?php if( have_rows('category_items') ): ?>
					<?php while( have_rows('category_items') ): the_row(); ?>
						<?php $item_title = get_sub_field('item_title'); ?>
						<?php $item_description = get_sub_field('item_description'); ?>
						<?php $item_image = get_sub_field('item_image'); ?>

						<li>
							<?php if(!empty($item_title)) { ?>
								<h5><?php echo $item_title; ?></h5>
							<?php } ?>
							<?php if(!empty($item_description)) { ?>
								<p><?php echo $item_description; ?></p>
							<?php } ?>
							<?php if(!empty($item_image)) { ?>
								<span class="img-tooltip"><img src="<?php $print_image = wp_get_attachment_image_src( $item_image, 'square_img' ); echo $print_image[0]; ?>" alt=""></span>
							<?php } ?>
						</li>
					<?php endwhile; ?>
				<?php endif; ?>
			<?php endwhile; ?>
		</div>
	<?php endif; ?>

<?php endwhile; ?>

<?php include("footer.php"); ?>
