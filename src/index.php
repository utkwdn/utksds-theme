<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package UT_DS
 */

get_header();
?>


    <?php
      $single_show_sidebar = get_theme_mod( 'single_show_sidebar' );
      $site_width = get_theme_mod( 'site_width' );
      $menu_type = get_theme_mod( 'menu_type' );
      $meta_publisheddate = get_theme_mod( 'meta_publisheddate' );
      $meta_tax = get_theme_mod( 'meta_tax' );
      $meta_byline = get_theme_mod( 'meta_byline' );
      $meta_excerpt = get_theme_mod( 'meta_excerpt' );
       ?>
	   <main id="content">
<!--   	    class="col-12 <?php if ($single_show_sidebar != "hide") { ?> col-md-8 <?php if ($menu_type == "horizontal") {  ?> col-xl-9<?php } elseif ($menu_type == "bootstrap")  { ?> col-xl-9<?php } else { ?> col-xl-6<?php } }; ?>" -->
		<?php
  		if ( have_posts() ) :
	  	if ( is_home() && ! is_front_page() ) :
		?>

        <div class="row bg-light pb-3 mb-3 no-gutters">
          <div class="container<?php if ($site_width == "full-width") { ?>-fluid<?php }; ?>">		
            <?php get_template_part( 'template-parts/inc-breadcrumb' ); ?>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		endif;

		if ( 'post' === get_post_type() ) :

			?>
			<div class="entry-meta small">


				<?php
		if ( is_singular() ) :
  				if ($meta_publisheddate != "hide") { 
	    			ut_ds_posted_on();
	    	  };
  				if ($meta_byline != "hide") { 
    				ut_ds_posted_by();
    		  };

		endif;




				?>
			</div><!-- .entry-meta -->
		<?php	 endif; ?>
	</header><!-- .entry-header -->
          </div></div>

				<?php
			endif;
			?>
      <div class="container<?php if ($site_width == "full-width") { ?>-fluid<?php }; ?>">
        <div class="row">
          <?php
					get_template_part( 'template-parts/nav-left-rail' );
				 ?>
    <div class="col-12  <?php if ($menu_type == "horizontal") {  ?> col-xl-9<?php } elseif ($menu_type == "bootstrap")  { ?> col-xl-9<?php } else { ?> col-xl-6<?php } ?>">
	    <?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;
		?><div class="container<?php if ($site_width == "full-width") { ?>-fluid<?php }; ?>">
      <?php 
			the_posts_navigation();
		?></div>
      <?php 
		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
      <?php 
        $single_show_sidebar = get_theme_mod( 'single_show_sidebar' );
			  if ($single_show_sidebar != "hide") { 
  		?>
      </div>
  		<div class="col-12 col-md-4 col-xl-3">
        <?php get_sidebar();		?>
      </div>
      <?php
  	    };
  	  ?>
        </div>
      </div>
  </main><!-- #main -->

<?php
get_footer();
