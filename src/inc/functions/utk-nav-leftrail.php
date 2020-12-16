<?php


class Bootstrap_Collapse_NavWalker extends Walker_Nav_Menu {

    var $parent_item_id = 0;
    var $parent_item_depth = false;
    var $parent_has_current_child = false;
    var $currentItem = null;


  public function start_lvl( &$output, $depth = 0, $args = array() ) {


        if (isset($args->item_spacing) && 'discard' === $args->item_spacing) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        

        $indent = str_repeat($t, $depth);
        $collapse_in_class = $this->parent_has_current_child ? 'in' : '';
        $collapse_id = '';
        if (!empty($this->parent_item_id)) {
            $collapse_id = $this->collapse_id($this->parent_item_id);
        }


        //if is current parent and have children: open collapse
        if (null !== $this->currentItem
            && isset($this->currentItem->classes)
            && in_array('current-menu-parent', $this->currentItem->classes, true)
            && in_array('menu-item-has-children', $this->currentItem->classes, true)) {
            $collapse_in_class .= ' show';
        }


        $collapse_block = sprintf('
        <button class="btn btn-bellows collapsed" type="button" data-toggle="collapse" data-target="#link_%s" aria-expanded="false" aria-controls="#link_%s"><div class="btn-bellows-openedcontent"><svg class="btn-icon-plus" version="1.1"   xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve"><path d="M24,10.4H13.6V0h-3.1v10.4H0v3.1h10.4V24h3.1V13.6H24V10.4z"/></svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"  class="btn-icon-minus" viewBox="0 0 24 24"><path d="M0 10h24v4h-24z"/></svg><span class="sr-only visually-hidden">Toggle Sub Menu</span></div></button><ul class="collapse" id="link_%s" aria-labelledby="link_%s" >' . "\n", $collapse_id,  $collapse_id, $collapse_id, $collapse_id, $collapse_id);
        $output .= $n . $indent . $collapse_block . $n;    

//    $display_depth = ( $depth + 1);
//    $id = array(
//            'menu-depth-' . $display_depth .( $args->item_spacing )
//        );
//
//    $id_names = implode( ' ', $id );
//
//
//
//    $indent = str_repeat( "\t", $depth );
//    $output .= "\n$indent<button type='button' class='toggle-btn' data-toggle='collapse' data-target='#$id_names' aria-expanded='false'>+</button><ul id='$id_names' class=\"collapse\">\n";
  }

//  public function end_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
//    if ($this->pdepth !== $depth) {
//      $this->prnt = $item->ID;
//      $this->pdepth = $depth;
//    } else {
//      $this->prnt = $this->pdepth = 0;
//    }
//    parent::end_el($output,$item,$depth,$args,$id);
//
//    // Check for children
//   $children = get_posts(array('post_type' => 'nav_menu_item', 'nopaging' => true, 'numberposts' => 1, 'meta_key' => '_menu_item_menu_item_parent', 'meta_value' => $item->ID));
//
//
//    $output .= "\nHello\n";
//  }

  public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
       $this->currentItem = $item;
        $classes = empty($item->classes) ? [] : (array)$item->classes;
        if ($this->parent_item_depth !== $depth || $this->parent_item_id !== $item->ID) {
            $this->parent_item_depth = $depth;
            $this->parent_item_id = $item->ID;
            $this->parent_has_current_child = (in_array('current-menu-ancestor', $classes, true));
            $this->start_el($output, $item, $depth, $args, $item->ID);
        } else {

          if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
              $t = '';
              $n = '';
          } else {
              $t = "\t";
              $n = "\n";
          }
          $indent = ( $depth ) ? str_repeat( $t, $depth ) : '';
       
          $classes   = empty( $item->classes ) ? array() : (array) $item->classes;
          $classes[] = 'menu-item-' . $item->ID;
       
          /**
           * Filters the arguments for a single nav menu item.
           *
           * @since 4.4.0
           *
           * @param stdClass $args  An object of wp_nav_menu() arguments.
           * @param WP_Post  $item  Menu item data object.
           * @param int      $depth Depth of menu item. Used for padding.
           */
          $args = apply_filters( 'nav_menu_item_args', $args, $item, $depth );
       
          /**
           * Filters the CSS classes applied to a menu item's list item element.
           *
           * @since 3.0.0
           * @since 4.1.0 The `$depth` parameter was added.
           *
           * @param string[] $classes Array of the CSS classes that are applied to the menu item's `<li>` element.
           * @param WP_Post  $item    The current menu item.
           * @param stdClass $args    An object of wp_nav_menu() arguments.
           * @param int      $depth   Depth of menu item. Used for padding.
           */
          $class_names = implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
          $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
       
          /**
           * Filters the ID applied to a menu item's list item element.
           *
           * @since 3.0.1
           * @since 4.1.0 The `$depth` parameter was added.
           *
           * @param string   $menu_id The ID that is applied to the menu item's `<li>` element.
           * @param WP_Post  $item    The current menu item.
           * @param stdClass $args    An object of wp_nav_menu() arguments.
           * @param int      $depth   Depth of menu item. Used for padding.
           */
          $id = apply_filters( 'nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args, $depth );
          $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';
       
          $output .= $indent . '<li' . $id . $class_names . '>';
       
          $atts           = array();
          $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
          $atts['target'] = ! empty( $item->target ) ? $item->target : '';
          if ( '_blank' === $item->target && empty( $item->xfn ) ) {
              $atts['rel'] = 'noopener';
          } else {
              $atts['rel'] = $item->xfn;
          }
          $atts['href']         = ! empty( $item->url ) ? $item->url : '';
          $atts['aria-current'] = $item->current ? 'page' : '';
       
          /**
           * Filters the HTML attributes applied to a menu item's anchor element.
           *
           * @since 3.6.0
           * @since 4.1.0 The `$depth` parameter was added.
           *
           * @param array $atts {
           *     The HTML attributes applied to the menu item's `<a>` element, empty strings are ignored.
           *
           *     @type string $title        Title attribute.
           *     @type string $target       Target attribute.
           *     @type string $rel          The rel attribute.
           *     @type string $href         The href attribute.
           *     @type string $aria_current The aria-current attribute.
           * }
           * @param WP_Post  $item  The current menu item.
           * @param stdClass $args  An object of wp_nav_menu() arguments.
           * @param int      $depth Depth of menu item. Used for padding.
           */
          $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );
       
          $attributes = '';
          foreach ( $atts as $attr => $value ) {
              if ( is_scalar( $value ) && '' !== $value && false !== $value ) {
                  $value       = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
                  $attributes .= ' ' . $attr . '="' . $value . '"';
              }
          }
       
          /** This filter is documented in wp-includes/post-template.php */
          $title = apply_filters( 'the_title', $item->title, $item->ID );
       
          /**
           * Filters a menu item's title.
           *
           * @since 4.4.0
           *
           * @param string   $title The menu item's title.
           * @param WP_Post  $item  The current menu item.
           * @param stdClass $args  An object of wp_nav_menu() arguments.
           * @param int      $depth Depth of menu item. Used for padding.
           */
          $title = apply_filters( 'nav_menu_item_title', $title, $item, $args, $depth );
       
          $item_output  = $args->before;
          $item_output .= '<a' . $attributes . '>';
          $item_output .= $args->link_before . $title . $args->link_after;
          $item_output .= '</a>';
          $item_output .= $args->after;
       
          /**
           * Filters a menu item's starting output.
           *
           * The menu item's starting output only includes `$args->before`, the opening `<a>`,
           * the menu item's title, the closing `</a>`, and `$args->after`. Currently, there is
           * no filter for modifying the opening and closing `<li>` for a menu item.
           *
           * @since 3.0.0
           *
           * @param string   $item_output The menu item's starting HTML output.
           * @param WP_Post  $item        Menu item data object.
           * @param int      $depth       Depth of menu item. Used for padding.
           * @param stdClass $args        An object of wp_nav_menu() arguments.
           */
          $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
      }
    }

    private function collapse_id($nav_id)
    {
        return 'collapse_' . $nav_id;
    }
}
