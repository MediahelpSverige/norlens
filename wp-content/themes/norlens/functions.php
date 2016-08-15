<?php
if(function_exists('register_nav_menus')){
	register_nav_menus(
		array(
			'main_nav' => 'Main Navigation Menu',
			'footer_nav' => 'Main Footer Menu'
			)
	);
}

if ( file_exists( STYLESHEETPATH . '/class.my-theme-options.php' ) )
	include_once( STYLESHEETPATH . '/class.my-theme-options.php' );

add_theme_support( 'post-thumbnails' ); 
/* 
 * Helper function to return the theme option value. If no value has been saved, it returns $default.
 * Needed because options are saved as serialized strings.
 *
 * This code allows the theme to work without errors if the Options Framework plugin has been disabled.
 */

if ( !function_exists( 'of_get_option' ) ) {
function of_get_option($name, $default = false) {
	
	$optionsframework_settings = get_option('optionsframework');
	
	// Gets the unique option id
	$option_name = $optionsframework_settings['id'];
	
	if ( get_option($option_name) ) {
		$options = get_option($option_name);
	}
		
	if ( isset($options[$name]) ) {
		return $options[$name];
	} else {
		return $default;
	}
}
}


/**
 * Register our sidebars and widgetized areas.
 *
 */
function landqvist_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div class="sidebar-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
	'name' => __( 'Footer Widget adress', 'landqvist' ),
	'id' => 'footer-adress',
	'description' => __( 'Found at the bottom of every page (except 404s and optional homepage template) Left Footer Widget.', 'landqvist' ),
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
	) );
	register_sidebar( array(
	'name' => __( 'Öppettider', 'landqvist' ),
	'id' => 'opening-hours',
	'description' => __( 'Found at the bottom of every page (except 404s and optional homepage template) Left Footer Widget.', 'landqvist' ),
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
	) );

	register_sidebar( array(
	'name' => __( 'Footer Widget Länkar', 'landqvist' ),
	'id' => 'footer-links',
	'description' => __( 'Found at the bottom of every page (except 404s and optional homepage template) Left Footer Widget.', 'landqvist' ),
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
	) );

	register_sidebar( array(
	'name' => __( 'Header Kontaktinfo', 'landqvist' ),
	'id' => 'header-kontakt',
	'description' => __( 'Found at the bottom of every page (except 404s and optional homepage template) Left Footer Widget.', 'landqvist' ),
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
	) );

}
add_action( 'widgets_init', 'landqvist_widgets_init' );


function nyheter_custom_init() {
    $args = array(
      'public' => true,
      'label'  => 'Nyheter',
      'description'        => __( 'Description.', 'landqvist' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'nyheter' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    );
    register_post_type( 'nyheter', $args );
}
add_action( 'init', 'nyheter_custom_init' );

function codex_custom_init() {
    $args = array(
      'public' => true,
      'label'  => 'Medarbetare',
      'description'        => __( 'Description.', 'landqvist' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'arbetare' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    );
    register_post_type( 'arbetare', $args );
}
add_action( 'init', 'codex_custom_init' );


function work_custom_init() {
    $args = array(
      'public' => true,
      'label'  => 'Referensuppdrag',
      'description'        => __( 'Description.', 'landqvist' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'work' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'taxonomies'		 => array('category'),
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    );
    register_post_type( 'work', $args );
}
add_action( 'init', 'work_custom_init' );

function transport_custom_init() {
    $args = array(
      'public' => true,
      'label'  => 'Transporter',
      'description'        => __( 'Description.', 'landqvist' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'transport' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'taxonomies'		 => array('category'),
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    );
    register_post_type( 'transport', $args );
}
add_action( 'init', 'transport_custom_init' );


function bildspel_custom_init() {
    $args = array(
      'public' => true,
      'label'  => 'bildspel på förstasidan',
      'description'        => __( 'Description.', 'landqvist' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'bildspel' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'taxonomies'		 => array('category'),
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    );
    register_post_type( 'bildspel', $args );
}
add_action( 'init', 'bildspel_custom_init' );



function new_excerpt_more( $more ) {
	return ' <a class="read-more" href="' . get_permalink( get_the_ID() ) . '">' . __( 'Klick här för att läsa mer', 'your-text-domain' ) . '</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

//Search filter
function mySearchFilter($query) {
	if ($query->is_search) {
		//$query->set('category_name','aktuellt');
	}

	return $query;
}

add_filter('pre_get_posts','mySearchFilter');


function my_project_filter_publish_dates( $the_date, $d, $post ) {
	if ( is_int( $post) ) {
		$post_id = $post;
	} else {
		$post_id = $post->ID;
	}

	if ( 'post' != get_post_type( $post_id ) )
		return $the_date;

	return date( 'Y-m-d', strtotime( $the_date ) );
}
add_action( 'get_the_date', 'my_project_filter_publish_dates', 10, 3 );



?>