<?php get_header(); ?>


	<!-- content column -->
	<div class="row page-main">

		<div class="col-md-9 content-container">
			
		<!-- THE LOOP IS REAL -->
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>

				<?php the_content(); ?>

			<?php endwhile; ?>
		<?php endif; ?>
		<!-- END LOOP -->

		</div>

		<!-- sidebar -->
		<?php get_sidebar(); ?>

	</div>

<?php get_footer(); ?>