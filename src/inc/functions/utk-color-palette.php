<?php
function utk_add_custom_gutenberg_color_palette() {
	add_theme_support(
		'editor-color-palette',
		[
			[
				'name'  => esc_html__( 'Brown', 'wpdc' ),
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
		]
	);
}
add_action( 'after_setup_theme', 'utk_add_custom_gutenberg_color_palette' );

function utk_disable_gutenberg_custom_colour_picker() {
	add_theme_support( 'disable-custom-colors' );
}
add_action( 'after_setup_theme', 'utk_disable_gutenberg_custom_colour_picker' );