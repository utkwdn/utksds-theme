<?php

// Allow HTML descriptions in WordPress Menu
remove_filter( 'nav_menu_description', 'strip_tags' );
function my_plugin_wp_setup_nav_menu_item( $menu_item ) {
    if ( isset( $menu_item->post_type ) ) {
        if ( 'nav_menu_item' == $menu_item->post_type ) {
            $menu_item->description = apply_filters( 'nav_menu_description', $menu_item->post_content );
        }
    }

    return $menu_item;
}

add_filter( 'wp_setup_nav_menu_item', 'my_plugin_wp_setup_nav_menu_item' );


class my_custom_walker_nav_menu extends Walker_Nav_Menu {

public function display_element($el, &$children, $max_depth, $depth = 0, $args, &$output){
	$id = $this->db_fields['id'];

	if(isset($children[$el->$id])){
		$el->classes[] = 'has_children';
	}

	parent::display_element($el, $children, $max_depth, $depth, $args, $output);
}


// add classes to ul sub-menus
function start_lvl( &$output, $depth = 0, $args = array() ) {
	// depth dependent classes
	$indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
	$display_depth = ( $depth + 1); // because it counts the first submenu as 0
	$classes = array(
		'navi',
		( $display_depth ==1 ? 'first' : '' ),
		( $display_depth >=2 ? 'navi' : '' ),
		'menu-depth-' . $display_depth
		);
	$class_names = implode( ' ', $classes );

	// build html
	$output .= "\n" . $indent . '<ul class="' . $class_names . '">' . "\n";
}
// add main/sub classes to li's and links
 function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
	global $wp_query;
	$indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent

	static $is_first;
	$is_first++;
	// depth dependent classes
	$depth_classes = array(
		( $depth == 0 ? 'main-menu-item' : '' ),
		( $depth >=2 ? 'navi' : '' ),
		( $is_first ==1 ? 'menu-first' : '' ),
		'menu-item-depth-' . $depth
	);
	$depth_class_names = esc_attr( implode( ' ', $depth_classes ) );
	// passed classes
	$classes = empty( $item->classes ) ? array() : (array) $item->classes;
	$class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );

	$post_meta_array = get_post_meta($item->ID);
	$is_megamenu = $post_meta_array['_menu_item_megamenu'][0];
	$is_mega_menu = ($is_megamenu !== '') ? true : false;
	$use_desc = (strpos($class_names, 'use_desc') !== false) ? true : false;
	$no_title = (strpos($class_names, 'no_title') !== false) ? true : false;
	$is_sidebar = (strpos($class_names, 'menu_sidebar') !== false) ? true : false;

	if(!$is_mega_menu){
		$class_names .= ' normal_menu_item';
	} else{
		$class_names .= ' '.$is_megamenu;
	}

	// build html
	$output .= $indent . '<li a id="nav-menu-item-'. $item->ID . '" class="' . $depth_class_names . ' ' . $class_names . '">';
	// link attributes
	$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
	$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
	$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
	$attributes .= ! empty( $item->url )        ? ' href="' . (($item->url[0] == "#" && !is_front_page()) ? esc_url(home_url('/')) : '') . esc_attr($item->url) .'"' : '';
	$attributes .= ' class="menu-link '.((strpos($item->url,'#') === false) ? '' : 'scroll').' ' . ( $depth > 0 ? 'sub-menu-link' : 'main-menu-link' ) . '"';

	$html_output = ($use_desc) ? '<div class="description_menu_item">'.$item->description.'</div>' : '';

	if ($is_sidebar) {
		ob_start();
		dynamic_sidebar($item->description);
		$sidebar_html = ob_get_clean();

		$sidebar_output = '<div class="sidebar_menu_item">'.$sidebar_html.'</div>';

		$item_output = $sidebar_output;

	} else{
		$item_output = (!$no_title) ? '<a ' . $attributes . '><span>' . apply_filters( 'the_title', $item->title, $item->ID ) . '</span></a>'. $html_output : $html_output;
	}
	// build html
	$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args ).( ($is_mega_menu) ? '<div class="sf-mega"><div class="sf-mega-inner clearfix">':'');
}

function end_el( &$output, $item, $depth = 0, $args = array() ) {

	$classes = empty( $item->classes ) ? array() : (array) $item->classes;
	$class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );

	$is_mega_menu = (strpos($class_names,'mega') !== false) ? true : false;

    $output .= (($is_mega_menu)?'</div></div>':'') . "</li>\n";
}

}

// Megamenu in menu. Modified original file by Weston Ruter on https://gist.github.com/westonruter/3802459

add_action( 'init', array( 'my_custom_Nav_Menu_Item_Custom_Fields', 'setup' ) );

class my_custom_Nav_Menu_Item_Custom_Fields {

	static $options = array(
			'item' => '
				<div class="additional-menu-field-{name} {container_class}">
				<style scoped>
					.additional-menu-field-megamenu{display:inline-block;}
				</style>
					<label for="edit-menu-item-{name}-{id}">{label}</label>
					<div class="megamenu">
						<select name="{name}" id="select-mega-menu-{id}">
							<option value="">Default Standard Menu</option>
							<option value="{mega1}">Mega Menu - Single Column</option>
							<option value="{mega2}">Mega Menu - 2 Columns</option>
							<option value="{mega3}">Mega Menu - 3 Columns</option>
							<option value="{mega4}">Mega Menu - 4 Columns</option>
							<option value="{mega5}">Mega Menu - 5 Columns</option>
							<option value="{mega6}">Mega Menu - 6 Columns</option>
							<option value="{mega7}">Mega Menu - 7 Columns</option>
						</select>
						<input type="{input_type}" id="edit-menu-item-{name}-{id}" class="widefat code edit-menu-item-{name}" name="menu-item-{name}[{id}]" value="{value}">
					</div>
				</div>
			',
		);

	static function setup() {
		self::$options['fields'] = array(
			'megamenu' => array(
				'name'            => 'megamenu',
				'label'           => esc_html__('Mega Menu', 'my_custom'),
				'container_class' => 'menu-megamenu',
				'input_type'      => 'hidden',
			),
		);

		add_filter( 'wp_edit_nav_menu_walker', function () {
			return 'my_custom_Walker_Nav_Menu_Edit';
		});
		add_filter( 'my_custom_nav_menu_item_additional_fields', array( __CLASS__, '_add_fields' ), 10, 5 );
		add_action( 'save_post', array( __CLASS__, '_save_post' ) );
	}

	static function get_fields_schema() {
		$schema = array();
		foreach(self::$options['fields'] as $name => $field) {
			if (empty($field['name'])) {
				$field['name'] = $name;
			}
			$schema[] = $field;
		}
		return $schema;
	}

	static function get_menu_item_postmeta_key($name) {
		return '_menu_item_' . $name;
	}

	/**
	 * Inject the
	 * @hook {action} save_post
	 */
	static function _add_fields($new_fields, $item_output, $item, $depth, $args) {
		$schema = self::get_fields_schema($item->ID);
		foreach($schema as $field) {
			$field['value'] = get_post_meta($item->ID, self::get_menu_item_postmeta_key($field['name']), true);
			$field['id'] = $item->ID;
			//Tried to implement selected() here but was unsuccesfull, so I just left it like this, the mega fields aren't necessary, you can add them by hand
			$field['mega1'] = 'mega1';
			$field['mega2'] = 'mega2';
			$field['mega3'] = 'mega3';
			$field['mega4'] = 'mega4';
			$field['mega5'] = 'mega5';
			$field['mega6'] = 'mega6';
			$field['mega7'] = 'mega7';
			$new_fields .= str_replace(
				array_map(function($key){ return '{' . $key . '}'; }, array_keys($field)),
				array_values(array_map('esc_attr', $field)),
				self::$options['item']
			);
		}
		return $new_fields;
	}
	/**
	 * Save the newly submitted fields
	 * @hook {action} save_post
	 */
	static function _save_post($post_id) {
		if (get_post_type($post_id) !== 'nav_menu_item') {
			return;
		}
		$fields_schema = self::get_fields_schema($post_id);
		foreach($fields_schema as $field_schema) {
			$form_field_name = 'menu-item-' . $field_schema['name'];
			if (isset($_POST[$form_field_name][$post_id])) {
				$key = self::get_menu_item_postmeta_key($field_schema['name']);
				$value = stripslashes($_POST[$form_field_name][$post_id]);
				update_post_meta($post_id, $key, $value);
			}
		}
	}
}

require_once ABSPATH . 'wp-admin/includes/nav-menu.php';
class my_custom_Walker_Nav_Menu_Edit extends Walker_Nav_Menu_Edit {
	function start_el(&$output, $item, $depth, $args) {
		$item_output = '';
		parent::start_el($item_output, $item, $depth, $args);
		$new_fields = apply_filters( 'my_custom_nav_menu_item_additional_fields', '', $item_output, $item, $depth, $args );
		// Inject $new_fields before: <div class="menu-item-actions description-wide submitbox">
		if ($new_fields) {
			$item_output = preg_replace('/(?=<div[^>]+class="[^"]*submitbox)/', $new_fields, $item_output);
		}
		$output .= $item_output;
	}
}

//Sidebars in Menu

if ( !class_exists('sidebars_custom_menu')) {
    class sidebars_custom_menu {
        public function add_nav_menu_meta_boxes() {
        	add_meta_box(
        		'sidebar_menu_add',
        		esc_html__('Add Sidebar', 'my_custom'),
        		array( $this, 'nav_menu_link'),
        		'nav-menus',
        		'side',
        		'low'
        	);
        }

        public function nav_menu_link() {?>
        	<div id="posttype-sidebars" class="posttypediv">
        		<div id="tabs-panel-sidebars" class="tabs-panel tabs-panel-active">
        			<ul id ="sidebars-checklist" class="categorychecklist form-no-clear">
						<?php
						$i = -1;
						foreach ( $GLOBALS['wp_registered_sidebars'] as $sidebar ) {
							ob_start();
							dynamic_sidebar($sidebar['id']);
							$sidebar_html = ob_get_clean();
							?>
		        			<li>
		        				<label class="menu-item-title">
		        					<input type="checkbox" class="menu-item-checkbox" name="menu-item[<?php echo esc_attr($i); ?>][menu-item-object-id]" value="<?php echo $sidebar['id']; ?>"> <?php echo ucwords( $sidebar['name'] ); ?>
		        				</label>
		        				<input type="hidden" class="menu-item-type" name="menu-item[<?php echo esc_attr($i); ?>][menu-item-type]" value="custom">
		        				<input type="hidden" class="menu-item-attr-title" name="menu-item[<?php echo esc_attr($i); ?>][menu-item-attr-title]" value="<?php echo ucwords( $sidebar['name'] ); ?>">
								<input type="hidden" class="menu-item-title" name="menu-item[<?php echo esc_attr( $i ); ?>][menu-item-title]" value="&nbsp;" />
		        				<input type="hidden" class="menu-item-url" name="menu-item[<?php echo esc_attr($i); ?>][menu-item-url]" value="">
		        				<input type="hidden" class="menu-item-classes" name="menu-item[<?php echo esc_attr($i); ?>][menu-item-classes]" value="menu_sidebar">
		        				<input type="hidden" class="menu-item-description" name="menu-item[<?php echo esc_attr($i); ?>][menu-item-description]" value="<?php echo $sidebar['id']; ?>">
		        			</li>
							<?php
							$i --;
						}
						?>
        			</ul>
        		</div>
        		<p class="button-controls">
        			<span class="list-controls">
        				<a href="<?php echo admin_url( 'nav-menus.php?page-tab=all&amp;selectall=1#posttype-sidebars' ); ?>" class="select-all"><?php esc_html_e('Select All', 'my_custom'); ?></a>
        			</span>
        			<span class="add-to-menu">
        				<input type="submit" class="button-secondary submit-add-to-menu right" value="<?php esc_html_e('Add to Menu', 'my_custom');?>" name="add-post-type-menu-item" id="submit-posttype-sidebars">
        				<span class="spinner"></span>
        			</span>
        		</p>
        	</div>
        <?php }
    }
}

$custom_nav = new sidebars_custom_menu;

add_action('admin_init', array($custom_nav, 'add_nav_menu_meta_boxes'));