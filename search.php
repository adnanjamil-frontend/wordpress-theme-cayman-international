<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package _tk
 */

get_header(); ?>
<div class="rect-bg" style="background: url(http://caymanintinsurance.ky/wp-content/uploads/2018/11/Rectangle-about.png) no-repeat 50% 0% / cover">
	<div class="container" data-scrollreveal="enter bottom">
	<?php if ( have_posts() ) : ?>

		<header data-scrollreveal="enter bottom">
			<h2 class="page-title"><?php printf( __( 'Search Results for: %s', '_tk' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
		</header><!-- .page-header -->

		<?php // start the loop. ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'search' ); ?>

		<?php endwhile; ?>

		<?php _tk_pagination(); ?>

	<?php else : ?>

		<?php get_template_part( 'no-results', 'search' ); ?>

	<?php endif; // end of loop. ?>
	</div>
</div>
<?php get_footer(); ?>