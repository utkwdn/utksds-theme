<?php
/**
 * Template Name: Blank
 * Description: Full-width, without a sidebar or header or navigation
 *
 * @package WordPress
 * @subpackage utresponsive
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<?php  get_template_part( 'template-parts/part-head' ); ?>

<body <?php body_class(); ?>>
<?php
  wp_body_open();
  $menu_type = get_theme_mod( 'menu_type' );
  $site_width = get_theme_mod( 'site_width' );
  ?>
  <a class="sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'ut-ds' ); ?></a>
  <?php
  get_template_part( 'template-parts/region-headsearch' );
?>

  	<div class="container<?php if ($site_width == "full-width") { ?>-fluid<?php }; ?>">
	   <main id="content" class="row">
  		<?php
  		while ( have_posts() ) :
  			the_post();
  
  			get_template_part( 'template-parts/content', 'page' );

  		endwhile; // End of the loop.
  		?>
  	 </main><!-- #main -->
  </div>
<?php
get_footer();
