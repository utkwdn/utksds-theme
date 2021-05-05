<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package UT_DS
 */
  $single_show_sidebar = get_theme_mod( 'single_show_sidebar' );
  $menu_type = get_theme_mod( 'menu_type' );
    $single_tax = get_theme_mod( 'single_tax' );

?>
<div class="container">

<?php   if ($single_show_sidebar != "hide") { ?>
  <div class="row">
    <div class="col-9">
<?php }; ?>



		<?php
  		the_content(
  			sprintf(
  				wp_kses(
  					/* translators: %s: Name of current post. Only visible to screen readers */
  					__( 'Continue reading<span class="sr-only"> "%s"</span>', 'ut-ds' ),
  					array(
  						'span' => array(
  							'class' => array(),
  						),
  					)
  				),
  				wp_kses_post( get_the_title() )
  			)
  		);
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ut-ds' ),
				'after'  => '</div>',
			)
		);



		?>
  <?php if ($single_tax != "hide") { ?>
	  <footer class="entry-footer small">
		  <?php ut_ds_entry_footer(); ?>
	  </footer><!-- .entry-footer -->
	 <?php };
  	 
      $single_show_pager = get_theme_mod( 'single_show_pager' );
			if ($single_show_pager != "hide") { 
  			the_post_navigation(
  				array(
  					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'ut-ds' ) . '</span> <span class="nav-title">%title</span>',
  					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'ut-ds' ) . '</span> <span class="nav-title">%title</span>',
  				)
  			);
  	  };

  	 
  	  ?>

  
  <?php 
    if ($single_show_sidebar != "hide") { 
  ?> 
    </div>
    <div class="col-12 col-md-4 col-xl-3">
      <?php get_sidebar(); ?>
    </div>
  </div>
<?php
}; ?>
</div>
