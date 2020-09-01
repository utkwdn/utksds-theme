<?php
function navigation_markup( $links, $class = 'posts-navigation', $screen_reader_text = '' ) {
    if ( empty( $screen_reader_text ) ) {
        $screen_reader_text = __( 'Posts navigation' );
    }

    $template = '
    <nav class="navigation %1$s" role="navigation">
        <h2 class="screen-reader-text">%2$s</h2>
        <div class="nav-links">%3$s</div>
    </nav>';

    //Add this line
    $template = apply_filters('navigation_markup_template', $template);

    return sprintf( $template, sanitize_html_class( $class ), esc_html( $screen_reader_text ), $links );
};

