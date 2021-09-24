<?php
/**
* The template for displaying 404 pages (not found)
*
* @link https://codex.wordpress.org/Creating_an_Error_404_Page
*
* @package UT_DS
*/
get_header();

$single_show_sidebar = get_theme_mod( 'single_show_sidebar' );
//$site_width = get_theme_mod( 'site_width' );
$menu_type = get_theme_mod( 'menu_type' );
$meta_publisheddate = get_theme_mod( 'meta_publisheddate' );
$meta_tax = get_theme_mod( 'meta_tax' );
$meta_byline = get_theme_mod( 'meta_byline' );
$meta_excerpt = get_theme_mod( 'meta_excerpt' );
get_template_part( 'template-parts/part-startheader' );
get_template_part( 'template-parts/inc-breadcrumb' );
?>
<header>
  <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'ut-ds' ); ?></h1>
</header>
<?php
get_template_part( 'template-parts/part-endheader' );
?>
<section class="error-404 not-found container-xxl">
  <div class="row">
      <div class="col-9 col-md-9 col-xl-9">
          <!-- .page-header -->

      <p><?php esc_html_e( ' We’re sorry. It looks like nothing was found at this location.', 'ut-ds' ); ?></p>


      <p>If you followed a link from a page, please go “Back” in your browser and inform the site administrator of the referring page.</p>

      <p>If you are looking for a specific page, try searching.</p>
      <p><button type="button"  class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#searchModal" aria-label="Toggle search"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 24 24" id="searchHeader-open"><path d="M23.822 20.88l-6.353-6.354c.93-1.465 1.467-3.2 1.467-5.059.001-5.219-4.247-9.467-9.468-9.467s-9.468 4.248-9.468 9.468c0 5.221 4.247 9.469 9.468 9.469 1.768 0 3.421-.487 4.839-1.333l6.396 6.396 3.119-3.12zm-20.294-11.412c0-3.273 2.665-5.938 5.939-5.938 3.275 0 5.94 2.664 5.94 5.938 0 3.275-2.665 5.939-5.94 5.939-3.274 0-5.939-2.664-5.939-5.939z"></path></svg><span>Search</span></button></p>





    </div><!-- .page-content -->


  </div>
</section><!-- .error-404 -->
<?php
get_footer();
