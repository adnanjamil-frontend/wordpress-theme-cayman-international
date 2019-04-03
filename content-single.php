<?php
/**
 * @package _tk
 */
?>
<div class="container">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header>
			<h1 class="page-title" data-scrollreveal="enter bottom"><?php the_title(); ?></h1>

			<div class="entry-meta" data-scrollreveal="enter bottom">
				Date: <?php echo get_the_date('D-M-d-Y'); ?>
			</div><!-- .entry-meta -->
		</header><!-- .entry-header -->
		<br/>
		<div class="entry-content" data-scrollreveal="enter bottom">
			<div class="entry-content-thumbnail">
				<?php the_post_thumbnail(); ?>
			</div>
			<?php the_content(); ?>
			<?php _tk_link_pages(); ?>
		</div><!-- .entry-content -->

	</article><!-- #post-## -->
</div>