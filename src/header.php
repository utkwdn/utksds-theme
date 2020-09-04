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
  get_template_part( 'template-parts/region-headsearch' );
?>
<a class="sr-only sr-only-focusable" href="#primary"><?php esc_html_e( 'Skip to content', 'ut-ds' ); ?></a>

<div id="page" class="container<?php if ($site_width != "max-width") { ?>-fluid<?php }; ?>">

	<header id="masthead" class="site-header py-5 px-4<?php if ($menu_type != "horizontal") { ?> bg-light<?php }; ?>">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="h1"><a class="text-reset text-decoration-none" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="h1"><a  class="text-reset text-decoration-none" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;

			 if ($site_parentunit_show == "show") { ?>
			    <p class="site-description lead"><?php if ($site_parentunit_link != "") { ?><a href="<?php echo $site_parentunit_link; ?>"><?php } echo $site_parentunit_name; ?><?php if ($site_parentunit_link != "") { ?></a><?php } ?></p>
			<?php } ?>
		</div><!-- .site-branding -->

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