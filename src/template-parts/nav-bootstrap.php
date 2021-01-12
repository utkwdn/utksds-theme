<?php
$site_width = get_theme_mod( 'site_width' );
?>
<nav id="site-navigation" class="navbar navbar-expand-lg navbar-light bg-smokey navbar-bootstrap">
	<?php if ($site_width != "full-width") { ?><div class="container"><?php }; ?>
    <?php 
      wp_nav_menu( array(
    	'theme_location'  => 'menu-1',
    	'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
    	'container'       => 'div',
    	'container_class' => 'collapse navbar-collapse',
    	'container_id'    => 'bs-example-navbar-collapse-1',
    	'menu_class'      => 'navbar-nav mr-auto',
    	'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
    	'walker'          => new WP_Bootstrap_Navwalker(),
    ) );
    ?>
	<?php if ($site_width != "full-width") { ?></div><?php }; ?>
</nav>