<?php /* Template Name: Template - Wines */ ?>

<?php include("header.php"); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<?php # include("inc/top-banner.php") ?>

	<?php # SECTION - ABOUT US ?>

	<section class="row">
		<h1 class="page-title text-center has-border">Wines</h1>
		<?php the_content(); ?>
	</section>

	<?php # SECTION - MENU ITEMS ?>

	<section class="listings">
		<div class="row">
			<div class="columns listings__tile small-12 medium-6">
				<span class="listings__title bold">Item title blabla</span>
				<p class="listings__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque quae aperiam aspernatur asperiores, voluptatem reprehenderit sed</p>
			</div>
			<div class="columns listings__tile small-12 medium-6">
				<span class="listings__title bold">Item title blabla</span>
				<p class="listings__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, quod harum ipsa praesentium facere molestias earum</p>
			</div>
		</div>
		<div class="row">
			<div class="columns listings__tile small-12 medium-6">
				<span class="listings__title bold">Item title blabla</span>
				<p class="listings__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus sunt temporibus corrupti illum quidem minima cum</p>
			</div>
			<div class="columns listings__tile small-12 medium-6">
				<span class="listings__title bold">Item title blabla</span>
				<p class="listings__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit nesciunt, laboriosam ullam quibusdam ipsum commodi sint</p>
			</div>
		</div>
		<div class="row">
			<div class="columns listings__tile small-12 medium-6">
				<span class="listings__title bold">Item title blabla</span>
				<p class="listings__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi molestias possimus cum debitis neque, corporis ipsam</p>
			</div>
			<div class="columns listings__tile small-12 medium-6">
				<span class="listings__title bold">Item title blabla</span>
				<p class="listings__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, eos labore adipisci! Sunt harum, pariatur cum</p>
			</div>
		</div>
		<div class="row">
			<div class="columns listings__tile small-12 medium-6">
				<span class="listings__title bold">Item title blabla</span>
				<p class="listings__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis laborum, quibusdam ipsa voluptates tempore alias quaerat</p>
			</div>
			<div class="columns listings__tile small-12 medium-6 end">
				<span class="listings__title bold">Item title blabla</span>
				<p class="listings__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi accusamus mollitia porro itaque rem nostrum, eius</p>
			</div>
		</div>
	</section>

	<section class="row">
		<h2 class="page-title text-center has-border">Other beverages</h2>
	</section>

	<section class="listings">
		<div class="row">
			<div class="columns listings__tile small-12 medium-6">
				<span class="listings__title bold">Item title blabla</span>
				<p class="listings__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque quae aperiam aspernatur asperiores, voluptatem reprehenderit sed</p>
			</div>
			<div class="columns listings__tile small-12 medium-6">
				<span class="listings__title bold">Item title blabla</span>
				<p class="listings__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, eos labore adipisci! Sunt harum, pariatur cum</p>
			</div>
		</div>
		<div class="row">
			<div class="columns listings__tile small-12 medium-6">
				<span class="listings__title bold">Item title blabla</span>
				<p class="listings__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis laborum, quibusdam ipsa voluptates tempore alias quaerat</p>
			</div>
			<div class="columns listings__tile small-12 medium-6">
				<span class="listings__title bold">Item title blabla</span>
				<p class="listings__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi accusamus mollitia porro itaque rem nostrum, eius</p>
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

	<section class="banner banner--middle banner--menu">
		
	</section>

<?php endwhile; ?>

<?php include("footer.php"); ?>
