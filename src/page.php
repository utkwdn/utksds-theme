<?php
/**
* The template for displaying all pages
*
* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages
* and that other 'pages' on your WordPress site may use a
* different template.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package UT_DS
*/

get_header();
$site_width = get_theme_mod( 'site_width' );
$menu_type = get_theme_mod( 'menu_type' );
$site_homeheadline = get_theme_mod( 'site_homeheadline' );

get_template_part( 'template-parts/part-startheader' );
get_template_part( 'template-parts/inc-breadcrumb' ); 
ut_ds_post_thumbnail(); 

// Is this the front page? And is this the switch to show the home page headline flipped?
if (is_front_page() && $site_homeheadline=="hide"){
} else {
  the_title( '<header class="entry-header"><h1 class="entry-title">', '</h1></header>' );
  get_template_part( 'template-parts/part-endheader' );
}
?>
<!-- .entry-header -->
<?php get_template_part( 'template-parts/nav-left-rail' );    		

while ( have_posts() ) :
  the_post();
  get_template_part( 'template-parts/content', 'page' );
endwhile; // End of the loop.
?>
</div>
<div class="col-12 col-xl-3">
  <?php get_sidebar();		?>
</div>
</div>
</div>
<?php
get_footer();