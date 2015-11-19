<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 *
 Template Name: MyFront
 *
 */

get_header(); ?>

<div id="main-content" class="main-content">

<?php echo do_shortcode('[parallax-scroll id="35"]') ?>

<?php
	if ( is_front_page() && twentyfourteen_has_featured_posts() ) {
		// Include the featured content template.
		get_template_part( 'featured-content' );
	}
?>



</div><!-- #main-content -->

<!--div class="widget-area twitter">
	<?php dynamic_sidebar( 'twitter' ); ?>
</div-->

<div class="testimonials">
	<?php echo do_shortcode('[hms_testimonials_rotating template="13" order="display_order" direction="ASC"]') ?>
</div>

<a href="/clients-services/" class="hvr-reveal">
	<div class="widget-area clients">
		<?php dynamic_sidebar( 'clients' ); ?>
	</div>
</a>
<a href="/candidates-services/" class="hvr-reveal">
	<div class="widget-area candidates">
		<?php dynamic_sidebar( 'candidates' ); ?>
	</div>
</a>
</a>
<a href="/vacancies/" class="hvr-reveal">
<div class="widget-area vacancies">
	<?php dynamic_sidebar( 'vacancies' ); ?>
</div>
</a>
<a href="/about-us/our-methodology/" class="hvr-reveal">
<div class="widget-area method">
	<?php dynamic_sidebar( 'method' ); ?>
</div>
</a>

<div class="recent-posts-wrapper">
	<div id="content" class="site-content" role="main">
		<h1>FEATURED JOB</h1>

		<?php echo do_shortcode('[wpjb_jobs_list is_featured="1"]') ?>

	</div><!-- #content -->
</div><!-- #primary -->


<div class="widget-area connected">
	<?php dynamic_sidebar( 'connected' ); ?>
</div>

<?php
get_footer();