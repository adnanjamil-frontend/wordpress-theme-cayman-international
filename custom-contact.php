<?php
/**
 * Template Name: Contact
 *
 * @package _tk
 */

get_header(); ?>

<div class="div grey-link" style="background: url(http://caymanintinsurance.ky/wp-content/uploads/2018/11/Rectangle-member.png) no-repeat 50% 0% / cover; padding: 0px 0 60px;">
	<div class="container" style="margin-top: 55px;">
		<div data-scrollreveal="enter bottom"><?php the_field('setting_up_introduction'); ?></div>
		<ul class="social" data-scrollreveal="enter bottom">
        <li><a href="https://twitter.com/CaymanIntIns" target="_blank"><i class="fab fa-twitter"></i></a></li>
        <li><a href="https://www.facebook.com/CaymanIntInsurance/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
        <li><a href="https://www.linkedin.com/company/caymanintinsurance" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
    </ul>
	</div>
</div>

<?php get_footer(); ?>
