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

<?php if ( is_active_sidebar( 'sidebar-2' ) || is_active_sidebar( 'sidebar-3' ) ||	is_active_sidebar( 'sidebar-4' ) ||	is_active_sidebar( 'sidebar-5' )	) { ?>
	<footer id="colophon" class="site-footer  mt-auto">
<?php } else { ?>
	<footer id="colophon" class="site-footer mt-auto">
<?php }; ?>


  <!-- .site-info -->

<div class="container-fluid" id="universal-footer">
    <div class="container">
      <div class="row pt-3">

    <div class="site-info col-12 col-md-6">
  				<p class="h5 text-white"><a  class="text-reset text-decoration-none" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
    		  <?php if ($site_parentunit_show == "show") { ?>
			      <p class="small text-white"><?php if ($site_parentunit_link != "") { ?><a class="text-reset" href="<?php echo $site_parentunit_link; ?>"><?php } echo $site_parentunit_name; ?><?php if ($site_parentunit_link != "") { ?></a><?php } ?></p>
			    <?php } ?>
    <?php   get_template_part( 'template-parts/region-contact' ); ?>

  		</div>

    <div id="utk-identifier" class="col-12 col-md-6 col-lg-5 ml-lg-auto mt-md-n5 pt-4">
      <?php   get_template_part( 'template-parts/style-footer-logo' ); ?>
      <p class="text-white small">The University of Tennessee, Knoxville<br>Knoxville, Tennessee 37996, 865-974-1000</p>
      <p class="text-white small">The flagship campus of the University of Tennessee System and partner in the Tennessee Transfer Pathway.</p>
      <p class="text-white small"><a class="text-white" href="https://www.utk.edu">EEO</a>. <a class="text-white"  href="https://www.utk.edu">Legal</a>. <a class="text-white"  href="https://www.utk.edu">Privacy</a>. <a  class="text-white" href="https://www.utk.edu">Accessibility</a>.</p>
    </div>
    </div> 
  </div>
</div>
	</footer><!-- #colophon -->


<?php wp_footer(); ?>

</body>
</html>
