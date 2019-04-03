<?php
/**
 * Template Name: Scholarship Fund
 *
 * @package _tk
 */

get_header(); ?>

<div class="div grey-link" style="padding: 0px 0 60px;">
	<div class="container" style="margin-top: 55px;">
		<div data-scrollreveal="enter bottom"><?php the_field('setting_up_introduction'); ?></div>
		<div class="row">
			<div class="col-sm-6" data-scrollreveal="enter left after 0.5s">
				<?php the_field('investing_in_our_future_left_text'); ?>
			</div>
			<div class="col-sm-6" data-scrollreveal="enter right after 0.5s">
				<?php the_field('investing_in_our_future_right_text'); ?>
			</div>			
		</div>
		<div data-scrollreveal="enter bottom"><?php the_field('scholarship_introduction_end'); ?></div>

		<?php if( have_rows('scholarship_introduction_end_accordion') ): ?>
			<ul data-scrollreveal="enter bottom" class="accordion acc-reset rec-pop accordion-partoftext">
				<?php while( have_rows('scholarship_introduction_end_accordion') ): the_row(); $idparent = get_sub_field('recipient_year'); ?>
					<div class="border">
						<li class="accordion-toggle"><h3><?php the_sub_field('title'); ?> <span class="icon-plus"></span></h3></li>
						<div class="accordion-content" style="display: none;"><span><?php the_sub_field('text'); ?></span></div>
					</div>
				<?php endwhile; ?>
			</ul>
		<?php endif; ?>

	</div>
</div>

<div class="div grey-link" style="padding: 0px 0 60px;">


	<div class="mem-main fade-in" id="schol-main" style="background: url(<?php the_field('members_introduction_background'); ?>) no-repeat 100% 0% / cover;margin-top: 0px;">
		<div class="container">
			<div data-scrollreveal="enter left after 0.5s">
				<?php the_field('scholarship_bg_text'); ?>
			</div>
		</div>
	</div>


</div>

<div class="div grey-link" style="padding: 0px 0 100px;">
	<div class="container" style="margin-top: 0px;">

		<?php if( have_rows('recipients') ): ?>
			<ul class="accordion acc-reset rec-pop accordion-partoftext" data-scrollreveal="enter bottom">
				<?php while( have_rows('recipients') ): the_row(); $idparent = get_sub_field('recipient_year'); $idparent = str_replace(" ", "-", $idparent);  ?>
					<div class="border">
						<li class="accordion-toggle"><h3><?php the_sub_field('recipient_year'); ?> <span class="icon-plus"></span></h3></li>
						<div class="accordion-content" style="display: none;"><span>

						<?php if( have_rows('recipient_information') ): ?>
							<?php $id = 0; while( have_rows('recipient_information') ): the_row(); ?>
								<div class="" data-toggle="modal" data-target="#mem-num-<?php echo $idparent; ?>-<?php echo $id; ?>">
									<div>
								  	<p class="title">- <?php the_sub_field('title'); ?></p>
								  </div>
								</div>
							<?php $id = $id + 1; endwhile; ?>
						<?php endif; ?>		
								
						</span></div>
					</div>
				<?php endwhile; ?>
			</ul>
		<?php endif; ?>

		<?php the_field('scholarship_conclusion'); ?>
		<?php if( have_rows('scholarship_videos') ): ?>
			<div class="row" data-scrollreveal="enter bottom">
				<?php while( have_rows('scholarship_videos') ): the_row(); ?>
					<iframe width="100%" height="200" style="margin-top: 15px;margin-bottom: 15px;" src="https://www.youtube.com/embed/<?php the_sub_field('youtube_url'); ?>" frameborder="0" allowfullscreen class="col-sm-4"></iframe>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>		

	</div>
</div>

<?php if( have_rows('recipients') ): ?>
<?php while( have_rows('recipients') ): the_row(); $idparent = get_sub_field('recipient_year'); $idparent = str_replace(" ", "-", $idparent); ?>
<?php if( have_rows('recipient_information') ): ?>
	<?php $id = 0; while( have_rows('recipient_information') ): the_row(); ?>
		<div class="modal fade" id="mem-num-<?php echo $idparent; ?>-<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="mem-num-<?php echo $idparent; ?>-<?php echo $id; ?>" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>

	        <h3><?php the_sub_field('title'); ?></h3>
	        <div class="half">
	        	<div class="img">
	        		<img src="<?php the_sub_field('logo'); ?>" alt="" />
	        	</div>
	        	<span><?php the_sub_field('content'); ?></span>
	        </div>
						

			  </div>
			</div>
		</div>
	<?php $id = $id + 1; endwhile; ?>
<?php endif;
endwhile; ?>
<?php endif; ?>		
<?php get_footer(); ?>
