<?php
/*
 Template Name: Tutorial Page
*/
?>

<?php get_header(); ?>

<div id="content">

	<?php if (is_active_sidebar('sidebar1')) : ?>
		<?php dynamic_sidebar('sidebar1'); ?>
	<?php endif; ?>

	<div id="tutDiv">

		<h1 class="entry-title"><?php the_title(); ?></h1> <!-- Page Title -->
		<?php
		// TO SHOW THE PAGE CONTENTS
		while (have_posts()) : the_post(); ?>
			<!--Because the_content() works only inside a WP Loop -->
			<div class="entry-content-page">
				<?php the_content(); ?>
				<!-- Page Content -->
			</div><!-- .entry-content-page -->

		<?php
		endwhile; //resetting the page loop
		wp_reset_query(); //resetting the page query
		?>

	</div>

</div>

<?php get_footer(); ?>