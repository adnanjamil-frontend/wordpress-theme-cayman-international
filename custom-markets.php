<?php
/**
 * Template Name: Markets
 *
 * @package _tk
 */

get_header(); ?>

<div class="div grey-link" style="background: url(http://caymanintinsurance.ky/wp-content/uploads/2018/11/Rectangle-member.png) no-repeat 50% 0% / cover; padding: 60px 0 60px;">
	<?php include_once('template-sublinks.php'); ?>



	<div class="container">
		<div data-scrollreveal="enter bottom">
			<?php the_field('setting_up_introduction'); ?>
		</div>

		<?php if( have_rows('markets') ): ?>
			<div class="markets load-hidden">
				<?php while( have_rows('markets') ): the_row(); ?>
					<div class="market" style="background: url(<?php the_sub_field('background_image'); ?>) no-repeat 0% 0%;">
						<?php the_sub_field('text'); ?>
					</div>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>
	</div>


</div>

<?php get_footer(); ?>
