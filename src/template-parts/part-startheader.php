<?php
  $site_width = get_theme_mod( 'site_width' );
  $site_parentunit_show = get_theme_mod( 'site_parentunit_show' );
  $site_parentunit_name = get_theme_mod( 'site_parentunit_name' );
  $site_parentunit_link = get_theme_mod( 'site_parentunit_link' );
  ?>
<?php 
  if (is_singular() ) {
    ?> <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
 <?php
} ?>
  <div class="row bg-light no-gutters mb-3 pb-3">
    <div class="container<?php if ($site_width == "full-width") { ?>-fluid<?php }; ?>">
      
      
