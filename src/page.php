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
    <?php
      $menu_type = get_theme_mod( 'menu_type' );
      if ($menu_type == "horizontal") {
      } elseif ($menu_type == "bootstrap")  {
      } else {       
    ?>
      <div class="col-12 col-xl-3">
				<?php
					get_template_part( 'template-parts/nav-left-rail' );
				?>
    	</div>
    <?php } ?> 
	   <main id="primary" class="col-12 col-md-8 <?php if ($menu_type == "horizontal") {  ?> col-xl-9<?php } elseif ($menu_type == "bootstrap")  { ?> col-xl-9<?php } else { ?> col-xl-6<?php } ?>">
     <?php get_template_part( 'template-parts/inc-breadcrumb' ); ?>
  		<?php
  		while ( have_posts() ) :
  			the_post();
  
  			get_template_part( 'template-parts/content', 'page' );
  
  
  		endwhile; // End of the loop.
  		?>
  	 </main><!-- #main -->
     <div class="col-12 col-md-4 col-xl-3">
    <?php get_sidebar();		?>
     </div>
  </div>
<?php
get_footer();
