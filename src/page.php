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
?>

  	<div class="row pt-5">
    	<div class="col-12  col-xl-2">
				<?php
					get_template_part( 'template-parts/nav-left-rail' );
				?>
    	</div>
	   <main id="primary" class="col-12 col-md-8 col-xl-8">
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
     <div class="col-12 col-md-4 col-xl-2">
    <?php get_sidebar();		?>
     </div>
  </div>
<?php
get_footer();
