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
  					'prev_text' => '<span class="nav-subtitle"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/></svg>' . esc_html__( 'Previous', 'ut-ds' ) . '</span> <span class="nav-title visually-hidden">%title</span>',
  					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next', 'ut-ds' ) . ' <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"/></svg></span> <span class="nav-title visually-hidden">%title</span>',
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
