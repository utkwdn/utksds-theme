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
	<header id="masthead" class="site-header py-3">
  	<?php if ($site_width != "full-width") { ?><div class="container"><?php }; ?>
			<?php
			
			
			// Here is the function that puts a logo on the site. 
			// Regular UT logo by default, but if they upload a custom logo via the customizer, it'll display.
			$custom_logo_id = get_theme_mod( 'custom_logo' );
      $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
      if ( has_custom_logo() ) { ?>
    				
				<div class="row align-items-center">
  				<div class="col-10 col-md-9 col-lg-6 col-xl-4">
    				<a class="text-reset text-decoration-none" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="mb-4" src="<?php echo esc_url( $logo[0]  ); ?>" width="" height="" alt="<?php bloginfo( 'name' ); ?>"  rel="home"></a>
  				</div>
				</div>
      <?php
      } else {
        // If it's the home page, let's use an H1. Otherwise, the page title will be the H1.
      if ( is_front_page() && is_home() ) :
				?>
				<div class="row align-items-center">
  				<div class="col">
    				      				<svg version="1.1" id="power-t" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 20.74 20.74" style="enable-background:new 0 0 20.74 20.74;" xml:space="preserve"><style type="text/css">.powert-orange{fill:#FF8200;}.powert-white{fill:#FFFFFF;}</style>
                <polygon class="powert-orange" points="20.74,20.74 20.74,0 0,0 0,20.74 20.74,20.74 "/><path class="powert-white" d="M18.12,2.62v5.23h-1.94c0-0.96-0.95-1.74-2.13-1.74c-0.86,0-1.6,0.42-1.94,1.02v6.54
	c0,1.39,1.08,2.52,2.42,2.52h0.01v1.94H6.2v-1.94h0.01c1.34,0,2.42-1.13,2.42-2.52V7.12C8.29,6.52,7.55,6.1,6.69,6.1
	c-1.18,0-2.13,0.78-2.13,1.74H2.62V2.62H18.12L18.12,2.62z"/>
              </svg>

  				</div>
  				<div class="ml-xl-4 col-auto">
    				<?php
      				if ($site_parentunit_show == "show") { ?>
			          <p class="site-description mb-0"><?php if ($site_parentunit_link != "") { ?><a class="small text-reset text-decoration-none text-uppercase" href="<?php echo $site_parentunit_link; ?>"><?php } echo $site_parentunit_name; ?><?php if ($site_parentunit_link != "") { ?></a><?php } ?></p>
			      <?php } ?>
     				<h1 class="h3"><a class="text-reset text-decoration-none" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"> <?php bloginfo( 'name' ); ?></a></h1>
  				</div>
				</div>
				<?php
			    else : ?>
			    				<div class="row align-items-center mx-0 no-gutters">
  				<div class="col-12 col-lg-8 align-items-center row mx-0">
<!--     				<a href="https://www.utk.edu"> -->
      				
      				<svg version="1.1" id="power-t" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 20.74 20.74" style="enable-background:new 0 0 20.74 20.74;" xml:space="preserve"><style type="text/css">.powert-orange{fill:#FF8200;}.powert-white{fill:#FFFFFF;}</style>
                <polygon class="powert-orange" points="20.74,20.74 20.74,0 0,0 0,20.74 20.74,20.74 "/><path class="powert-white" d="M18.12,2.62v5.23h-1.94c0-0.96-0.95-1.74-2.13-1.74c-0.86,0-1.6,0.42-1.94,1.02v6.54
	c0,1.39,1.08,2.52,2.42,2.52h0.01v1.94H6.2v-1.94h0.01c1.34,0,2.42-1.13,2.42-2.52V7.12C8.29,6.52,7.55,6.1,6.69,6.1
	c-1.18,0-2.13,0.78-2.13,1.74H2.62V2.62H18.12L18.12,2.62z"/>
              </svg>

<!--       				<img class="utk-header-logo mb-4 mb-md-0" src="<?php echo get_template_directory_uri(); ?>/assets/logo-header.svg" width="" height="" alt="The University of Tennessee, Knoxville"> -->
<!--       				</a> -->
<!--
  				</div>
  				<div class="ml-xl-4 col-auto">
-->
    				<?php
      				if ($site_parentunit_show == "show") { ?>
			          <p class="site-description mb-0"><?php if ($site_parentunit_link != "") { ?><a class="small text-reset text-decoration-none text-uppercase" href="<?php echo $site_parentunit_link; ?>"><?php } echo $site_parentunit_name; ?><?php if ($site_parentunit_link != "") { ?></a><?php } ?></p>
			      <?php } ?>
     				<h1 class="h3"><a class="text-reset text-decoration-none" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"> <?php bloginfo( 'name' ); ?></a></h1>
  				</div>

         <form  class="form-inline hidden-print col-12 col-lg-4 mt-3 mt-lg-0" name="utk_seek_site" method="post" accept-charset="iso-8859-1" action="//www.utk.edu/masthead/query.php">
            <div class="form-group col-12 row no-gutters p-0">
              <input type="text" name="qt"  class="form-control col-8 pl-2"   onfocus="if(this.value == 'Search this site') { this.value = ''; }" placeholder="Search this site" title="search">
              <input type="hidden" name="qtype" value="site_utk:<?php echo esc_url( home_url( '/' ) ); ?>">
              <input type="hidden" name="col" value="utk">
              <input name="go" type="submit" title="Submit" class="btn btn-primary col-4" value="Search">
            </div>
          </form>    
    

				</div>
				<?php
  			endif;
        };
    ?>
    
    
 
      	<?php if ($site_width != "full-width") { ?></div><?php }; ?>

   <!-- #site-navigation -->
	</header><!-- #masthead -->
