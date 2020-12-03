<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package UT_DS
 */

get_header();
$site_width = get_theme_mod( 'site_width' );
$menu_type = get_theme_mod( 'menu_type' );

?>
<main id="content">
 
		<?php if ( have_posts() ) : ?>
      <div class="row bg-light no-gutters mb-3 pb-3">
        <div class="container<?php if ($site_width == "full-width") { ?>-fluid<?php }; ?>">
       <header class="page-header">
     <?php get_template_part( 'template-parts/inc-breadcrumb' ); ?>
				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'ut-ds' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</header><!-- .page-header -->
        </div></div>
        

  <div class="container<?php if ($site_width == "full-width") { ?>-fluid<?php }; ?>">
    <div class="row">
      <?php get_template_part( 'template-parts/nav-left-rail' ); ?>
      <div class="col-12  <?php if ($menu_type == "horizontal") {  ?> col-xl-9<?php } elseif ($menu_type == "bootstrap")  { ?> col-xl-9<?php } else { ?> col-xl-6<?php } ?>">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
      </div>
     <div class="col-12 col-xl-3">
    <?php get_sidebar();		?>
     </div>
    </div>
  	 </main><!-- #main -->
  	 
<?php
get_footer();
