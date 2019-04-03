<?php
/**
 * Template Name: Captive Forum
 *
 * @package _tk
 */

get_header(); ?>

<div class="div grey-link" style="padding: 80px 0;">
	<?php include_once('template-sublinks.php'); ?>

<div class="relative">
	<div class="mem-main captive col-sm-6 fade-in" style="background: url(<?php the_field('members_introduction_background'); ?>) no-repeat 50% 0% / cover;margin-top: 0px;">
		<div class="container">
			<div data-scrollreveal="enter left after 0.5s">
				<?php the_field('setting_up_introduction'); ?>
			</div>
		</div>
	</div>

	<div class="col-sm-6 ctas">
		<div class="box" data-scrollreveal="enter right">
			<?php the_field('call_to_action_1'); ?>
		</div>
		<div class="box" data-scrollreveal="enter right">
			<?php the_field('call_to_action_2'); ?>
		</div>
		<div class="box" data-scrollreveal="enter right">
			<?php the_field('call_to_action_3'); ?>
		</div>
	</div>
</div>



</div>

<?php get_footer(); ?>
