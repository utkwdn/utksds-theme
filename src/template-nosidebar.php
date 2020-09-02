<?php
/**
 * Template Name: Wide
 * Description: Full-width, without a sidebar
 *
 * @package WordPress
 * @subpackage utresponsive
 */


get_header();
?>

  	<div class="row pt-5">
    	<div class="col-12 col-xl-3">
				<?php
					get_template_part( 'template-parts/nav-left-rail' );
				?>
    	</div>
	   <main id="primary" class="col-12 col-md-10 col-xl-9">
     <?php get_template_part( 'template-parts/inc-breadcrumb' ); ?>
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
