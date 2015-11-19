<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

		</div><!-- #main -->

<div class="services-area">
	<div id="content" class="site-content" role="main">

		<div class="widget-area col-3 footer-logo">
			<?php dynamic_sidebar( 'footer-logo' ); ?>
		</div>

		<div class="widget-area col-3 client_services">
			<?php dynamic_sidebar( 'client_services' ); ?>
		</div>

		<div class="widget-area col-3 candidate_services">
			<?php dynamic_sidebar( 'candidate_services' ); ?>
		</div>
	</div>
</div>

		<footer id="colophon" class="site-footer" role="contentinfo">

			<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
							<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'menu_class' => 'footer-menu' ) ); ?>
			</nav>

			<?php get_sidebar( 'footer' ); ?>

			<div class="site-info">
				<?php do_action( 'twentyfourteen_credits' ); ?>
				<p>© RIGHT FUTURES 2015 WEBSITE by 
				<a href="<?php echo esc_url( __( 'http://newsite.rightfutures.com/', 'twentyfourteen' ) ); ?>"><?php printf( __( 'wizzbarclay', 'twentyfourteen' ), 'WordPress' ); ?></a></p>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

		<?php wp_footer(); ?>
		<!--<?php //print_r( debug_backtrace() ) ?>-->

</body>
</html>