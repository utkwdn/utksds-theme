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

  $site_width = get_theme_mod( 'site_width' );
  $site_parentunit_show = get_theme_mod( 'site_parentunit_show' );
  $site_parentunit_name = get_theme_mod( 'site_parentunit_name' );
  $site_parentunit_link = get_theme_mod( 'site_parentunit_link' );
  ?>
	<footer id="colophon" class="site-footer container<?php if ($site_width == "full-width") { ?>-fluid<?php }; ?> mt-5 pb-4">
  	<div class="row">
  		<div class="site-info col-12 col-md-4">
  				<p class="h5"><a  class="text-reset text-decoration-none" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
    		  <?php if ($site_parentunit_show == "show") { ?>
			      <p class="small"><?php if ($site_parentunit_link != "") { ?><a class="text-reset" href="<?php echo $site_parentunit_link; ?>"><?php } echo $site_parentunit_name; ?><?php if ($site_parentunit_link != "") { ?></a><?php } ?></p>
			    <?php } ?>
  		</div>
    <?php   get_template_part( 'template-parts/region-contact' ); ?>
  	</div>
	</footer><!-- #colophon -->
  </div><!-- .site-info -->
</div><!-- #page -->

<div class="container-fluid">
  <div class="row bg-smokey pt-3">
    <?php if ($site_width != "full-width") { ?><div class="container"><?php }; ?>
    <div class="col-12 col-md-6">
    <?php   get_template_part( 'template-parts/style-footer-logo' ); ?>
    </div>
    <div class="col-12 col-md-6">
      <p class="text-white small">The University of Tennessee, Knoxville<br>Knoxville, Tennessee 37996, 865-974-1000</p>
      <p class="text-white small">The flagship campus of the University of Tennessee System and partner in the Tennessee Transfer Pathway.</p>
      <p class="text-white small"><a class="text-white" href="https://www.utk.edu">EEO</a>. <a class="text-white"  href="https://www.utk.edu">Legal</a>. <a class="text-white"  href="https://www.utk.edu">Privacy</a>. <a  class="text-white" href="https://www.utk.edu">Accessibility</a>.</p>
    </div>
    <?php if ($site_width != "full-width") { ?></div><?php }; ?> 
  </div>
</div>


<?php wp_footer(); ?>

</body>
</html>
