<?php
/**
 * Template Name: News Archive
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
        'post_type' => 'news',
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
					<?php query_posts(array('nopaging' => 1, 'post_type' => 'news', 'order' => 'DESC'));
					$prev_year = null;
					if ( have_posts() ) {
					   while ( have_posts() ) {
					      the_post();
					      $this_year = get_the_date('Y');
					      if ($prev_year != $this_year) {
					          // Year boundary
					          if (!is_null($prev_year)) {
					             // A list is already open, close it first
					             echo '</div>';
					          }
					          if ($this_year == date('Y')) {
						          echo '<div class="border">
														<li class="accordion-toggle active-tab"><h3>' . $this_year . ' <span class="icon-minus"></span></h3></li>';
										} else {
						          echo '<div class="border">
														<li class="accordion-toggle"><h3>' . $this_year . ' <span class="icon-plus"></span></h3></li>';
										}
					      }
					      if ($this_year == date('Y')) {
						      echo '
						      <div class="accordion-content">
						      	<a class="tit" href="'. get_permalink() .'">'. get_the_date('D-M-d-Y') . '-' . get_the_title() .'</a><br/>' . get_the_content('Read More') .'
						      </div>';
						    } else {
						    	echo '
						      <div class="accordion-content" style="display: none;">
						      	<a class="tit" href="'. get_permalink() .'">'. get_the_date('D-M-d-Y') . '-' . get_the_title() .'</a><br/>' . get_the_content('Read More') .'
						      </div>';
						    }
					      echo '</li>';
					      $prev_year = $this_year;
					   }
					   echo '</div>';
					} ?>
				</ul>
			</div>
		</div>

		<div class="bot-sign fade-in" style="background: url(<?php $pageid = get_the_ID(); the_field('bottom_bg',110); ?>) no-repeat 50% 0% / cover; min-height: 935px;width: 100%;margin-bottom: 90px;">
		</div>



<?php get_footer(); ?>
