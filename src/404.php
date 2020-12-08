<?php
/**
* The template for displaying 404 pages (not found)
*
* @link https://codex.wordpress.org/Creating_an_Error_404_Page
*
* @package UT_DS
*/

get_header();
$site_width = get_theme_mod( 'site_width' );
$menu_type = get_theme_mod( 'menu_type' );
?>
<section class="error-404 not-found">
  <div class="row bg-light no-gutters mb-3 pb-3">
    <?php
      get_template_part( 'template-parts/part-startheader' );
      get_template_part( 'template-parts/inc-breadcrumb' );
    ?>
 
    <header>
      <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'ut-ds' ); ?></h1>
    </header><!-- .page-header -->
 
    <?php
      get_template_part( 'template-parts/part-endheader' );
      get_template_part( 'template-parts/nav-left-rail' );
    ?>
    
      <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'ut-ds' ); ?></p>
      
      <?php
      get_search_form();    
      the_widget( 'WP_Widget_Recent_Posts' );
      ?>
      
      <div class="widget widget_categories">
        <h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'ut-ds' ); ?></h2>
        <ul>
          <?php
          wp_list_categories(
          array(
          'orderby'    => 'count',
          'order'      => 'DESC',
          'show_count' => 1,
          'title_li'   => '',
          'number'     => 10,
          )
          );
          ?>
        </ul>
      </div><!-- .widget -->
      
      <?php
      /* translators: %1$s: smiley */
      $ut_ds_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'ut-ds' ), convert_smilies( ':)' ) ) . '</p>';
      the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$ut_ds_archive_content" );
      
      the_widget( 'WP_Widget_Tag_Cloud' );
      ?>
      
    </div><!-- .page-content -->
    <div class="col-12 col-md-4 col-xl-3">
    <?php get_sidebar();		?>
    </div>
    
  </div>
</section><!-- .error-404 -->
<?php
get_footer();

