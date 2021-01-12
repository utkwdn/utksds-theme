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
<a class="sr-only sr-only-focusable position-absolute visually-hidden visually-hidden-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'ut-ds' ); ?></a>
<?php
  get_template_part( 'template-parts/region-headsearch' );
  get_template_part( 'template-parts/region-masthead' );
?>


  <?php  if ($menu_type == "bootstrap") { 
      get_template_part( 'template-parts/nav-bootstrap' );
     } elseif  ($menu_type == "megamenu") { 
         get_template_part( 'template-parts/nav-megamenu' );
     } elseif  ($menu_type == "horizontal") { 
         get_template_part( 'template-parts/nav-horizontal' );
     }; ?>


<div id="page">
  <main id="content">