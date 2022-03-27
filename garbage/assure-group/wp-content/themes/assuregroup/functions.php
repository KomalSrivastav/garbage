<?php
function assuregroup_menus() {
	$locations = array(
		'primary'  => __( 'Desktop Horizontal Menu', 'twentytwenty' ),
		'mobile'   => __( 'Mobile Menu', 'twentytwenty' ),
		'footer'   => __( 'Footer Menu', 'twentytwenty' )
	);

	register_nav_menus( $locations );
}

add_action( 'init', 'assuregroup_menus' );

function footer1_widgets_init() {

	register_sidebar( array(
		'name'          => 'Footer 1',
		'id'            => 'footer1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'footer1_widgets_init' );
function footer2_widgets_init() {

	register_sidebar( array(
		'name'          => 'Footer 2',
		'id'            => 'footer2',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'footer2_widgets_init' );
function footer3_widgets_init() {

	register_sidebar( array(
		'name'          => 'Footer 3',
		'id'            => 'footer3',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'footer3_widgets_init' );
add_theme_support( 'custom-logo' );
function new_submenu_class($menu) {    
    $menu = preg_replace('/ class="sub-menu"/','/ class="submenu" /',$menu);        
    return $menu;      
}

add_filter('wp_nav_menu','new_submenu_class');
add_filter( 'widget_text', 'do_shortcode' );

?>