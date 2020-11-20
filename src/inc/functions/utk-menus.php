<?php


// Make a function that shows only the children of the main menu
  function utkds_list_child_pages() {

    global $post;

    if ( is_page() && $post->post_parent )
        $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&echo=0' );
    else
        $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0' );
    if ( $childpages ) {
        $string = '
               <ul>
                   <li><a href="'.get_permalink($post->post_parent).'">'.get_the_title($post->post_parent).'</a></li>'
                   .$childpages.
               '</ul>
        ';
    }
    //return $string;
}

add_shortcode('utkds_childpages', 'utkds_list_child_pages');




/* Theme setup */




//function wpt_register_js() {
//    wp_register_script('jquery.bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery');
//    wp_enqueue_script('jquery.bootstrap.min');
//}
//add_action( 'init', 'wpt_register_js' );
//function wpt_register_css() {
//    wp_register_style( 'bootstrap.min', get_template_directory_uri() . '/css/bootstrap.min.css' );
//    wp_enqueue_style( 'bootstrap.min' );
//}
//add_action( 'wp_enqueue_scripts', 'wpt_register_css' );
