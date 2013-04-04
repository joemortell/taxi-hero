<?php get_header(); ?>

	<div id="content">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
			<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

			<div class="entry">
				
				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
				
				<?php the_tags( 'Tags: ', ', ', ''); ?>

			</div>	
			
		</div>

	<?php endwhile; endif; ?>
	
	</div> <!-- End Page Content -->

<?php get_footer(); ?>