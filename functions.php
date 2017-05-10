<?php
function register_theme_menus(){
	register_nav_menus(
		array(
			'primary-menu' => __( 'Primary Menu' )
			)

		);
}

add_action('init', 'register_theme_menus');

function theme_styles() {

	wp_enqueue_style('googlefont_css', 'https://fonts.googleapis.com/css?family=Roboto:400,400i|Source+Sans+Pro:600,700');
  wp_enqueue_style('fontawesome_css', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
	wp_enqueue_style('main_css', get_template_directory_uri() . '/lib/css/style.css');


}

add_action('wp_enqueue_scripts', 'theme_styles');




function theme_js() {

	global $wp_scripts;

	wp_register_script('html5_shiv','https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js', '', '', false);
	wp_register_script('respond_js','https://oss.maxcdn.com/respond/1.4.2/respond.min.js', '', '', false);


	$wp_scripts->add_data('html5_shiv', 'conditional', 'lt IE 9');
	$wp_scripts->add_data('respond_js', 'conditional', 'lt IE 9');

	wp_enqueue_script('tether_js', get_template_directory_uri() . '/lib/js/tether.min.js', array('jquery'), '', true );
  wp_enqueue_script('main_js', get_template_directory_uri() . '/lib/js/main.js', array('jquery'), '', true );
}

add_action('wp_enqueue_scripts', 'theme_js');

//Add featured Images
add_theme_support( 'post-thumbnails' );

//Allow SVG uploads
function custom_mtypes( $m ){
    $m['svg'] = 'image/svg+xml';
    $m['svgz'] = 'image/svg+xml';
    return $m;
}
add_filter( 'upload_mimes', 'custom_mtypes' );

/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Left Menu Sidebar',
		'id'            => 'left_menu',
		'before_widget' => '<div>',
		'after_widget'  => '</div>'
	) );

  register_sidebar( array(
		'name'          => 'Quick Link Menu',
		'id'            => 'quick_link_menu',
		'before_widget' => '<div class="quick-links">',
		'after_widget'  => '</div>'
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );
