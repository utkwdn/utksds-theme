<?php
  $site_width = get_theme_mod( 'site_width' );
  if ( is_active_sidebar( 'sidebar-2' ) || is_active_sidebar( 'sidebar-3' ) ||	is_active_sidebar( 'sidebar-4' ) ||	is_active_sidebar( 'sidebar-5' )	) : ?>

<div id="extended-footer">
  <div class="container-xxl"> 
    <div class="row">

  <?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
    <div id="second" class="col-lg" role="complementary">
      <?php dynamic_sidebar( 'sidebar-2' ); ?>
    </div>
    <!-- #second .widget-area -->
  <?php endif; ?>
  
  
  <?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
    <div id="third" class="col-lg" role="complementary">
       <?php dynamic_sidebar( 'sidebar-3' ); ?>
    </div>
    <!-- #third .widget-area -->
  <?php endif; ?>
  
  
  <?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
    <div id="third" class="col-lg" role="complementary">
       <?php dynamic_sidebar( 'sidebar-4' ); ?>
    </div>
    <!-- #third .widget-area --> 
  <?php endif; ?>
  
  <?php if ( is_active_sidebar( 'sidebar-5' ) ) : ?>
    <div id="third" class="col-lg" role="complementary">
       <?php dynamic_sidebar( 'sidebar-5' ); ?>
    </div>
    <!-- #third .widget-area -->
  <?php endif; ?>

</div>
</div>
</div>
<!-- #linkdrawer -->
<?php endif; ?>
