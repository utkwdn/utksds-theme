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

  	<div class="row pt-lg-5">
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
	   <main id="content" class="col-12  <?php if ($menu_type == "horizontal") {  ?> col-xl-12<?php } elseif ($menu_type == "bootstrap")  { ?> col-xl-12<?php } else { ?> col-xl-9<?php } ?>">
     <?php get_template_part( 'template-parts/inc-breadcrumb' ); ?>
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
