<?php
/**
* The template for displaying all single posts
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
*
* @package UT_DS
*/

get_header();
$menu_type = get_theme_mod( 'menu_type' );
$single_show_pubdate = get_theme_mod( 'single_show_pubdate' );
$single_show_byline = get_theme_mod( 'single_show_byline' );
$single_show_sidebar = get_theme_mod( 'single_show_sidebar' );
$single_tax = get_theme_mod( 'single_tax' );
$single_show_pager = get_theme_mod( 'single_show_pager' );

ut_ds_post_thumbnail(); 
get_template_part( 'template-parts/part-startheader' ); 
get_template_part( 'template-parts/inc-breadcrumb' ); ?>

<header class="entry-header col-12">
  <?php
    if ( is_singular() ) :
      the_title( '<h1 class="entry-title">', '</h1>' );
    else :
      the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" class="text-reset" rel="bookmark">', '</a></h2>' );
    endif;
    
    if ( 'post' === get_post_type() ) :
  ?>
  <div class="entry-meta small mb-5">
    <?php
      if ($single_show_pubdate != "hide") { 
        ut_ds_posted_on();
      };
      if ($single_show_byline != "hide") { 
        ut_ds_posted_by();
      };
    ?>
  </div><!-- .entry-meta -->
  <?php	 endif; ?>
</header><!-- .entry-header -->

<?php
  get_template_part( 'template-parts/part-endheader' );
  get_template_part( 'template-parts/nav-left-rail' );

  while ( have_posts() ) :
    the_post();
    get_template_part( 'template-parts/content', 'single' );
// If comments are open or we have at least one comment, load up the comment template.
    if ( comments_open() || get_comments_number() ) :
      comments_template();
    endif;
  endwhile; // End of the loop.
?>
</div>
<?php 
  if ($single_show_sidebar != "hide") { 
?>
  <div class="col-12 col-md-4 col-xl-3">
    <?php get_sidebar(); ?>
  </div>
<?php
};
get_footer();