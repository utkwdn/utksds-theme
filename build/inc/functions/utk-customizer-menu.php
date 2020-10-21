<?php
function ukds_customize_register( $wp_customize ) {


  // Menu Settings
  $wp_customize->add_setting('menu_type', array(
    'default'   => 'left-rail',
    'transport' => 'refresh'
  ));
  $wp_customize->add_control('menu_type', array(
    'label'      => __('Menu Style', 'utds'),
    'section'    => 'navigation',
    'settings'   => 'menu_type',
    'default'    => 'left-rail',
    'type'       => 'radio',
    'choices'    => array(
      'left-rail' => 'Left Rail',
      'horizontal'   => 'Horizontal',
      'bootstrap'   => 'Bootstrap Style',
    ),
  ));
  $wp_customize->add_section('navigation' , array(
      'title' => __('Navigation Style','utds'),
  ));
}

add_action( 'customize_register', 'ukds_customize_register' );
