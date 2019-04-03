<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package _tk
 */
?>
<div class="container">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header data-scrollreveal="enter bottom">
			<h1 class="page-title"><?php the_title(); ?></h1>
		</header><!-- .entry-header -->

		<div class="entry-content" data-scrollreveal="enter bottom">
			<div class="entry-content-thumbnail">
				<?php the_post_thumbnail(); ?>
			</div>
			<?php the_content(); ?>
			<?php _tk_link_pages(); ?>
		</div><!-- .entry-content -->
	</article><!-- #post-## -->
</div>