<?php
/**
 * Template Name: Events Archive
 *
 * @package _tk
 */

get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<div class="container">
			<article data-scrollreveal="enter bottom" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header>
					<h1 class="page-title"><?php the_title(); ?></h1>
				</header><!-- .entry-header -->

				<div class="entry-content">
					<?php the_content(); ?>
				</div><!-- .entry-content -->
			</article><!-- #post-## -->

			<?php $args = [
        'post_type' => 'events',
        'posts_per_page' => '3',
        'order' => 'DESC',			            
      ];
			$query = new WP_Query($args); ?>
			<div class="clear row">
				<?php while ($query->have_posts()) : $query->the_post(); ?>
					<div class="col-md-4" data-scrollreveal="enter bottom">

						<a href="<?php the_permalink(); ?>" class="mem box-post">
							<div>
						  	<div class="img" style="background:url(<?php the_field('header_image'); ?>) no-repeat 50% 50% / cover;"></div>
						  	<p class="title"><?php the_title(); ?></p>
						  </div>
						</a>			

					</div>
				<?php endwhile; ?>
			</div>
			<?php wp_reset_postdata(); ?>
		</div>

	<?php endwhile; // end of the loop. ?>

		<div>
			<div class="container news-acc">
				<ul class="accordion" data-scrollreveal="enter bottom">
					 <?php $args_cat = [
					    'orderby' => 'name',
					    'order' => 'ASC',
					    'hide_empty' => 0,
					];

					$categories = get_categories($args_cat);
					$terms = get_terms( array(
					    'taxonomy' => 'event_category',
					    'orderby' => 'name',
					    'order' => 'ASC',
					    'hide_empty' => 0,					    
					) );

					if (!empty($categories)):
					    foreach ($terms as $category):
					        $args = [
					            'post_type' => 'events',
					            'posts_per_page' => -1,
							        'tax_query' => array(
							            array(
							                'taxonomy' => 'event_category',
							                'field' => 'term_id',
							                'terms' => $category->term_id,
							            )
							        )					            
					        ];
									echo '<div class="border"><li class="accordion-toggle"><h3>' . $category->name . ' <span class="icon-plus"></span></h3></li>';
					        $query = new WP_Query($args);
					        while ($query->have_posts()) : $query->the_post();
					            echo '
								      <div class="accordion-content" style="display: none;">
								      	<a class="tit" href="'. get_permalink() .'">' . get_the_title() .'</a><br/>' . get_the_content('Read More') .'
								      </div>';
					        endwhile;
					        echo '</li></div>';
					        wp_reset_postdata(); // reset the query 
					    endforeach;
					endif;?>
				</ul>
			</div>
		</div>					

		<div class="bot-sign fade-in" style="background: url(<?php $pageid = get_the_ID(); the_field('bottom_bg',995); ?>) no-repeat 50% 0% / cover; min-height: 840px;width: 100%;margin-bottom: 80px;">
		</div>



<?php get_footer(); ?>
