<?php
/**
 * Sample implementation of the Custom Logo feature
 *
 * You can add an optional custom header image to header.php like so ...
 *
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-logo/
 *
 * @package UT_DS
 */

/**
 * Set up the WordPress core custom logo feature.
 *
 */
function themename_custom_logo_setup() {
 $defaults = array(
   'height'      => 180,
   'width'       => 800,
   'flex-height' => true,
   'flex-width'  => true,
   'header-text' => array( 'site-title', 'site-description' ),
 );
 add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );