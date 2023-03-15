<?php
function mytheme_register_nav_menus() {
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'www.sabhriti.com' ),
		'footer' => __( 'Footer Menu', 'www.sabhriti.com' )
	));
}
add_action( 'after_setup_theme', 'mytheme_register_nav_menus' );


function add_class_on_a_tag($classes, $item, $args)
{
	if (isset($args->menu_item_anchor_class)) {
		$classes['class'] = $args->menu_item_anchor_class;
	}
	return $classes;
}

add_filter('nav_menu_link_attributes', 'add_class_on_a_tag', 1, 3);

function add_additional_class($classes, $item, $args){
	if(isset($args->item_class)){
		$classes[] = $args->item_class;
	}
	return $classes;
}

add_filter('nav_menu_css_class', 'add_additional_class', 1, 3);
