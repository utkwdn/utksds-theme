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
$menu_type = get_theme_mod( 'menu_type' );
$site_homeheadline = get_theme_mod( 'site_homeheadline' );

ut_ds_post_thumbnail();
get_template_part( 'template-parts/part-startheader' );
get_template_part( 'template-parts/inc-breadcrumb' );
the_title( '<header class="entry-header col-12"><h1 class="entry-title display-4 orange-mark">', '</h1></header>' );
get_template_part( 'template-parts/part-endheader' );

while ( have_posts() ) :
  the_post();
  get_template_part( 'template-parts/content', 'pagenoside' );
endwhile; // End of the loop.
?>
</div>
<?php
get_footer();
