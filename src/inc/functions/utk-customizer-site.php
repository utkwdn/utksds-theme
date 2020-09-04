<?php
function ukds_customizesite_register( $wp_customize ) {


  // Byline
  $wp_customize->add_setting('site_width', array(
    'default'   => 'full-width',
    'transport' => 'refresh'
  ));
  $wp_customize->add_control('site_width', array(
    'label'      => __('How wide should the site be?', 'utthehill'),
    'section'    => 'site-settings',
    'settings'   => 'site_width',
    'default'    => 'show',
    'type'       => 'radio',
    'choices'    => array(
      'full-width'   => 'Full Width',
      'max-width'  => 'Max Width',
    ),
  ));




  // Create the section

  $wp_customize->add_section('site-settings' , array(
      'title' => __('Site Settings','utthehill'),
  ));
}

add_action( 'customize_register', 'ukds_customizesite_register' );
