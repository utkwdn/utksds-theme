<?php 

/**
 * Registers block categories, and type.
 *
 * (Stole this from utkchancellor – modified and updated with WDS categories)
 */
function wds_register_block_pattern_categories() {

	/* Functionality specific to the Block Pattern Explorer plugin. */
	if ( function_exists( 'register_block_pattern_category_type' ) ) {
	register_block_pattern_category_type( 'wds-article', array( 'label' => __( 'WDS Article', 'wds-article' ) ) );
		register_block_pattern_category_type( 'wds-buttons', array( 'label' => __( 'WDS Buttons', 'wds-buttons' ) ) );
		register_block_pattern_category_type( 'wds-cards', array( 'label' => __( 'WDS Cards', 'wds-cards' ) ) );
		register_block_pattern_category_type( 'wds-gallery', array( 'label' => __( 'WDS Gallery', 'wds-gallery' ) ) );
		register_block_pattern_category_type( 'wds-intro', array( 'label' => __( 'WDS Intro', 'wds-intro' ) ) );
		register_block_pattern_category_type( 'wds-news', array( 'label' => __( 'WDS News', 'wds-news' ) ) );
		register_block_pattern_category_type( 'wds-text', array( 'label' => __( 'WDS Text', 'wds-text' ) ) );
	}

	$block_pattern_categories = array(
		'wds-article' => array(
			'label'         => __( 'WDS Article', 'wds-article' ),
			'categoryTypes' => array( 'wds-article' ),
		),
		'wds-buttons' => array(
			'label'         => __( 'WDS Buttons', 'wds-buttons' ),
			'categoryTypes' => array( 'wds-buttons' ),
		),
		'wds-cards' => array(
			'label'         => __( 'WDS Cards', 'wds-cards' ),
			'categoryTypes' => array( 'wds-cards' ),
		),
		'wds-gallery' => array(
			'label'         => __( 'WDS Gallery', 'wds-gallery' ),
			'categoryTypes' => array( 'wds-gallery' ),
		),
		'wds-intro' => array(
			'label'         => __( 'WDS Intro', 'wds-intro' ),
			'categoryTypes' => array( 'wds-intro' ),
		),
		'wds-news' => array(
			'label'         => __( 'WDS News', 'wds-news' ),
			'categoryTypes' => array( 'wds-news' ),
		),
		'wds-text' => array(
			'label'         => __( 'WDS Text', 'wds-text' ),
			'categoryTypes' => array( 'wds-text' ),
		),
	
	);

	foreach ( $block_pattern_categories as $name => $properties ) {
		register_block_pattern_category( $name, $properties );
	}
}
add_action( 'init', 'wds_register_block_pattern_categories', 9 );

function wordpress_unregister_category() {

	unregister_block_pattern_category( 'featured');
	unregister_block_pattern_category( 'buttons');
	unregister_block_pattern_category( 'gallery');
	unregister_block_pattern_category( 'header');
	unregister_block_pattern_category( 'text');
	unregister_block_pattern_category( 'columns');
	// unregister_block_pattern_category( 'uncategorized');

}
add_action( 'init', 'wordpress_unregister_category');