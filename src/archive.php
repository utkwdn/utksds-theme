<?php
/**
* The template for displaying archive pages
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package UT_DS
*/

get_header();
$single_show_sidebar = get_theme_mod( 'single_show_sidebar' );
// $site_width = get_theme_mod( 'site_width' );
$menu_type = get_theme_mod( 'menu_type' );

get_template_part( 'template-parts/part-startheader' );
get_template_part( 'template-parts/inc-breadcrumb' );


if ( have_posts() ) : ?>

  <header class="page-header">
    <?php
      the_archive_title( '<h1 class="page-title">', '</h1>' );
      the_archive_description( '<div class="archive-description">', '</div>' );
    ?>
  </header><!-- .page-header -->

  <?php
    get_template_part( 'template-parts/part-endheader' );
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
          ?>
          <?php
            the_posts_navigation();
          ?>
        <?php
        else :
        get_template_part( 'template-parts/content', 'none' );
        endif;
      ?>
  <?php
    $single_show_sidebar = get_theme_mod( 'single_show_sidebar' );
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
