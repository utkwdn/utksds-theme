<?php
/**
 * Template Name: Blank
 * Description: Full-width, without a sidebar or header or navigation
 *
 * @package WordPress
 * @subpackage utresponsive
 */


get_header();
?>

  	<div class="container-fluid pt-5">
	   <main id="primary">
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
