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

get_template_part( 'template-parts/part-startheader' );
get_template_part( 'template-parts/inc-breadcrumb' );

if ( have_posts() ) : ?>
  <header class="page-header">
    <?php get_template_part( 'template-parts/inc-breadcrumb' ); ?>
    <h1 class="page-title">
      <?php
      /* translators: %s: search query. */
      printf( esc_html__( 'Search Results for: %s', 'ut-ds' ), '<span>' . get_search_query() . '</span>' );
      ?>
    </h1>
  </header><!-- .page-header -->

<?php
  get_template_part( 'template-parts/part-endheader' );
  get_template_part( 'template-parts/nav-left-rail' ); 

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
<?php
get_footer();