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


 	<div class="title-bar is-layout-constrained">
				<div class="title-area">
  				<div class="d-flex">
			<?php
			// Here is the function that puts a logo on the site.
			// Regular UT logo by default, but if they upload a custom logo via the customizer, it'll display.
			$custom_logo_id = get_theme_mod( 'custom_logo' );
      $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
            if ( has_custom_logo() ) { ?>

  				<div class="d-flex "><a class="text-reset text-decoration-none d-flex my-md-2" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="site-logo " src="<?php echo esc_url( $logo[0]  ); ?>" width="" height="" alt="<?php bloginfo( 'name' ); ?>"  rel="home"></a></div>


        <?php } elseif ( is_front_page() || is_home() ) { ?>
    				<a class="text-reset d-flex text-decoration-none  font-weight-light my-md-2" id="site-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
     				    <h1 class="site-title fw-light mb-0"><?php bloginfo( 'name' ); ?></h1>
  				  </a>

				<?php  } else { ?>
    				<a class="text-reset d-flex text-decoration-none  font-weight-light my-md-2" id="site-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
     				  <span class="site-title fw-light  mb-0"><?php bloginfo( 'name' ); ?></span>
  		  		</a>
    				<?php  }; ?>

  				</div>
				  <!-- <button class="btn btn-primary d-lg-none " type="button" data-bs-toggle="offcanvas" data-bs-target="#site-navigation" aria-controls="site-navigation" aria-label="Toggle Navigation">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="btn-hambuger"><path d="M24 6h-24v-4h24v4zm0 4h-24v4h24v-4zm0 8h-24v4h24v-4z"></path></svg>
    
    </button> -->

	<button class="btn btn-primary d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasResponsive" aria-controls="offcanvasRight" > 
		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="btn-hambuger"><path d="M24 6h-24v-4h24v4zm0 4h-24v4h24v-4zm0 8h-24v4h24v-4z"></path></svg></button>


				</div>
 	</div>
	 <?php get_template_part( 'template-parts/nav-default' ); ?>




   <!-- #site-navigation -->
	</header><!-- #masthead -->

