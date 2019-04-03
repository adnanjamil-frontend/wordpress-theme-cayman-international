<?php
/**
 * Template Name: Members
 *
 * @package _tk
 */

get_header(); ?>

<div class="div grey-link fade-in" style="background: url() no-repeat 50% 0% / cover; padding: 0px 0 60px;">
	<?php include_once('template-sublinks.php'); ?>


	<div class="mem-main" style="background: url(<?php the_field('members_introduction_background'); ?>) no-repeat 50% 50% / cover;margin-top: 80px;">
		<div class="container"data-scrollreveal="enter left after 0.5s">
			<div style="margin-top: 80px;">
				<?php the_field('setting_up_introduction'); ?>
			</div>
		</div>
	</div>


	<div class="container mem-acc" data-scrollreveal="enter bottom">
	<?php if( have_rows('accordion') ): ?>
		<ul class="accordion accordion-mem">
			<?php while( have_rows('accordion') ): the_row(); $idparent = get_sub_field('title'); $idparent = str_replace(" ", "-", $idparent); $idparent = str_replace("&", "-", $idparent); ?>
				<div class="border">
					<li class="accordion-toggle"><h3><?php the_sub_field('title'); ?> <span class="icon-plus"></span></h3></li>
					<div class="accordion-content" style="display: none;"><span><?php the_sub_field('text'); ?></span>
							
							<?php if (get_sub_field('will_this_accordion_have_a_sub')) : ?> <!-- IF IT HAS A SUB ACCORDION -->

								<?php if( have_rows('accordion_tab_content') ): ?>
									<ul class="accordion acc-reset accordion-partoftext sub-acc">
										<?php while( have_rows('accordion_tab_content') ): the_row(); $idparent = get_sub_field('logos_section_header'); $idparent = str_replace(" ", "-", $idparent); $idparent = str_replace("&", "-", $idparent); ?>						
											<div class="border">
												<li class="accordion-toggle"><h4><?php the_sub_field('logos_section_header'); ?> <span class="icon-plus"></span></h4></li>
												<div class="accordion-content" style="display: none;">
													<span>											

													<?php if( have_rows('insurance_manager_members') ): ?>
														<div class="mem-holder">
														<?php $id = 0; while( have_rows('insurance_manager_members') ): the_row(); ?>
															<div class="mem" data-toggle="modal" data-target="#mem-num-<?php echo $idparent; ?>-<?php echo $id; ?>">
																<div class="mem-in">
																	<div class="mem-img">
																		<img src="<?php the_sub_field('logo'); ?>" alt="" />
															  	</div>
															  	<p class="title"><?php the_sub_field('title'); ?></p>
															  </div>
															</div>
														<?php $id = $id + 1; endwhile; ?>
														</div>
													<?php endif; ?>	

													</span>		
												</div>
											</div>
										<?php endwhile; ?>
									</ul>
								<?php endif; ?>	

							<?php else : ?> <!-- IF IT DOES NOT HAVE A SUB ACCORDION -->

								<?php if( have_rows('accordion_tab_content') ): ?>
									<?php while( have_rows('accordion_tab_content') ): the_row(); ?>	


											<?php if( have_rows('insurance_manager_members') ): ?>
												<div class="mem-holder">
												<?php $id = 0; while( have_rows('insurance_manager_members') ): the_row(); ?>
													<div class="mem" data-toggle="modal" data-target="#mem-num-<?php echo $idparent; ?>-<?php echo $id; ?>">
														<div class="mem-in">
															<div class="mem-img">
																<img src="<?php the_sub_field('logo'); ?>" alt="" />
													  	</div>
													  	<p class="title"><?php the_sub_field('title'); ?></p>
													  </div>
													</div>
												<?php $id = $id + 1; endwhile; ?>
												</div>
											<?php endif; ?>			


									<?php endwhile; ?>
								<?php endif; ?>	

							<?php endif; ?>
					</div>
				</div>
			<?php endwhile; ?>
		</ul>
	<?php endif; ?>
	</div>

</div>

<?php if( have_rows('accordion') ): ?>
<?php while( have_rows('accordion') ): the_row(); $idparent = get_sub_field('title'); $idparent = str_replace(" ", "-", $idparent); $idparent = str_replace("&", "-", $idparent); $acc = get_sub_field('will_this_accordion_have_a_sub'); ?>
<?php if( have_rows('accordion_tab_content') ): ?>
<?php while( have_rows('accordion_tab_content') ): the_row(); ?>	
	<?php if ($acc) : ?>
			<?php $idparent = get_sub_field('logos_section_header'); $idparent = str_replace(" ", "-", $idparent); $idparent = str_replace("&", "-", $idparent); ?>
	<?php endif; ?>
<?php if( have_rows('insurance_manager_members') ): ?>
	<?php $id = 0; while( have_rows('insurance_manager_members') ): the_row(); ?>
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
<?php endif; ?>		
<?php endwhile; ?>			
<?php endif; ?>		
<?php endwhile; ?>			
<?php endif; ?>		
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
<script type="text/javascript">
jQuery(function($) {
	var userAgent, ieReg, ie;
	userAgent = window.navigator.userAgent;
	ieReg = /msie|Trident.*rv[ :]*11\./gi;
	ie = ieReg.test(userAgent);

	if(ie) {
		$('.mem-img').each(function () {
	    var $container = $(this),
	        imgUrl = $container.find('img').prop('src');
	    if (imgUrl) {
	      $container
	        .css('backgroundImage', 'url(' + imgUrl + ')')
	        .addClass('compat-object-fit');
	    }  
	  });
	}
})
</script>
<?php get_footer(); ?>
