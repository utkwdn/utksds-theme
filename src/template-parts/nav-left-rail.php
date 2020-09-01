

<nav id="site-navigation" >
	<button class="navbar-toggler" type="button" id="mobile-menu-close" data-toggle="site-navigation">
    <span class="navbar-toggler-icon"></span>Close Menu
  </button>
	<div id="bellows">
    <?php
      $sitemode = get_theme_mod( 'menu_type' );
      if ($sitemode == "horizontal") {
        echo utkds_list_child_pages();
      } else {
  			wp_nav_menu(
  				array(
  					'theme_location' => 'menu-1',
  					'menu_id'        => 'primary-menu',
  					'menu_class'        => 'list-unstyled',
  				)
  			);
      }
    ?> 
	</div>
</nav>