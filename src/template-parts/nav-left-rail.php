<?php
$menu_type = get_theme_mod( 'menu_type' );
$site_width = get_theme_mod( 'site_width' );
$site_parentunit_show = get_theme_mod( 'site_parentunit_show' );
$site_parentunit_name = get_theme_mod( 'site_parentunit_name' );
$site_parentunit_link = get_theme_mod( 'site_parentunit_link' );
$single_show_sidebar = get_theme_mod( 'single_show_sidebar' );

?>
<div class="container<?php if ($site_width == "full-width") { ?>-fluid<?php }; ?>">
<div class="row">
<?php
if ($menu_type == "horizontal") {
} elseif ($menu_type == "bootstrap")  {
} else {       
?>
<div class="col-12 col-xl-3">
  <nav id="site-navigation" class="navbar-leftrail">
    <button class="navbar-toggler" type="button" id="mobile-menu-close" data-toggle="site-navigation">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z"/></svg><span class="sr-only">Close Menu</span>
    </button>
    <div id="bellows">
  <nav>
     <?php
     wp_nav_menu([
     'theme_location'  => 'menu-1',
     'echo'            => true,
     'container'       => false,
     'container_class' => '',
     'container_id'    => '',
     'menu_class'      => 'w-auto', //example
     'menu_id'         => 'shop_menu_nav', //example
     'fallback_cb'     => 'wp_page_menu',
     'before'          => '',
     'after'           => '',
     'link_before'     => '',
     'link_after'      => '',
     'items_wrap'      => '<ul id="%1$s" class="%2$s" aria-labelledby="shop_menu_nav">%3$s</ul>',
     'depth'           => 0,
     'walker'          => new Bootstrap_Collapse_NavWalker()
   ]); ?>
  </nav>
    </div>
  </nav>
</div>
<?php }  if ( is_page_template( 'template-nosidebar.php' ) ) {
  ?>
    <div class="col-12  <?php if ($menu_type == "horizontal") {  ?> col-xl-12<?php } elseif ($menu_type == "bootstrap")  { ?> col-xl-12<?php } else { ?> col-xl-9<?php } ?>">
    <?php
      } else {
    ?>
      <div class="col-12  <?php if ($menu_type == "horizontal") {  ?> col-xl-9<?php } elseif ($menu_type == "bootstrap")  { ?> col-xl-9<?php } else { ?> col-xl-6<?php } ?>">
    <?php }?>