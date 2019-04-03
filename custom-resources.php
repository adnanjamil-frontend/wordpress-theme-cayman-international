<?php
/**
 * Template Name: Resources
 *
 * @package _tk
 */

get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<div class="container" style="overflow:hidden;">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="max-width: 100%;">
				<header data-scrollreveal="enter bottom">
					<h1 class="page-title"><?php the_title(); ?></h1>
				</header><!-- .entry-header -->

				<div data-scrollreveal="enter bottom" class="entry-content">
					<?php the_content(); ?>
				</div><!-- .entry-content -->

				<ul data-scrollreveal="enter bottom" class="accordion acc-reset rec-pop accordion-partoftext">

						<div class="border">
							<li class="accordion-toggle"><h3>Blog <span class="icon-plus"></span></h3></li>
							<div class="accordion-content" style="display: none;">
								<ul>
								<?php
								$lastposts = get_posts( array(
								    'posts_per_page' => -1,
								    'category_name' => 'blog',
								) );
								 
								if ( $lastposts ) {
								    foreach ( $lastposts as $post ) :
								        setup_postdata( $post ); ?>
								        <li><a class="tit" href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br/><?php echo wp_trim_words( get_the_content(), 40, '' ); ?> - <a class="read-more content-read-more" href="<?php the_permalink(); ?>">Read more</a></li><br/>
								    <?php
								    endforeach; 
								    wp_reset_postdata();
								}?>
							</ul>
							</div>
						</div>

						<div class="border">
							<li class="accordion-toggle"><h3>Articles <span class="icon-plus"></span></h3></li>
							<div class="accordion-content" style="display: none;">
								<ul>
								<?php
								$lastposts = get_posts( array(
								    'posts_per_page' => -1,
								    'category_name' => 'articles',
								) );
								 
								if ( $lastposts ) {
								    foreach ( $lastposts as $post ) :
								        setup_postdata( $post ); ?>
								        <li><a class="tit" href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br/><?php echo wp_trim_words( get_the_content(), 40, '' ); ?> - <a class="read-more content-read-more" href="<?php the_permalink(); ?>">Read more</a></li><br/>
								    <?php
								    endforeach; 
								    wp_reset_postdata();
								}?>
							</ul>
							</div>
						</div>

						<div class="border">
							<li class="accordion-toggle"><h3>Brochures <span class="icon-plus"></span></h3></li>
							<div class="accordion-content" style="display: none;"><span><?php the_field('brochures'); ?></span>
							</div>
						</div>	

						<div class="border">
							<li class="accordion-toggle"><h3>Continuing Education <span class="icon-plus"></span></h3></li>
							<div class="accordion-content" style="display: none;"><span><?php the_field('continuing_education'); ?></span>
							</div>
						</div>	

						<div class="border">
							<li class="accordion-toggle"><h3>Captive Insight <span class="icon-plus"></span></h3></li>
							<div class="accordion-content" style="display: none;"><span><?php the_field('captive_insight'); ?></span>
							</div>
						</div>	

						<div class="border">
							<li class="accordion-toggle"><h3>Useful Links <span class="icon-plus"></span></h3></li>
							<div class="accordion-content" style="display: none;"><span><?php the_field('useful_links'); ?></span>
							</div>
						</div>	

						<div class="border">
							<li class="accordion-toggle"><h3>FAQs <span class="icon-plus"></span></h3></li>
							<div class="accordion-content" style="display: none;"><span>
								<?php if( have_rows('faqs') ): ?>
									<ul class="accordion acc-reset accordion-partoftext sub-acc" style="padding-left: 20px;">
										<?php while( have_rows('faqs') ): the_row(); ?>						
											<div class="border">
												<li class="accordion-toggle"><h4><?php the_sub_field('faq_title'); ?> <span class="icon-plus"></span></h4></li>
												<div class="accordion-content faq-content" style="display: none;">	
													<span><?php the_sub_field('faq_text'); ?></span>					
												</div>
											</div>
										<?php endwhile; ?>
									</ul>
								<?php endif; ?>			
							</span>
							</div>
						</div>	

						<div class="border">
							<li class="accordion-toggle active-tab"><h3>Videos <span class="icon-minus"></span></h3></li>
							<div class="accordion-content">
								<div class="res-slider">
									<?php if( have_rows('resources') ): ?>
										<?php while( have_rows('resources') ): the_row(); ?>
											<iframe width="100%" height="600" src="https://www.youtube.com/embed/<?php the_sub_field('youtube_embed_code'); ?>" frameborder="0" allowfullscreen></iframe>
										<?php endwhile; ?>
									<?php endif; ?>
								</div>	
							</div>
						</div>	

				</ul>

				
			</article><!-- #post-## -->
		</div>
	<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
<script type="text/javascript">
	jQuery('.res-slider').slick({
		dots: false,
		arrows: true,
		infinite: true,
		autoplay: false,
	})
</script>