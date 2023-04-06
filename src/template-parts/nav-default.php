<?php if(has_nav_menu( 'menu-1' )){ ?>

	<nav class="offcanvas-lg offcanvas-end visible is-layout-constrained" tabindex="-1" id="offcanvasResponsive" aria-labelledby="offcanvasResponsiveLabel">
  <div class="offcanvas-header">
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasResponsive" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">

 
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
	 </div> 
</nav>
<?php } ?>
