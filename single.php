<?php
/**
 * The Template for displaying all single posts.
 *
 * @package _tk
 */

get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', 'single' ); ?>

		<div class="container">
			<?php _tk_content_nav( 'nav-below' ); ?>
		</div>

	<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>