<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package UT_DS
 */

?>

	<footer id="colophon" class="site-footer container-fluid">
  	<div class="row">
  		<div class="site-info col">
  				<p class="h5"><a  class="text-reset text-decoration-none" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
  				<p class="site-description lead"><?php // echo $ut_ds_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
  		</div>
  	</div>
	</footer><!-- #colophon -->



		</div><!-- .site-info -->
</div><!-- #page -->

<div class="container-fluid">
  <div class="row bg-smokey pt-3">
    <div class="col-12 col-md-6">
    <?php   get_template_part( 'template-parts/style-footer-logo' ); ?>
    </div>
    <div class="col-12 col-md-6">
      <p class="text-white small">The University of Tennessee, Knoxville<br>Knoxville, Tennessee 37996, 865-974-1000</p>
      <p class="text-white small">The flagship campus of the University of Tennessee System and partner in the Tennessee Transfer Pathway.</p>
      <p class="text-white small"><a>EEO</a>. <a>Legal</a>. <a>Privacy</a>. <a>Accessibility</a>.</p>
    </div> 
  </div>
</div>


<?php wp_footer(); ?>

</body>
</html>
