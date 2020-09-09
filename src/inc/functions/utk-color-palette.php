<?php
function utk_add_custom_gutenberg_color_palette() {
	add_theme_support(
		'editor-color-palette',
		[
			[
				'name'  => esc_html__( 'Smokey', 'wpdc' ),
				'slug'  => 'primary',
				'color' => '#58595B',
			],
			[
				'name'  => esc_html__( 'Orange', 'wpdc' ),
				'slug'  => 'orange',
				'color' => '#FF8200',
			],
			[
				'name'  => esc_html__( 'White', 'wpdc' ),
				'slug'  => 'white',
				'color' => '#ffffff',
			],
			[
				'name'  => esc_html__( 'Valley', 'wpdc' ),
				'slug'  => 'success',
				'color' => '#00746F',
			],
			[
				'name'  => esc_html__( 'Torch', 'wpdc' ),
				'slug'  => 'danger',
				'color' => '#E65933',
			],
			[
				'name'  => esc_html__( 'Globe', 'wpdc' ),
				'slug'  => 'secondary',
				'color' => '#006C93',
			],
			[
				'name'  => esc_html__( 'Fountain', 'wpdc' ),
				'slug'  => 'info',
				'color' => '#2197A9',
			],
			[
				'name'  => esc_html__( 'Light', 'wpdc' ),
				'slug'  => 'light',
				'color' => '#F6F6F6',
			],
			[
				'name'  => esc_html__( 'SmokeyX', 'wpdc' ),
				'slug'  => 'dark',
				'color' => '#333333',
			],
			[
				'name'  => esc_html__( 'Leconte', 'wpdc' ),
				'slug'  => 'leconte',
				'color' => '#8D2048',
			],
			[
				'name'  => esc_html__( 'River', 'wpdc' ),
				'slug'  => 'river',
				'color' => '#517C96',
			],
			[
				'name'  => esc_html__( 'Sunsphere', 'wpdc' ),
				'slug'  => 'sunsphere',
				'color' => '#FED535',
			],
			[
				'name'  => esc_html__( 'Rock', 'wpdc' ),
				'slug'  => 'rock',
				'color' => '#A7A9AC',
			],
			[
				'name'  => esc_html__( 'Legacy', 'wpdc' ),
				'slug'  => 'legacy',
				'color' => '#579584',
			],
			[
				'name'  => esc_html__( 'Summitt', 'wpdc' ),
				'slug'  => 'summitt',
				'color' => '#B9E1E2',
			],
			[
				'name'  => esc_html__( 'Energy', 'wpdc' ),
				'slug'  => 'energy',
				'color' => '#EE3E80',
			],
			[
				'name'  => esc_html__( 'Switchgrass', 'wpdc' ),
				'slug'  => 'switchgrass',
				'color' => '#ABC178',
			],
			[
				'name'  => esc_html__( 'Eureka', 'wpdc' ),
				'slug'  => 'eureka',
				'color' => '#EBEA64',
			],
			[
				'name'  => esc_html__( 'Buckskin', 'wpdc' ),
				'slug'  => 'buckskin',
				'color' => '#705550',
			],
		]
	);
}
add_action( 'after_setup_theme', 'utk_add_custom_gutenberg_color_palette' );

function utk_disable_gutenberg_custom_colour_picker() {
	add_theme_support( 'disable-custom-colors' );
}
add_action( 'after_setup_theme', 'utk_disable_gutenberg_custom_colour_picker' );