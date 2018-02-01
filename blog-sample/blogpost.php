<?php
/**
 * The template for displaying all pages.
 *
  Template name:Blog Page

 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *a
 * @package web2feel
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
       <?php echo get_the_title(); ?>
   </div>
</div>
</div>
           </div>

<div class="container">
  <div class="row">
 
  <div class="col-sm-8 blogPage">
    <?php
    // the query
    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $wpb_all_query = new WP_Query(array('post_type'=>'post', 'paged'          => $paged, 'post_status'=>'publish', 'posts_per_page'=>5)); ?>
    <?php if ( $wpb_all_query->have_posts() ) : ?>
     <!-- the loop -->
     <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
  <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></h1>
    <div class="entry-meta">
      <?php sparkling_posted_on(); ?>
      <?php
        /* translators: used between list items, there is a space after the comma */
        $categories_list = get_the_category_list( esc_html__( ', ', 'sparkling' ) );
        if ( $categories_list && sparkling_categorized_blog() ) :
      ?>
      <span class="cat-links"><i class="fa fa-folder-open-o"></i>
        <?php printf( esc_html__( ' %1$s', 'sparkling' ), $categories_list ); ?>
      </span>
      <?php endif; // End if categories ?>
      <?php edit_post_link( esc_html__( 'Edit', 'sparkling' ), '<i class="fa fa-pencil-square-o"></i><span class="edit-link">', '</span>' ); ?>

    </div><!-- .entry-meta -->
    <p> <?php the_excerpt() ?></p>

     <?php endwhile; ?>
     <!-- end of the loop -->
     <nav class="pagination">
        <?php pagination_bar( $wpb_all_query ); ?>
    </nav>
     <?php wp_reset_postdata(); ?>

    <?php else : ?>
     <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
  </div>
  <div class="col-sm-4">
  <?php get_sidebar(); ?>
</div>
</div>

 <?php get_footer(); ?>
