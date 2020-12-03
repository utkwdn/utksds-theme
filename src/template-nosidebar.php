<?php
/**
 * Template Name: Wide
 * Description: Full-width, without a sidebar
 *
 * @package WordPress
 * @subpackage utresponsive
 */


get_header();
      $site_width = get_theme_mod( 'site_width' );

?>

    <?php
      $menu_type = get_theme_mod( 'menu_type' );
      if ($menu_type == "horizontal") {
      } elseif ($menu_type == "bootstrap")  {
      } else {       
    ?>

    <?php } ?> 
	   <main id="content">
  <div class="row bg-light no-gutters mb-3 pb-3">
    <div class="container<?php if ($site_width == "full-width") { ?>-fluid<?php }; ?>">
      <?php ut_ds_post_thumbnail(); ?>
      <?php get_template_part( 'template-parts/inc-breadcrumb' ); ?>
      <?php
      // Is this the front page? And is this the switch to show the home page headline flipped?
      $site_homeheadline = get_theme_mod( 'site_homeheadline' );
      if (is_front_page() && $site_homeheadline=="hide"){
      
      } else {
      the_title( '<header class="entry-header"><h1 class="entry-title">', '</h1></header>' );
      }
      ?>
      <!-- .entry-header -->
    </div>
  </div>
  <div class="container<?php if ($site_width == "full-width") { ?>-fluid<?php }; ?>">
    <div class="row">
      <?php
      get_template_part( 'template-parts/nav-left-rail' );
      ?>
      <div class="col-12  <?php if ($menu_type == "horizontal") {  ?> col-xl-12<?php } elseif ($menu_type == "bootstrap")  { ?> col-xl-12<?php } else { ?> col-xl-9<?php } ?>">
      <?php    		
      while ( have_posts() ) :
      the_post();
      
  			get_template_part( 'template-parts/content', 'pagenoside' );
      
      
      endwhile; // End of the loop.
      ?>
      </div>
    </div>
  </div>
  	 </main><!-- #main -->
<?php
get_footer();