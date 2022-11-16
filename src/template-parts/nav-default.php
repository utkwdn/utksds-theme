<?php if(has_nav_menu( 'menu-1' )){ ?>
<nav id="site-navigation"   class="offcanvas-lg offcanvas-start nav-primary">
<button class="btn btn-primary d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#site-navigation" aria-controls="site-navigation" aria-label="Toggle Navigation">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="btn-hambuger"><path d="M24 6h-24v-4h24v4zm0 4h-24v4h24v-4zm0 8h-24v4h24v-4z"></path></svg>
      <!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg btn-close" viewBox="0 0 16 16"><path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/></svg> -->
    </button>
	  	<?php
  			wp_nav_menu(
  				array(
  					'theme_location' => 'menu-1',
  					'container'      => 'ul',
					'fallback_cb'      => false,
           			'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
  					'menu_id'        => 'primary-menu',
  					'menu_class'        => 'list-unstyled utwds-nav-menu',
  				)
  			);
     ?> 
</nav>
<?php } ?>