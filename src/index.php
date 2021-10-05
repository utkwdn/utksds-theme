<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package UT_DS
 */

get_header();

$single_show_sidebar = get_theme_mod( 'single_show_sidebar' );
//$site_width = get_theme_mod( 'site_width' );
$menu_type = get_theme_mod( 'menu_type' );
$meta_publisheddate = get_theme_mod( 'meta_publisheddate' );
$meta_tax = get_theme_mod( 'meta_tax' );
$meta_byline = get_theme_mod( 'meta_byline' );
$meta_excerpt = get_theme_mod( 'meta_excerpt' );


if ( have_posts() ) :
  if ( is_home() && ! is_front_page() ) :
    get_template_part( 'template-parts/part-startheader' );
    get_template_part( 'template-parts/inc-breadcrumb' );
    get_template_part( 'template-parts/part-endheader' );
  endif;
 ?>

<div class="container-xxl">
  <div class="row">
      <div class="col-9 col-md-9 col-xl-9">
        <?php

        /* Start the Loop */
        while ( have_posts() ) :
          the_post();

          /*
          * Include the Post-Type-specific template for the content.
          * If you want to override this in a child theme, then include a file
          * called content-___.php (where ___ is the Post Type name) and that will be used instead.
          */
          get_template_part( 'template-parts/content', get_post_type() );

        endwhile;
        the_posts_navigation();

      else :
      get_template_part( 'template-parts/content', 'none' );
    endif;

    if ($single_show_sidebar != "hide") {
    ?>
      </div>
      <div class="col-12 col-md-4 col-xl-3">
          <?php get_sidebar(); ?>
      </div>
    <?php
    };
    ?>
    </div>
  </div>
<?php
get_footer();
