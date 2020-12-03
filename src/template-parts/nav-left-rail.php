

    <?php
      $sitemode = get_theme_mod( 'menu_type' );
      if ($sitemode == "horizontal") {

      } elseif ($sitemode == "bootstrap")  {
      } else {       
        ?>
      <div class="col-12 col-xl-3">
<nav id="site-navigation" class="navbar-leftrail">
	<button class="navbar-toggler" type="button" id="mobile-menu-close" data-toggle="site-navigation">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z"/></svg><span class="sr-only">Close Menu</span>
  </button>
	<div id="bellows">
        <?php
  			wp_nav_menu(
  				array(
  					'theme_location' => 'menu-1',
  					'menu_id'        => 'primary-menu',
  					'menu_class'        => 'list-unstyled',
  				)
  			);
        ?>
	</div>
</nav>
      </div>
        <?php
      }
    ?> 
