<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package _tk
 */
?>
</div><!-- close .main-content -->

<footer id="colophon" class="site-footer load-hidden">
<?php // substitute the class "container-fluid" below if you want a wider content area ?>
	<div class="container">
		<div class="row">
			<div class="site-footer-inner col-sm-12">
                <div class="foot-menu">
                    <?php wp_nav_menu(array('theme_location'  => 'primary',)); ?>
                </div>
                <?php echo do_shortcode('[wd_hustle id="footer-newsletter" type="embedded"]') ;?>
                <ul class="social">
                    <li><a href="https://twitter.com/CaymanIntIns" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="https://www.facebook.com/CaymanIntInsurance/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://www.linkedin.com/company/caymanintinsurance" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
			</div>
		</div>
	</div><!-- close .container -->
</footer><!-- close #colophon -->


<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
<link href="<?php echo bloginfo('template_directory'); ?>/style.css" rel="stylesheet">


<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/includes/resources/bootstrap/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>

<?php wp_footer(); ?>

<script>

var ani = {
	duration: 1500,
};
var ani2 = {
	duration: 1500,
	viewFactor: 0.25,
};

//Homepage
ScrollReveal().reveal('#masthead', ani);
ScrollReveal().reveal('#colophon', ani);
ScrollReveal().reveal('.home-block', ani2);
//About Page
ScrollReveal().reveal('#abt-feat', ani);
ScrollReveal().reveal('.fade-in', ani2);
//Markets
ScrollReveal().reveal('.markets > div', { origin: 'bottom', duration: 1500, distance: '50px' });

jQuery(function($) {
    if($(window).width()>769){
        $('.navbar .dropdown').hover(function() {
            $(this).find('.dropdown-menu').first().stop(true, true).delay(250).slideDown();

        }, function() {
            $(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideUp();

        });

        $('.navbar .dropdown > a').click(function(){
            location.href = this.href;
        });

    }

    $('.head-slider').slick({
        autoplay: false,
        infinite: true,
        pauseOnHover: false,
        
    });
});

jQuery(".accordion").find(".accordion-toggle").click(function() {
    jQuery(this).toggleClass("active-tab").find("span").toggleClass("icon-minus icon-plus");
    jQuery(this).parent('.border').children('.accordion-content').toggleClass("open").slideToggle("fast");

})
</script>

</body>
</html>
