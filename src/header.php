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
  get_template_part( 'template-parts/region-headsearch' );
?>
<a class="sr-only sr-only-focusable" href="#primary"><?php esc_html_e( 'Skip to content', 'ut-ds' ); ?></a>

<div id="page" class="container-fluid">

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
			$ut_ds_description = get_bloginfo( 'description', 'display' );
			if ( $ut_ds_description || is_customize_preview() ) :
				?>
				<p class="site-description lead"><?php echo $ut_ds_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

   <!-- #site-navigation -->
	</header><!-- #masthead -->

  <?php
    if ($menu_type == "horizontal") { ?>
    <nav id="site-horizontal-navigation"  class="navbar navbar-expand-lg navbar-light bg-light">
      <?php
  			wp_nav_menu(
  				array(
  					'theme_location' => 'menu-1',
  					'menu_id'        => 'primary-menu',
  					'menu_class'     => 'navbar-nav',
  					'depth'          => "1",
  				)
  			);
  		?>
    </nav>
		<?php
      };
  ?> 

