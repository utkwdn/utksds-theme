<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package UT_DS
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" class="text-reset" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :

    $meta_publisheddate = get_theme_mod( 'meta_publisheddate' );
    $meta_tax = get_theme_mod( 'meta_tax' );
    $meta_byline = get_theme_mod( 'meta_byline' );
    $meta_excerpt = get_theme_mod( 'meta_excerpt' );
			?>
			<div class="entry-meta small">
				<?php
  				if ($meta_publisheddate != "hide") { 
	    			ut_ds_posted_on();
	    	  };
  				if ($meta_byline != "hide") { 
    				ut_ds_posted_by();
    		  };
				?>
			</div><!-- .entry-meta -->
		<?php	 endif; ?>
	</header><!-- .entry-header -->
	<div class="row mt-1">

	<?php ut_ds_post_thumbnail(); ?>

	<div class="entry-content col">
		<?php
		if ( is_singular() ) :
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
		else :
      if ($meta_excerpt != "content") : 
  		
    		the_excerpt(
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
  		else :
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
  		endif;
		endif;
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ut-ds' ),
				'after'  => '</div>',
			)
		);
		?>
	</div>
	</div>
	<!-- .entry-content -->
  <?php if ($meta_tax != "hide") { ?>
	  <footer class="entry-footer small">
		  <?php ut_ds_entry_footer(); ?>
	  </footer><!-- .entry-footer -->
	 <?php }; ?>
</article><!-- #post-<?php the_ID(); ?> -->
<hr>
