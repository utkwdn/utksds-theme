<?php
  $site_width = get_theme_mod( 'site_width' );
  $site_parentunit_show = get_theme_mod( 'site_parentunit_show' );
  $site_parentunit_name = get_theme_mod( 'site_parentunit_name' );
  $site_parentunit_link = get_theme_mod( 'site_parentunit_link' );
  if ( get_header_image() ) : ?>
          <div id="site-header">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                  <img src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
              </a>
          </div>
      <?php endif; ?>
	<header id="masthead" class="site-header">



  	<div class="container">
				<div class="row  justify-content-between py-3 py-md-4 py-lg-0">
          <button class="navbar-toggler col-auto mr-auto" type="button" id="mobile-menu-open" data-toggle="#site-navigation"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 6h-24v-4h24v4zm0 4h-24v4h24v-4zm0 8h-24v4h24v-4z"/></svg><span class="visually-hidden">Menu</span></button>

            <a class="text-reset text-decoration-none col-auto col-md-2 d-flex text-uppercase align-self-center" id="site-link" href="<?php echo esc_url( home_url( '/' ) ); ?>">
        			<?php
        			// Here is the function that puts a logo on the site. 
        			// Regular UT logo by default, but if they upload a custom logo via the customizer, it'll display.
        			$custom_logo_id = get_theme_mod( 'custom_logo' );
              $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
              if ( has_custom_logo() ) { ?>
                <img class="mb-4" src="<?php echo esc_url( $logo[0]  ); ?>" width="" height="" alt="<?php bloginfo( 'name' ); ?>"  rel="home">
              <?php  } else {
                // If it's the home page, let's use an H1. Otherwise, the page title will be the H1.
                if (  is_home() ) :
        			?>
        			  <h1 class="h6 site-title fw-light align-self-center"><?php bloginfo( 'name' ); ?></a></h1>
        			<?php  else : ?>
             		<span class="h6 site-title fw-light align-self-center"><?php bloginfo( 'name' ); ?></a></span>
             <?php endif; }; ?>
            </a>

        <?php get_template_part( 'template-parts/nav-default' ); ?>

        <button class="navbar-toggler col-auto ml-auto collapsed" type="button" data-bs-toggle="modal" data-bs-target="#searchModal" aria-label="Toggle search">
        <svg class="d-flex" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" id="searchHeader-open"><path d="M23.822 20.88l-6.353-6.354c.93-1.465 1.467-3.2 1.467-5.059.001-5.219-4.247-9.467-9.468-9.467s-9.468 4.248-9.468 9.468c0 5.221 4.247 9.469 9.468 9.469 1.768 0 3.421-.487 4.839-1.333l6.396 6.396 3.119-3.12zm-20.294-11.412c0-3.273 2.665-5.938 5.939-5.938 3.275 0 5.94 2.664 5.94 5.938 0 3.275-2.665 5.939-5.94 5.939-3.274 0-5.939-2.664-5.939-5.939z"/></svg>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" id="searchHeader-close"><path d="M23 20.168l-8.185-8.187 8.185-8.174-2.832-2.807-8.182 8.179-8.176-8.179-2.81 2.81 8.186 8.196-8.186 8.184 2.81 2.81 8.203-8.192 8.18 8.192z"/></svg>
        <span class="sr-only visually-hidden text-white">Search</span></button>
     </div>

			<?php
			
			
			// Here is the function that puts a logo on the site. 
			// Regular UT logo by default, but if they upload a custom logo via the customizer, it'll display.
			$custom_logo_id = get_theme_mod( 'custom_logo' );
      $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
      if ( has_custom_logo() ) { ?>
    				
  				<div class="col-5 mx-auto mx-md-0 col-sm-7 col-md-10 col-lg-4 col-xl-4 d-flex justify-content-center">
    				<a class="text-reset text-decoration-none" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img  src="<?php echo esc_url( $logo[0]  ); ?>" width="" height="" alt="<?php bloginfo( 'name' ); ?>"  rel="home"></a>
  				</div>
      <?php
      } else {
        // If it's the home page, let's use an H1. Otherwise, the page title will be the H1.
      if ( is_front_page() && is_home() ) :
				?>
  				<div class="col-5 mx-auto mx-md-0 col-sm-7 col-md-10 col-lg-4 col-xl-4 d-flex justify-content-center">
    				<a class="text-reset text-decoration-none text-uppercase font-weight-light" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><svg version="1.1" id="power-t" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 20.74 20.74" style="enable-background:new 0 0 20.74 20.74;" xml:space="preserve"><style type="text/css">.powert-orange{fill:#FF8200;}.powert-white{fill:#FFFFFF;}</style> <polygon class="powert-orange" points="20.74,20.74 20.74,0 0,0 0,20.74 20.74,20.74 "/><path class="powert-white" d="M18.12,2.62v5.23h-1.94c0-0.96-0.95-1.74-2.13-1.74c-0.86,0-1.6,0.42-1.94,1.02v6.54	c0,1.39,1.08,2.52,2.42,2.52h0.01v1.94H6.2v-1.94h0.01c1.34,0,2.42-1.13,2.42-2.52V7.12C8.29,6.52,7.55,6.1,6.69,6.1c-1.18,0-2.13,0.78-2.13,1.74H2.62V2.62H18.12L18.12,2.62z"/></svg>
     				<h1 class="h6 site-title font-weight-light d-none d-md-inline"><?php bloginfo( 'name' ); ?></a></h1>
  				</a>
				</div>
				<?php  else : ?>

  
  				<div class="col-5 mx-auto mx-md-0 col-sm-7 col-md-10 col-lg-4 col-xl-4 d-flex justify-content-center">
    				<a class="text-reset text-decoration-none text-uppercase font-weight-light" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><svg version="1.1" id="power-t" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 20.74 20.74" style="enable-background:new 0 0 20.74 20.74;" xml:space="preserve"><style type="text/css">.powert-orange{fill:#FF8200;}.powert-white{fill:#FFFFFF;}</style> <polygon class="powert-orange" points="20.74,20.74 20.74,0 0,0 0,20.74 20.74,20.74 "/><path class="powert-white" d="M18.12,2.62v5.23h-1.94c0-0.96-0.95-1.74-2.13-1.74c-0.86,0-1.6,0.42-1.94,1.02v6.54	c0,1.39,1.08,2.52,2.42,2.52h0.01v1.94H6.2v-1.94h0.01c1.34,0,2.42-1.13,2.42-2.52V7.12C8.29,6.52,7.55,6.1,6.69,6.1c-1.18,0-2.13,0.78-2.13,1.74H2.62V2.62H18.12L18.12,2.62z"/></svg>
     				<span class="h6 site-title font-weight-light d-none d-md-inline"><?php bloginfo( 'name' ); ?></a></span>
  				</a>
				</div>
				<?php
  			endif;
        };
    ?>
    

<?php get_template_part( 'template-parts/nav-default' ); ?>
  
        <button class="navbar-toggler col-auto ml-auto collapsed" type="button" data-toggle="modal" data-target="#searchModal" aria-label="Toggle search">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" id="searchHeader-open"><path d="M23.822 20.88l-6.353-6.354c.93-1.465 1.467-3.2 1.467-5.059.001-5.219-4.247-9.467-9.468-9.467s-9.468 4.248-9.468 9.468c0 5.221 4.247 9.469 9.468 9.469 1.768 0 3.421-.487 4.839-1.333l6.396 6.396 3.119-3.12zm-20.294-11.412c0-3.273 2.665-5.938 5.939-5.938 3.275 0 5.94 2.664 5.94 5.938 0 3.275-2.665 5.939-5.94 5.939-3.274 0-5.939-2.664-5.939-5.939z"/></svg>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" id="searchHeader-close"><path d="M23 20.168l-8.185-8.187 8.185-8.174-2.832-2.807-8.182 8.179-8.176-8.179-2.81 2.81 8.186 8.196-8.186 8.184 2.81 2.81 8.203-8.192 8.18 8.192z"/></svg>
        <span class="sr-only visually-hidden text-white">Search</span></button>

   <!-- #site-navigation -->
	</header><!-- #masthead -->