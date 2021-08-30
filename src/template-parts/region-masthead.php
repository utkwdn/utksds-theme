<?php
  $site_width = get_theme_mod( 'site_width' );
  $site_parentunit_show = get_theme_mod( 'site_parentunit_show' );
  $site_parentunit_name = get_theme_mod( 'site_parentunit_name' );
  $site_parentunit_link = get_theme_mod( 'site_parentunit_link' );
  $site_header = get_theme_mod( 'site_bigheader' );
  if ( get_header_image() ) : ?>
          <div id="site-header">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                  <img src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
              </a>
          </div>
      <?php endif; ?>
	<header id="masthead" class="site-header">


 	<div class="container-xxl">
				<div class="row  justify-content-between py-2  py-lg-0">
  				<div class="col-10<?php if ($site_header == "two") { ?> col-md-12<?php } else { ?> col-md-10 col-lg-3 col-xl-4<?php }; ?> d-flex">
			<?php
			// Here is the function that puts a logo on the site. 
			// Regular UT logo by default, but if they upload a custom logo via the customizer, it'll display.
			$custom_logo_id = get_theme_mod( 'custom_logo' );
      $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
            if ( has_custom_logo() ) { ?>

  				<div class="d-flex justify-content-center justify-content-lg-start"><a class="text-reset text-decoration-none d-flex my-md-2" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="site-logo align-self-center" src="<?php echo esc_url( $logo[0]  ); ?>" width="" height="" alt="<?php bloginfo( 'name' ); ?>"  rel="home"></a></div>


        <?php } elseif ( is_front_page() || is_home() ) { ?>
    				<a class="text-reset d-flex text-decoration-none text-uppercase align-self-center font-weight-light my-md-2" id="site-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
     				    <h1 class="site-title fw-light align-self-center mb-0"><?php bloginfo( 'name' ); ?></h1>
  				  </a>

				<?php  } else { ?>  
    				<a class="text-reset d-flex text-decoration-none text-uppercase align-self-center font-weight-light my-md-2" id="site-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
     				  <span class="site-title fw-light align-self-center mb-0"><?php bloginfo( 'name' ); ?></a></span>
  		  		</a>
    				<?php  }; ?>

  				</div>
            <button class="navbar-toggler col" type="button" id="mobile-menu-open" data-toggle="#site-navigation"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 6h-24v-4h24v4zm0 4h-24v4h24v-4zm0 8h-24v4h24v-4z"></path></svg><span class="visually-hidden">Menu</span></button>

            <?php get_template_part( 'template-parts/nav-default' ); ?>
				</div>
 	</div>




   <!-- #site-navigation -->
	</header><!-- #masthead -->