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


  // Show the Parent in Header
  $wp_customize->add_setting('site_parentunit_show', array(
    'default'   => 'hide',
    'transport' => 'refresh'
  ));
  $wp_customize->add_control('site_parentunit_show', array(
    'label'      => __('Show Parent Unit in Header', 'utthehill'),
    'section'    => 'site-settings',
    'settings'   => 'site_parentunit_show',
    'default'    => 'show',
    'type'       => 'radio',
    'choices'    => array(
      'show'   => 'Show',
      'hide'  => 'Hide',
    ),
  ));

  // Parent Unit
  $wp_customize->add_setting('site_parentunit_name', array());
  $wp_customize->add_control('site_parentunit_name', array(
    'label'      => __('Parent Unit', 'utthehill'),
    'section'    => 'site-settings',
    'settings'   => 'site_parentunit_name',
    'type'       => 'text'
  ));

  // Parent Unit link
  $wp_customize->add_setting('site_parentunit_link', array());
  $wp_customize->add_control('site_parentunit_link', array(
    'label'      => __('Parent Unit Link', 'utthehill'),
    'section'    => 'site-settings',
    'settings'   => 'site_parentunit_link',
    'type'       => 'url'
  ));

  // Show Comments
    $wp_customize->add_setting('site_comments', array(
      'default'   => 'no',
      'transport' => 'refresh'
    ));
    $wp_customize->add_control('site_comments', array(
    'label'      => __('Allow comments?', 'utthehill'),
    'section'    => 'site-settings',
    'settings'   => 'site_comments',
    'default'    => 'no',
    'type'       => 'radio',
    'choices'    => array(
      'allow'      => 'Allow',
      'no'         => 'No Comments',
    ),
  ));





  // Create the section

  $wp_customize->add_section('site-settings' , array(
      'title' => __('Site Settings','utthehill'),
  ));
}

add_action( 'customize_register', 'ukds_customizesite_register' );
