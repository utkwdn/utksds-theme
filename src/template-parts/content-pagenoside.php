<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package UT_DS
 */


  $single_show_sidebar = get_theme_mod( 'single_show_sidebar' );
  $menu_type = get_theme_mod( 'menu_type' );
  $site_width = get_theme_mod( 'site_width' );

?>



    	<div class="entry-content">
    		<?php
    		the_content();
    
    		wp_link_pages(
    			array(
    				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ut-ds' ),
    				'after'  => '</div>',
    			)
    		);
    		?>
    	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="sr-only">%s</span>', 'ut-ds' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
