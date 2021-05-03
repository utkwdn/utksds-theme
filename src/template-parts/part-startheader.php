<?php
  $site_parentunit_show = get_theme_mod( 'site_parentunit_show' );
  $site_parentunit_name = get_theme_mod( 'site_parentunit_name' );
  $site_parentunit_link = get_theme_mod( 'site_parentunit_link' );
  ?>
<?php 
  if (is_singular() ) {
    ?> <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
 <?php
} ?>

<div class="bg-light pt-5">
<div class="container">
  <div class="row no-gutters mb-3 pb-3">
      
      
