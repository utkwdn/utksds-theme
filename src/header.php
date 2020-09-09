<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package UT_DS
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<?php  get_template_part( 'template-parts/part-head' ); ?>

<body <?php body_class(); ?>>
<?php
  wp_body_open();
  $menu_type = get_theme_mod( 'menu_type' );
  $site_width = get_theme_mod( 'site_width' );
  $site_parentunit_show = get_theme_mod( 'site_parentunit_show' );
  $site_parentunit_name = get_theme_mod( 'site_parentunit_name' );
  $site_parentunit_link = get_theme_mod( 'site_parentunit_link' );
?>
<a class="sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'ut-ds' ); ?></a>
<?php
  get_template_part( 'template-parts/region-headsearch' );
?>

<div id="page" class="container<?php if ($site_width == "full-width") { ?>-fluid<?php }; ?>">
      <?php if ( get_header_image() ) : ?>
          <div id="site-header">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                  <img src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
              </a>
          </div>
      <?php endif; ?>
	<header id="masthead" class="site-header container<?php if ($site_width == "full-width") { ?>-fluid<?php }; ?> py-3 bg-light">
			<?php
			
			
			// Here is the function that puts a logo on the site. Regular UT logo by default, but if they upload a custom logo via the customizer, it'll display.
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
  				<div class="col-10 col-sm-6 col-md-4 col-lg-3 col-xl-3">
    				<a href="https://www.utk.edu"><img class="utk-header-logo mb-4 mb-md-0" src="<?php echo get_template_directory_uri(); ?>/assets/logo-header.svg" width="" height="" alt="The University of Tennessee, Knoxville"></a>
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
			    				<div class="row align-items-center">
  				<div class="col-10 col-sm-6 col-md-4 col-lg-3 col-xl-3">
    				<a href="https://www.utk.edu"><img class="utk-header-logo mb-4 mb-md-0" src="<?php echo get_template_directory_uri(); ?>/assets/logo-header.svg" width="" height="" alt="The University of Tennessee, Knoxville"></a>
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
  			endif;
        };
    ?>
   <!-- #site-navigation -->
	</header><!-- #masthead -->

  <?php  if ($menu_type == "bootstrap") { ?>
    <nav id="site-navigation" class="navbar navbar-expand-lg navbar-light bg-light navbar-bootstrap">
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
     </nav>
		<?php } elseif  ($menu_type == "horizontal") { ?>
    <nav id="site-navigation"   class="navbar-horizontal">
    	<button class="navbar-toggler" type="button" id="mobile-menu-close" data-toggle="site-navigation">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z"/></svg><span class="sr-only">Close Menu</span>
      </button>
      	<div id="bellows">
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
      	</div>
     </nav>
		<?php  }; ?>