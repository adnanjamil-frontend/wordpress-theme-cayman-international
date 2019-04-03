<?php
/**
 * Template Name: Homepage
 *
 * @package _tk
 */

get_header(); ?>
<div class="rect-bg" style="background: url(https://caymanintinsurance.ky/wp-content/uploads/2018/12/Rectangle-new.png) no-repeat 50% 50% / cover">
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

</div>
<?php get_footer(); ?>
