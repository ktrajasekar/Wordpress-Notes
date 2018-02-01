<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
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
      <?php
        if ( is_category() ) :
          single_cat_title();

        elseif ( is_tag() ) :
          single_tag_title();

        elseif ( is_author() ) :
          printf( esc_html__( 'Author: %s', 'sparkling' ), '<span class="vcard">' . get_the_author() . '</span>' );

        elseif ( is_day() ) :
          printf( esc_html__( 'Day: %s', 'sparkling' ), '<span>' . get_the_date() . '</span>' );

        elseif ( is_month() ) :
          printf( esc_html__( 'Month: %s', 'sparkling' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'sparkling' ) ) . '</span>' );

        elseif ( is_year() ) :
          printf( esc_html__( 'Year: %s', 'sparkling' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'sparkling' ) ) . '</span>' );

        elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
          esc_html_e( 'Asides', 'sparkling' );

        elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) :
          esc_html_e( 'Galleries', 'sparkling');

        elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
          esc_html_e( 'Images', 'sparkling');

        elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
          esc_html_e( 'Videos', 'sparkling' );

        elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
          esc_html_e( 'Quotes', 'sparkling' );

        elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
          esc_html_e( 'Links', 'sparkling' );

        elseif ( is_tax( 'post_format', 'post-format-status' ) ) :
          esc_html_e( 'Statuses', 'sparkling' );

        elseif ( is_tax( 'post_format', 'post-format-audio' ) ) :
          esc_html_e( 'Audios', 'sparkling' );

        elseif ( is_tax( 'post_format', 'post-format-chat' ) ) :
          esc_html_e( 'Chats', 'sparkling' );
        else :
          esc_html_e( 'Archives', 'sparkling' );
        endif;
      ?>

  </div>
</div>
</div>
          </div>

<div class="container">
    <div class="row">
        <div class="col-sm-12 categoryAchivePage">
          <?php if ( have_posts() ) : ?>

				<?php
					// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>
			<?php endwhile; ?>
			<?php sparkling_paging_nav(); ?>
		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

        </div>
    </div>
</div>

<?php get_footer(); ?>
