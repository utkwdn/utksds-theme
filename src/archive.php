<?php
/**
 * The template for displaying archive pages
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
    ?>
  
	   <main id="content">
        <div class="row bg-light pb-3 mb-3 no-gutters">
          <div class="container<?php if ($site_width == "full-width") { ?>-fluid<?php }; ?>">
            <?php get_template_part( 'template-parts/inc-breadcrumb' ); ?>

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->
      </div></div>
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

		?>
		<div class="container<?php if ($site_width == "full-width") { ?>-fluid<?php }; ?>">
      <?php 
			the_posts_navigation();
		?>
		</div>
      <?php 
		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
          </div>
      <?php 
        $single_show_sidebar = get_theme_mod( 'single_show_sidebar' );
			  if ($single_show_sidebar != "hide") { 
  		?>
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

