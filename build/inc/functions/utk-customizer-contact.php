<?php
function ukds_customizecontact_register( $wp_customize ) {




  // Contact Info
  // ===================================================================

  // Phone Label 1
  $wp_customize->add_setting('contactinfo_phone1label', array());
  $wp_customize->add_control('contactinfo_phone1label', array(
    'label'      => __('Phone Label 1', 'utthehill'),
    'section'    => 'contact-settings',
    'settings'   => 'contactinfo_phone1label',
    'type'       => 'text'
  ));
  // Phone Number 1
  $wp_customize->add_setting('contactinfo_phone1number', array());
  $wp_customize->add_control('contactinfo_phone1number', array(
    'label'      => __('Phone Number 1', 'utthehill'),
    'section'    => 'contact-settings',
    'settings'   => 'contactinfo_phone1number',
    'type'       => 'text'
  ));
  // Phone Label 2
  $wp_customize->add_setting('contactinfo_phone2label', array());
  $wp_customize->add_control('contactinfo_phone2label', array(
    'label'      => __('Phone Label 2', 'utthehill'),
    'section'    => 'contact-settings',
    'settings'   => 'contactinfo_phone2label',
    'type'       => 'text'
  ));
  // Phone Number 2
  $wp_customize->add_setting('contactinfo_phone2number', array());
  $wp_customize->add_control('contactinfo_phone2number', array(
    'label'      => __('Phone Number 2', 'utthehill'),
    'section'    => 'contact-settings',
    'settings'   => 'contactinfo_phone2number',
    'type'       => 'text'
  ));
  // Phone Label 3
  $wp_customize->add_setting('contactinfo_phone3label', array());
  $wp_customize->add_control('contactinfo_phone3label', array(
    'label'      => __('Phone Label 3', 'utthehill'),
    'section'    => 'contact-settings',
    'settings'   => 'contactinfo_phone3label',
    'type'       => 'text'
  ));
  // Phone Number 3
  $wp_customize->add_setting('contactinfo_phone3number', array());
  $wp_customize->add_control('contactinfo_phone3number', array(
    'label'      => __('Phone Number 3', 'utthehill'),
    'section'    => 'contact-settings',
    'settings'   => 'contactinfo_phone3number',
    'type'       => 'text'
  ));

  // Email
  $wp_customize->add_setting('contactinfo_email1label', array());
  $wp_customize->add_control('contactinfo_email1label', array(
    'label'      => __('Email Label', 'utthehill'),
    'section'    => 'contact-settings',
    'settings'   => 'contactinfo_email1label',
    'type'       => 'text'
  ));
  // Email Address
  $wp_customize->add_setting('contactinfo_email1address', array());
  $wp_customize->add_control('contactinfo_email1address', array(
    'label'      => __('Email Address', 'utthehill'),
    'section'    => 'contact-settings',
    'settings'   => 'contactinfo_email1address',
    'type'       => 'text'
  ));


  // Address
  $wp_customize->add_setting('contactinfo_address', array());
  $wp_customize->add_control('contactinfo_address', array(
    'label'      => __('Address', 'utthehill'),
    'section'    => 'contact-settings',
    'settings'   => 'contactinfo_address',
    'type'       => 'textarea'
  ));
  // Map URL (from maps.utk.edu)
  $wp_customize->add_setting('contactinfo_map', array( 'sanitize_callback' => 'themeslug_sanitize_url' ));
  $wp_customize->add_control('contactinfo_map', array(
    'label'      => __('Map Link', 'utthehill'),
    'section'    => 'contact-settings',
    'description' => __( 'Add a link to your office from maps.utk.edu.' ),
    'settings'   => 'contactinfo_map',
    'type'       => 'url'
  ));

function themeslug_sanitize_url( $url ) {
  return esc_url_raw( $url );
}
  // General Info
  $wp_customize->add_setting('contactinfo_general', array());
  $wp_customize->add_control('contactinfo_general', array(
    'label'      => __('General Info', 'utthehill'),
    'section'    => 'contact-settings',
    'settings'   => 'contactinfo_general',
    'type'       => 'textarea'
  ));



  // Social Media in this section

  // Twitter URL
  $wp_customize->add_setting('socialmedia_twitter', array(
                'sanitize_callback' => 'esc_url_raw' //cleans URL from all invalid characters
            ));
  $wp_customize->add_control('socialmedia_twitter', array(
    'label'      => __('Twitter URL', 'utthehill'),
    'section'    => 'contact-settings',
    'settings'   => 'socialmedia_twitter',
    'type'       => 'url'
  ));
  // Facebook URL
  $wp_customize->add_setting('socialmedia_facebook', array(
                'sanitize_callback' => 'esc_url_raw' //cleans URL from all invalid characters
            ));
  $wp_customize->add_control('socialmedia_facebook', array(
    'label'      => __('Facebook URL', 'utthehill'),
    'section'    => 'contact-settings',
    'settings'   => 'socialmedia_facebook',
    'type'       => 'url'
  ));
  // LinkedIn URL
  $wp_customize->add_setting('socialmedia_linkedin', array(
                'sanitize_callback' => 'esc_url_raw' //cleans URL from all invalid characters
            ));
  $wp_customize->add_control('socialmedia_linkedin', array(
    'label'      => __('LinkedIn URL', 'utthehill'),
    'section'    => 'contact-settings',
    'settings'   => 'socialmedia_linkedin',
    'type'       => 'url'
  ));
  // YouTube URL
  $wp_customize->add_setting('socialmedia_youtube', array(
                'sanitize_callback' => 'esc_url_raw' //cleans URL from all invalid characters
            ));
  $wp_customize->add_control('socialmedia_youtube', array(
    'label'      => __('YouTube URL', 'utthehill'),
    'section'    => 'contact-settings',
    'settings'   => 'socialmedia_youtube',
    'type'       => 'url'
  ));
  // Snapchat URL
  $wp_customize->add_setting('socialmedia_snapchat', array(
                'sanitize_callback' => 'esc_url_raw' //cleans URL from all invalid characters
            ));
  $wp_customize->add_control('socialmedia_snapchat', array(
    'label'      => __('Snapchat URL', 'utthehill'),
    'section'    => 'contact-settings',
    'settings'   => 'socialmedia_snapchat',
    'type'       => 'url'
  ));
  // WeeChat URL
  $wp_customize->add_setting('socialmedia_weechat', array(
                'sanitize_callback' => 'esc_url_raw' //cleans URL from all invalid characters
            ));
  $wp_customize->add_control('socialmedia_weechat', array(
    'label'      => __('WeeChat URL', 'utthehill'),
    'section'    => 'contact-settings',
    'settings'   => 'socialmedia_weechat',
    'type'       => 'url'
  ));
  // Pinterest URL
  $wp_customize->add_setting('socialmedia_pin', array(
                'sanitize_callback' => 'esc_url_raw' //cleans URL from all invalid characters
            ));
  $wp_customize->add_control('socialmedia_pin', array(
    'label'      => __('Pinterest URL', 'utthehill'),
    'section'    => 'contact-settings',
    'settings'   => 'socialmedia_pin',
    'type'       => 'url'
  ));
  // Instagram URL
  $wp_customize->add_setting('socialmedia_insta', array(
                'sanitize_callback' => 'esc_url_raw' //cleans URL from all invalid characters
            ));
  $wp_customize->add_control('socialmedia_pin', array(
    'label'      => __('Instagram URL', 'utthehill'),
    'section'    => 'contact-settings',
    'settings'   => 'socialmedia_insta',
    'type'       => 'url'
  ));
  // Goodreads URL
  $wp_customize->add_setting('socialmedia_goodr', array(
                'sanitize_callback' => 'esc_url_raw' //cleans URL from all invalid characters
            ));
  $wp_customize->add_control('socialmedia_goodr', array(
    'label'      => __('Goodreads URL', 'utthehill'),
    'section'    => 'contact-settings',
    'settings'   => 'socialmedia_goodr',
    'type'       => 'url'
  ));
  // Vimeo URL
  $wp_customize->add_setting('socialmedia_vime', array(
                'sanitize_callback' => 'esc_url_raw' //cleans URL from all invalid characters
            ));
  $wp_customize->add_control('socialmedia_vime', array(
    'label'      => __('Vimeo URL', 'utthehill'),
    'section'    => 'contact-settings',
    'settings'   => 'socialmedia_vime',
    'type'       => 'url'
  ));
  // Sound Cloud URL
  $wp_customize->add_setting('socialmedia_sound', array(
                'sanitize_callback' => 'esc_url_raw' //cleans URL from all invalid characters
            ));
  $wp_customize->add_control('socialmedia_sound', array(
    'label'      => __('Soundcloud URL', 'utthehill'),
    'section'    => 'contact-settings',
    'settings'   => 'socialmedia_sound',
    'type'       => 'url'
  ));
  // Slack URL
  $wp_customize->add_setting('socialmedia_slac', array(
                'sanitize_callback' => 'esc_url_raw' //cleans URL from all invalid characters
            ));
  $wp_customize->add_control('socialmedia_slac', array(
    'label'      => __('Slack URL', 'utthehill'),
    'section'    => 'contact-settings',
    'settings'   => 'socialmedia_slac',
    'type'       => 'url'
  ));



   $wp_customize->add_section('contact-settings' , array(
      'title' => __('Contact Info','utthehill'),
      'description' => __('<p>This information will appear in the footer of your site.</p>','utthehill'),
   ));
}

add_action( 'customize_register', 'ukds_customizecontact_register' );
