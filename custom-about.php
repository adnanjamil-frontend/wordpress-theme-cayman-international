<?php
/**
 * Template Name: About
 *
 * @package _tk
 */

get_header(); ?>

<?php include_once('template-sublinks.php'); ?>

<div id="about-intro" class="fade-in" style="background: url(<?php the_field('about_introduction_bg'); ?>) no-repeat 100% 0% / cover;margin-top: 100px;">
	<div class="container" data-scrollreveal="enter bottom" style="margin-top: 100px;">
		<?php the_field('about_introduction'); ?>
	</div>
</div>

<div class="rect-bg" style="">
	<div class="container">

		<div class="pad50-bottom" data-scrollreveal="enter bottom">
			<?php the_field('introduction_about_cayman_international'); ?>
		</div>	

	</div>

	<?php if( have_rows('about_features') ): ?>
		<div class="imac-serv" id="abt-feat" style="background: url(<?php the_field('about_features_bg'); ?>) no-repeat 0% 0% / 65% auto">
			<div class="holder" data-scrollreveal="enter right after 0.5s">
				<?php while( have_rows('about_features') ): the_row(); ?>
					<div class="serv">
						<img src="<?php the_sub_field('thumbnail'); ?>" alt="" />
						<div>
							<h3><?php the_sub_field('title'); ?></h3>
							<span><?php the_sub_field('text'); ?></span>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
		</div>
	<?php endif; ?>

	<div class="container">

		<div data-scrollreveal="enter bottom">
			<div  style="margin-top: 60px;"></div>
			<?php the_field('about_bottom_description'); ?>

			<?php if( have_rows('accordion') ): ?>
				<ul class="accordion acc-reset accordion-partoftext" data-scrollreveal="enter bottom">
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
</div>
<?php get_footer(); ?>
