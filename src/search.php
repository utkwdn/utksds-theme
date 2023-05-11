<?php
/**
* The template for displaying search results pages
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
*
* @package UT_DS
*/

get_header();
$menu_type = get_theme_mod( 'menu_type' );

get_template_part( 'template-parts/part-startheader' );
get_template_part( 'template-parts/inc-breadcrumb' );



if ( have_posts() ) : ?>
  <header class="page-header">
    <h1 class="page-title">
      <?php
      /* translators: %s: search query. */
      printf( esc_html__( 'Search Results for: %s', 'ut-ds' ), '<span>' . get_search_query() . '</span>' );
      ?>
    </h1>
  </header><!-- .page-header -->

<?php
  get_template_part( 'template-parts/part-endheader' );
?>
<div class="entry-content container-xxl">


<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Results for <?php bloginfo( 'name' ); ?></button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">All of utk.edu</button>
  </li>

</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
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
  <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
    <form class="form-inline hidden-print mt-4" id="cse-searchbox-form">
      <div class="mb-3 input-group">
        <label class="sr-only visually-hidden" for="q">Search</label>
        <input type="search" class="form-control" title="Search utk.edu" placeholder="Example: Apply, Payroll, Provost, English Department"  name="q" id="q">
        <button type="submit" name="btnG" class="btn btn-utlink">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" aria-hidden="true" viewBox="0 0 16 16">
          <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
        </svg> <span class="visually-hidden">Search</span></button>
      </div>
    </form>
    <div class="gcse-searchresults-only" data-gname="this-site-results" data-enableImageSearch="false" data-enableOrderBy="false"></div>


  </div>
</div>



  </div>

</div>  	 
<?php
get_footer();