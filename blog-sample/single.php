<?php
/**
 * The Template for displaying all single posts.
 *
 * @package sparkling
 */

get_header(); ?>
<div class="container-fluid pageTitlebck">
<div class="container">
<div class="row">
  <div class="col-sm-6  col-xs-12 innerpagectrl breadcrumbtxt">
      <div class="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#">
          <?php if(function_exists('bcn_display'))
{
bcn_display();
}?>
      </div>
  </div>
  <div class="col-sm-6 col-xs-12 innerpagectrl pagetitle text-right">
      <!-- <?php echo get_the_title(); ?> -->
  </div>
</div>
</div>
          </div>
<div class="container">
    <div class="row">
        <div class="col-sm-12 blogPage">
            		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', 'single' ); ?>
			<?php sparkling_post_nav(); ?>
		<?php endwhile; // end of the loop. ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
