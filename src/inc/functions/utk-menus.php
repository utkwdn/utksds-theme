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