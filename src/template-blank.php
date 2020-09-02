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
  ?>
  <a class="sr-only sr-only-focusable" href="#primary"><?php esc_html_e( 'Skip to content', 'ut-ds' ); ?></a>
  <?php
  get_template_part( 'template-parts/region-headsearch' );
?>

  	<div class="container-fluid">
	   <main id="primary" class="row">
  		<?php
  		while ( have_posts() ) :
  			the_post();
  
  			get_template_part( 'template-parts/content', 'page' );
  
  			// If comments are open or we have at least one comment, load up the comment template.
  			if ( comments_open() || get_comments_number() ) :
  				comments_template();
  			endif;
  
  		endwhile; // End of the loop.
  		?>
  	 </main><!-- #main -->
  </div>
<?php
get_footer();
