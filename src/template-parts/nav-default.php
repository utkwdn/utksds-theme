<nav id="site-navigation"   class="navbar-horizontal col-auto g-0">
<button class="navbar-toggler" type="button" id="mobile-menu-close" data-toggle="collapse" data-target="#site-navigation" aria-controls="site-navigation" aria-expanded="false" aria-label="Toggle navigation">
  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z"/></svg><span class="visually-hidden">Close Menu</span>
    </button>
  	<?php
  			wp_nav_menu(
  				array(
  					'theme_location' => 'menu-1',
           	'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
  					'menu_id'        => 'primary-menu',
  					'menu_class'        => 'list-unstyled',
  				)
  			);
     ?> 
</nav>