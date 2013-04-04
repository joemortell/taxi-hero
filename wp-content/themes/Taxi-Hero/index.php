<?php get_header(); ?>

	<div id="content">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<?php the_content(); ?>

	<?php endwhile; ?>
	
	</div> <!-- End Page Content -->

	<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

	<?php else : ?>

		<h2>Not Found</h2>

	<?php endif; ?>

<?php get_footer(); ?>