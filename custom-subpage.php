<?php
/**
 * Template Name: Sub-Pages
 *
 * @package _tk
 */

get_header(); ?>
<nav>
	<div id="subpage_header" class="navbar-header">
		<!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-2">
			<span class="sr-only"><?php _e('Toggle navigation','_tk') ?> </span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>

	<!-- The WordPress Menu goes here -->
	<?php wp_nav_menu(
		array(
			'theme_location' 	=> 'subpages',
			'depth'             => 2,
			'container'         => 'div',
			'container_id'      => 'navbar-collapse-2',
			'container_class'   => 'collapse navbar-collapse',
			'menu_class' 		=> 'nav navbar-nav',
			'fallback_cb' 		=> 'wp_bootstrap_navwalker::fallback',
			'menu_id'			=> 'sub-menu',
			'walker' 			=> new wp_bootstrap_navwalker()
		)
	); ?>
</nav><!-- .site-navigation -->

<div class="rect-bg">
	<div class="container">

		<?php if( get_field('imac_introduction') ): ?>
			<div id="imac-intro" data-scrollreveal="enter bottom">
				<?php the_field('imac_introduction'); ?>
				<div class="row">
					<?php if( get_field('imac_intro_left_column') ): ?>
						<div class="col-sm-6" data-scrollreveal="enter left after 0.5s"><?php the_field('imac_intro_left_column'); ?></div>
					<?php endif; ?>
					<?php if( get_field('imac_intro_right_column') ): ?>
						<div class="col-sm-6" data-scrollreveal="enter right after 0.5s"><?php the_field('imac_intro_right_column'); ?></div>
					<?php endif; ?>
				</div>

			</div>
		<?php endif; ?>

		<?php if( have_rows('imac_services') ): ?>
			<!-- <div class="imac-serv">
				<?php while( have_rows('imac_services') ): the_row(); ?>
					<div class="serv">
						<img src="<?php the_sub_field('thumbnail'); ?>" alt="" />
						<div>
							<h3><?php the_sub_field('title'); ?></h3>
							<span><?php the_sub_field('text'); ?></span>
						</div>
					</div>
				<?php endwhile; ?>
			</div> -->
		<?php endif; ?>

	</div>
	
	<?php if( get_field('news_text') ): ?>	
		<div class="home-block load-hidden" id="news-block" style="background: url(<?php the_field('news_bg'); ?>) no-repeat 0% 50% / 75% auto; margin: 50px 0;">
			<div class="text" data-scrollreveal="enter left and move 100px after 0.5s"><?php the_field('news_text'); ?></div>
		</div>
	<?php endif; ?>
	
	<?php if( get_field('events_text') ): ?>
		<div class="home-block load-hidden" id="events-block" style="background: url(<?php the_field('events_bg'); ?>) no-repeat 100% 50% / 75% auto;">
			<div class="text" data-scrollreveal="enter right and move 100px after 0.5s"><?php the_field('events_text'); ?></div>
		</div>
	<?php endif; ?>

	<?php if( have_rows('sponsor_logo', 'option') ): ?>
		<div class="logo-carousel">
			<?php while( have_rows('sponsor_logo', 'option') ): the_row(); ?>
				<a href="<?php the_sub_field('logo_link'); ?>"><img src="<?php the_sub_field('logo_image'); ?>" alt="" ></a>
			<?php endwhile; ?>
		</div>
	<?php endif; ?>

</div>

<?php get_footer(); ?>

<script>
		jQuery('.logo-carousel').slick({
			autoplay: true,
			infinite: true,
			pauseOnHover: false,
		});
	</script>