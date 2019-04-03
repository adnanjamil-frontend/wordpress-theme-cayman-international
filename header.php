		<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package _tk
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="max-file-upload" content="<?php echo ini_get('upload_max_filesize') ?>" />

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="icon" href="http://caymanintinsurance.ky/wp-content/uploads/2018/11/favicon1.png" />
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,800" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">

	<?php wp_head(); ?>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/scroll.js"></script>
<script src="https://unpkg.com/scrollreveal"></script>

</head>

<body <?php body_class(); ?>>
	<?php do_action( 'before' ); ?>

<header id="masthead" class="site-header load-hidden">

  <nav class="site-navigation">
  <?php // substitute the class "container-fluid" below if you want a wider content area ?>
		<div class="site-navigation-inner">
			<div class="navbar navbar-default">

				<div class="top-menu">
					<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	            <label>
	                <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder', '_tk' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="<?php _ex( 'Search for:', 'label', '_tk' ); ?>">
	            </label>
	            <!-- <input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', '_tk' ); ?>"> -->
	        </form>
					<?php wp_nav_menu(array('theme_location' 	=> 'secondary',)); ?>
				</div>
				<div class="navbar-header">
					<!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
						<span class="sr-only"><?php _e('Toggle navigation','_tk') ?> </span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<!-- Your site title as branding in the menu -->
					<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="http://caymanintinsurance.ky/wp-content/uploads/2018/11/logo.png" alt="" /></a>
				</div>

				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location' 	=> 'primary',
						'depth'             => 2,
						'container'         => 'div',
						'container_id'      => 'navbar-collapse',
						'container_class'   => 'collapse navbar-collapse',
						'menu_class' 		=> 'nav navbar-nav',
						'fallback_cb' 		=> 'wp_bootstrap_navwalker::fallback',
						'menu_id'			=> 'main-menu',
						'walker' 			=> new wp_bootstrap_navwalker()
					)
				); ?>

			</div><!-- .navbar -->
		</div>
  </nav><!-- .site-navigation -->

<?php if (get_field('header_image')) : ?>
<div class="head-slider">
	<?php 
		$storeid = 0;

		for ($x = 0; $x <= 7; $x++) {
		$pageid = get_the_ID();
		if ($x == 0) { $id = $pageid; }
		if ($x == 1 ) { $id = 2; }
		if ($x == 2 ) { $id = 45; }
		if ($x == 3 ) { $id = 91; }
		if ($x == 4 ) { $id = 116; }
		if ($x == 5 ) { $id = 135; }
		if ($x == 6 ) { $id = 156; }
		if ($x == 7 ) { $id = 209; }

		if($id == $pageid && $x != 0) {

		} else {
		?>
			<div class="sli cur-<?php echo $id; ?> pageid-<?php echo $pageid; ?>" onclick="window.location.href='<?php echo get_the_permalink($id); ?>'"  style="background: url(<?php the_field('header_image',$id); ?>) no-repeat 50% 50% / cover;">
				<?php if (get_field('header_text',$id)) : ?>
					<div class="text"><div><?php the_field('header_text',$id); ?></div></div>
				<?php else : ?>
					<div class="text"><h1><?php echo get_the_title($id); ?></h1></div>
				<?php endif; ?>
			</div>
	<?php } } ?>
</div>
<?php else : ?>

<div class="head-slider">
	<?php 
		$storeid = 0;
		$classes = get_body_class();
		$pageid = get_the_ID();
		if (in_array('single-news',$classes)) {
		    $pageid = 110;
		} if (in_array('single-events',$classes)) {
		    $pageid = 995;
		}
		
		for ($x = 0 ; $x <= 5; $x++) {
		if ($x == 0) { $id = $pageid; }
		if ($x == 1 ) { $id = 110; }
		if ($x == 2 ) { $id = 995; }
		if ($x == 3 ) { $id = 1045; }
		if ($x == 4 ) { $id = 1006; }
		if ($x == 5 ) { $id = 1027; }

		if($id == $pageid && $x != 0) {

		} else {
		?>
			<div class="sli cur-<?php echo $id; ?> <?php echo $id; ?> pageid-<?php echo $pageid; ?>" onclick="window.location.href='<?php echo get_the_permalink($id); ?>'"  style="background: url(<?php the_field('hero_image',$id); ?>) no-repeat 50% 50% / cover;">
				<?php if (get_field('header_text',$id)) : ?>
					<div class="text"><div><?php the_field('header_text',$id); ?></div></div>
				<?php else : ?>
					<div class="text"><h1><?php echo get_the_title($id); ?></h1></div>
				<?php endif; ?>				
			</div>

	<?php } } ?>
</div>

<?php endif; ?>

</header><!-- #masthead -->

<script type="text/javascript">
var app = {}

app.hitMe = function(event) {
  window.location = event;
};	
</script>

<div class="main-content">
