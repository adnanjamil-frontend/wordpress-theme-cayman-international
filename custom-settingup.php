<?php
/**
 * Template Name: Setting Up
 *
 * @package _tk
 */

get_header(); ?>

<div class="div grey-link" style="padding: 0px 0 60px;">
	<?php include_once('template-sublinks.php'); ?>
	<div class="container"  data-scrollreveal="enter bottom">
		<div style="margin-top: 55px;"></div>
		<?php the_field('setting_up_introduction'); ?>

		<div class="row">
			<div class="col-sm-6" data-scrollreveal="enter left after 0.5s">
				<?php the_field('setting_up_mid_left_text'); ?>
			</div>
			<div class="col-sm-6" data-scrollreveal="enter right after 0.5s">
				<?php the_field('setting_up_mid_right_text'); ?>
			</div>			
		</div>

		<div class="row">
			<div class="col-sm-6" data-scrollreveal="enter left after 0.5s">
				<?php the_field('setting_up_end_left_text'); ?>
			</div>
			<div class="col-sm-6" data-scrollreveal="enter right after 0.5s">
				<?php the_field('setting_up_end_right_text'); ?>
			</div>			
		</div>				
	</div>
</div>

<div class="set-img fade-in" style="background: url(<?php the_field('accordion_background'); ?>) no-repeat 50% 0% / cover;">

</div>

<div class="rect-bg" style="background: url() no-repeat 50% 0% / cover;padding:50px 0 0px;margin-bottom: -150px;">
	<div class="container set-acc">

		<?php if( have_rows('accordion') ): ?>
			<ul class="accordion" data-scrollreveal="enter bottom">
				<?php while( have_rows('accordion') ): the_row(); ?>
					<div class="border">
						<li class="accordion-toggle"><h3><?php the_sub_field('title'); ?> <span class="icon-plus"></span></h3></li>
						<div class="accordion-content" style="display: none;"><span><?php the_sub_field('text'); ?></span></div>
					</div>
				<?php endwhile; ?>
			</ul>
		<?php endif; ?>

	</div>
</div>
<?php get_footer(); ?>
