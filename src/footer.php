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

//  $site_width = get_theme_mod( 'site_width' );
  $site_parentunit_show = get_theme_mod( 'site_parentunit_show' );
  $site_parentunit_name = get_theme_mod( 'site_parentunit_name' );
  $site_parentunit_link = get_theme_mod( 'site_parentunit_link' );
?>

<?php
  if (is_singular() ) {
    ?> </article>
 <?php
} ?>

  	 </main><!-- #main -->
</div><!-- #page -->
<?php   get_template_part( 'template-parts/region-extendedfooter' ); ?>

	<footer id="colophon" class="site-footer  mt-auto">


  <!-- .site-info -->

<div class="container-fluid universal-footer" id="universal-footer">
    <div class="container-xxl">
      <div class="row pt-3">
        <div class="site-info col-12 col-md-6">
  				<p class="h5 text-white"><a  class="text-reset text-decoration-none" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
    		  <?php if ($site_parentunit_link != "") { ?>
			      <p class="small text-white mb-5"><?php if ($site_parentunit_link != "") { ?><a class="text-reset" href="<?php echo $site_parentunit_link; ?>"><?php } echo $site_parentunit_name; ?><?php if ($site_parentunit_link != "") { ?></a><?php } ?></p>
			    <?php } ?>
          <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
            <div class="contact-info mt-5 text-white">
              <?php dynamic_sidebar( 'footer-1' ); ?>
            </div>
          <?php endif; ?>
          <?php  // get_template_part( 'template-parts/region-contact' ); ?>
  		  </div>

    <div id="utk-identifier" class="col-12 col-md-6 col-lg-5 ms-lg-auto mt-md-n5 p-4 utk-identifier">
      <?php   get_template_part( 'template-parts/style-footer-logo' ); ?>
      <p class="text-white small">The University of Tennessee, Knoxville<br>Knoxville, Tennessee 37996<br>865-974-1000</p>
      <p class="text-white small">The flagship campus of the <a href="https://tennessee.edu/" target="_blank" class="text-white footer-links">University of Tennessee System</a> and partner in the <a href="https://www.tntransferpathway.org/" target="_blank" class="text-white footer-links">Tennessee Transfer Pathway</a>.</p>
      <p class="text-white small"><a class="text-white me-3 footer-links" href="https://oed.utk.edu/ada/">ADA</a> <a class="text-white me-3 footer-links" href="https://www.utk.edu/aboutut/privacy/">Privacy</a> <a class="text-white me-3 footer-links" href="https://safety.utk.edu/">Safety</a> <a class="text-white footer-links" href="https://titleix.utk.edu/">Title&nbsp;IX</a></p>
    </div>
    </div>
  </div>
</div>
	</footer><!-- #colophon -->


<?php wp_footer(); ?>

</body>
</html>
