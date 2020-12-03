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

?>

<?php
$menu_type = get_theme_mod( 'menu_type' );
?> 


<main id="content">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <?php ut_ds_post_thumbnail(); ?>
      <?php
      // Is this the front page? And is this the switch to show the home page headline flipped?
      $site_homeheadline = get_theme_mod( 'site_homeheadline' );
      if (is_front_page() && $site_homeheadline=="hide"){
        } else {
      ?>        
      <div class="row bg-light no-gutters mb-3 pb-3">
        <div class="container<?php if ($site_width == "full-width") { ?>-fluid<?php }; ?>">
          <?php get_template_part( 'template-parts/inc-breadcrumb' ); ?>
            <?php
              the_title( '<header class="entry-header"><h1 class="entry-title">', '</h1></header>' );
            ?>
        </div>
      </div>
      <?php
       }
      ?>
      <!-- .entry-header -->

  <div class="container<?php if ($site_width == "full-width") { ?>-fluid<?php }; ?>">
    <div class="row">
      <?php get_template_part( 'template-parts/nav-left-rail' ); ?>
      <div class="col-12  <?php if ($menu_type == "horizontal") {  ?> col-xl-9<?php } elseif ($menu_type == "bootstrap")  { ?> col-xl-9<?php } else { ?> col-xl-6<?php } ?>">
      <?php    		
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
</article><!-- #post-<?php the_ID(); ?> -->
</main><!-- #main -->
<?php
get_footer();
