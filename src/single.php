<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package UT_DS
 */

get_header();
?>
  	<div class="row pt-5">
    	<div class="col-12 col-xl-3">
				<?php
					get_template_part( 'template-parts/nav-left-rail' );
				?>
    	</div>
	   <main id="primary" class="col-12 col-md-8 col-xl-6">
     <?php get_template_part( 'template-parts/inc-breadcrumb' ); ?>

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'single' );



      $single_show_pager = get_theme_mod( 'single_show_pager' );
			if ($single_show_pager != "hide") { 
  			the_post_navigation(
  				array(
  					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'ut-ds' ) . '</span> <span class="nav-title">%title</span>',
  					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'ut-ds' ) . '</span> <span class="nav-title">%title</span>',
  				)
  			);
  	  };




			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

  	 </main><!-- #main -->

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
<?php
get_footer();


