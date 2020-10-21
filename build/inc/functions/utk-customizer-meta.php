<?php
function ukds_customizemeta_register( $wp_customize ) {


  // Byline
  $wp_customize->add_setting('meta_byline', array(
    'default'   => 'hide',
    'transport' => 'refresh'
  ));
  $wp_customize->add_control('meta_byline', array(
    'label'      => __('Show the author&rsquo;s byline on archive pages', 'utthehill'),
    'section'    => 'meta-infomation',
    'settings'   => 'meta_byline',
    'default'    => 'show',
    'type'       => 'radio',
    'choices'    => array(
      'show'   => 'Show',
      'hide'  => 'Hide',
    ),
  ));
  // Published Date
  $wp_customize->add_setting('meta_publisheddate', array(
    'default'   => 'show',
    'transport' => 'refresh'
  ));
  $wp_customize->add_control('meta_publisheddate', array(
    'label'      => __('Show the published date on archive pages', 'utthehill'),
    'section'    => 'meta-infomation',
    'settings'   => 'meta_publisheddate',
    'default'    => 'show',
    'type'       => 'radio',
    'choices'    => array(
      'show'   => 'Show',
      'hide'  => 'Hide',
    ),
  ));

  // taxonomy
  $wp_customize->add_setting('meta_tax', array(
    'default'   => 'show',
    'transport' => 'refresh'
  ));
  $wp_customize->add_control('meta_tax', array(
    'label'      => __('Show the taxonomy block on archive pages', 'utthehill'),
    'section'    => 'meta-infomation',
    'settings'   => 'meta_tax',
    'default'    => 'show',
    'type'       => 'radio',
    'choices'    => array(
      'show'   => 'Show',
      'hide'  => 'Hide',
    ),
  ));

  // Content vs Excerpt on Archive Pages
  $wp_customize->add_setting('meta_excerpt', array(
    'default'   => 'excerpt',
    'transport' => 'refresh'
  ));
  $wp_customize->add_control('meta_excerpt', array(
    'label'      => __('On archive pages show the excerpt or content', 'utthehill'),
    'section'    => 'meta-infomation',
    'settings'   => 'meta_excerpt',
    'type'       => 'radio',
    'default'    => 'show',
    'choices'    => array(
      'excerpt'  => 'Excerpt',
      'content'  => 'Content',
    ),
  ));

  $wp_customize->add_section('meta-infomation' , array(
      'title' => __('Archive Settings','utthehill'),
  ));
}

add_action( 'customize_register', 'ukds_customizemeta_register' );
