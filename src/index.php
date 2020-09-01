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


  	<div class="row pt-5">
    	<div class="col-12  col-xl-2">
				<?php
					get_template_part( 'template-parts/nav-left-rail' );
				?>
    	</div>

	   <main id="primary" class="col-12 col-md-8 col-xl-8">
     <?php get_template_part( 'template-parts/inc-breadcrumb' ); ?>
		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title sr-only"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

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

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

  	 </main><!-- #main -->
     <div class="col-12 col-md-4 col-xl-2">
        <?php get_sidebar();		?>
     </div>
  </div>
<?php
get_footer();
