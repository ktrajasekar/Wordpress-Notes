<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package sparkling
 */

get_header(); ?>
<div class="container">
	<div class="page404 text-center">
	<h1>404</h1>
	<p>	Something Went Wrong :(</p>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="gohome"><i class="fas fa-home"></i> HOME</a>
	</div>

</div>

<?php get_footer(); ?>
