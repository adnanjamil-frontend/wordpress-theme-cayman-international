<?php
/**
 * Template Name: Executive Members
 *
 * @package _tk
 */

get_header(); ?>

<?php include_once('template-sublinks.php'); ?>

<div style="margin-top: 50px;float: left;width: 100%;">
	<div class="container" style="">
		<?php the_field('about_introduction'); ?>
	</div>
</div>

<div class="rect-bg" style="">

	<div class="imac-serv" style="background: url(<?php the_field('about_features_bg'); ?>) no-repeat 0% 0% / auto 100%; padding: 0px;position: relative;margin-top: 100px;overflow: visible;float: left;width: 100%;">
		<div class="holder" style="position: relative;top:-100px;">
			<?php the_field('list_of_sub-committees_text'); ?>
		</div>
	</div>

</div>
<?php get_footer(); ?>
