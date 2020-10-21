<?php
function ukds_customizesingle_register( $wp_customize ) {


  // Single Post Settings
  // ===================================================================

  // Byline
  $wp_customize->add_setting('single_show_byline', array(
    'default'   => 'show',
    'transport' => 'refresh'
  ));
  $wp_customize->add_control('single_show_byline', array(
    'label'      => __('Show the author&rsquo;s byline', 'utthehill'),
    'section'    => 'post_settings',
    'settings'   => 'single_show_byline',
    'default'    => 'hide',
    'type'       => 'radio',
    'choices'    => array(
      'show'   => 'Show',
      'hide'  => 'Hide',
    ),
  ));
 // Show the published date
  $wp_customize->add_setting('single_show_pubdate', array(
    'default'   => 'show',
    'transport' => 'refresh'
  ));
  $wp_customize->add_control('single_show_pubdate', array(
    'label'      => __('Show the published date', 'utthehill'),
    'section'    => 'post_settings',
    'settings'   => 'single_show_pubdate',
    'default'    => 'hide',
    'type'       => 'radio',
    'choices'    => array(
      'show'   => 'Show',
      'hide'  => 'Hide',
    ),
  ));
 // Show the taxonomies
  $wp_customize->add_setting('single_tax', array(
    'default'   => 'show',
    'transport' => 'refresh'
  ));
  $wp_customize->add_control('single_tax', array(
    'label'      => __('Show the taxonomy block', 'utthehill'),
    'section'    => 'post_settings',
    'settings'   => 'single_tax',
    'default'    => 'hide',
    'type'       => 'radio',
    'choices'    => array(
      'show'   => 'Show',
      'hide'  => 'Hide',
    ),
  ));


 // Show the pager
  $wp_customize->add_setting('single_show_pager', array(
    'default'   => 'show',
    'transport' => 'refresh'
  ));
  $wp_customize->add_control('single_show_pager', array(
    'label'      => __('Show the pager navigation', 'utthehill'),
    'section'    => 'post_settings',
    'settings'   => 'single_show_pager',
    'default'    => 'hide',
    'type'       => 'radio',
    'choices'    => array(
      'show'   => 'Show',
      'hide'  => 'Hide',
    ),
  ));


  $wp_customize->add_section('post_settings' , array(
      'title' => __('Single Post Settings','utthehill'),
      'description' => __('<h1>Single Post View Settings.</h1><p>These settings affect the post view, not the archive view of the posts.</p>','utthehill'),
  ));

 
 
 // Show the sidebar on posts
  $wp_customize->add_setting('single_show_sidebar', array(
    'default'   => 'show',
    'transport' => 'refresh'
  ));
  $wp_customize->add_control('single_show_sidebar', array(
    'label'      => __('Show the main sidebar on single posts', 'utthehill'),
    'section'    => 'post_settings',
    'settings'   => 'single_show_sidebar',
    'default'    => 'hide',
    'type'       => 'radio',
    'choices'    => array(
      'show'   => 'Show',
      'hide'  => 'Hide',
    ),
  ));


  $wp_customize->add_section('post_settings' , array(
      'title' => __('Single Post Settings','utthehill'),
      'description' => __('<h1>Single Post View Settings.</h1><p>These settings affect the post view, not the archive view of the posts.</p>','utthehill'),
  ));



}

add_action( 'customize_register', 'ukds_customizesingle_register' );
