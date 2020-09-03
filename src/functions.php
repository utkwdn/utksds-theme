<?php
/**
 * UT DS functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package UT_DS
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.4' );
}

if ( ! function_exists( 'ut_ds_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function ut_ds_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on UT DS, use a find and replace
		 * to change 'ut-ds' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'ut-ds', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'ut-ds' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'ut_ds_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'ut_ds_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ut_ds_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'ut_ds_content_width', 640 );
}
add_action( 'after_setup_theme', 'ut_ds_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ut_ds_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'ut-ds' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'ut-ds' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s card p-3">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title h6 text-uppercase">',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'ut_ds_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ut_ds_scripts() {
//	wp_enqueue_style( 'ut-ds-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'ut-ds-style', 'rtl', 'replace' );

//	wp_enqueue_script( 'ut-ds-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ut_ds_scripts' );




/**
 * Design system File
 */
/**
 * Proper way to enqueue scripts and styles
 */
function ut_designsystem_scripts() {

    if( !is_admin()){
	    wp_deregister_script('jquery');
	    wp_register_script('jquery', ("//code.jquery.com/jquery-3.4.1.slim.min.js"), array(), null, true);
	    wp_enqueue_script('jquery');
    }


    wp_enqueue_style( 'utk-bootstrap-designsytemstyles',    get_stylesheet_uri(), array(), _S_VERSION );
   	wp_enqueue_script( 'utk-bootstrap-designsytemscripts',  get_template_directory_uri() . '/js/utk.js', array( 'jquery' ), _S_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'ut_designsystem_scripts' );









/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}




/**
 * UTK Custom stuff
 */
require_once ( get_template_directory() . '/inc/functions/utk-postsnavigation.php' );
require_once ( get_template_directory() . '/inc/functions/utk-color-palette.php' );
require_once ( get_template_directory() . '/inc/functions/utk-menus.php' );


function register_navwalker(){
	require_once ( get_template_directory() . '/inc/functions/class-wp-bootstrap-navwalker.php' );
}
add_action( 'after_setup_theme', 'register_navwalker' );

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'THEMENAME' ),
) );

