<?php


/*********************************************************************/
/* Add featured post checkbox
/********************************************************************/

add_action( 'add_meta_boxes', 'add_featured_checkbox_function' );
function add_featured_checkbox_function() {
   add_meta_box('featured_checkbox_id','Page layout', 'featured_checkbox_callback_function', 'page', 'side',  'high');
}
function featured_checkbox_callback_function( $post ) {
   global $post;
   $showsHeadline=get_post_meta( $post->ID, 'shows_headline', true );
?>
   
   <input type="checkbox" id="shows_headline" name="shows_headline" value="yes" <?php echo (($showsHeadline=='yes') ? 'checked="checked"': '');?>/> <label for="shows_headline"> Hide the title area.</label>
<?php
}

add_action('save_post', 'save_featured_post'); 
function save_featured_post($post_id){ 

    if (isset($_POST['shows_headline'])) {
        update_post_meta($post_id, 'shows_headline', $_POST['shows_headline']);
    } else {
        delete_post_meta($post_id, 'shows_headline');
    }

}