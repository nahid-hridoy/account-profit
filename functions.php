<?php

function accountprofit_nmh47_theme_files() {
	
	
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '1.0','all' );
	//wp_enqueue_style( 'ico-font', get_template_directory_uri() . '/assets/css/icofont.css', array(), '1.0','all' );
	wp_enqueue_style( 'owl.carousel', get_template_directory_uri() . '/assets/css/owl.carousel.css', array(), '1.0','all' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0','all' );
	wp_enqueue_style( 'Main-CSS', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0','all' );
	wp_enqueue_style( 'responsive-CSS', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.0','all' );

	wp_enqueue_style( 'soldis-style', get_stylesheet_uri() );

	wp_enqueue_script( 'gmap-3', get_template_directory_uri() . '/assets/js/gmap3.min.js', array('jquery'), '1.0', true );
	wp_enqueue_script( 'gmap-3-link', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyC7IuOflifct9IyL7WB-BcWFczbYE8cVWA', array('jquery'), '1.0', true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.0', true );
	wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '1.0', true );

	wp_enqueue_script( 'accountprofit-main-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}


}
add_action('wp_enqueue_scripts','accountprofit_nmh47_theme_files');



// THEME SUPPORT
function accountprofit_theme_supports(){

	//loading theme textdomain
	load_theme_textdomain( 'accountprofit', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	//adding support for automatic title tag
	add_theme_support( 'title-tag' );

	//enabling post thumbnail support
	add_theme_support( 'post-thumbnails' );

	//enabling custom image size
	add_image_size( 'accountprofit-thumb', 740, 520, true );

	// regestaring primary & secondary menu
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'accountprofit' ),
		'menu-2' => esc_html__( 'Footer', 'accountprofit' ),
	) );

	//HTML5 Support
	add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	//add custom logo
	add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
}
add_action('after_setup_theme','accountprofit_theme_supports');


//including cs-framework
require get_template_directory(). '/inc/cs-framework/cs-framework.php';

// Custom Slug Generate
function create_slug($slug){
    $lettersNumbersSpacesHypens = '/[^\-\s\pN\pL]+/u';
    $spacesDuplicateHypens = '/[\-\s]+/';

    $slug = preg_replace($lettersNumbersSpacesHypens, '', mb_strtolower($slug, 'UTF-8'));
    $slug = preg_replace($spacesDuplicateHypens, '-', $slug);
    $slug = trim($slug, '-');

    return $slug;
}


//register widget
function accountprofit_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Contact Bottom Form', 'accountprofit' ),
		'id'            => 'contact-bottom-form',
		'description'   => esc_html__( 'Add Bottom Form widgets here.', 'accountprofit' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Contact Page Form', 'accountprofit' ),
		'id'            => 'contact-page-form',
		'description'   => esc_html__( 'Add Contact Page Form widgets here.', 'accountprofit' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Contact PopUp Form', 'accountprofit' ),
		'id'            => 'popup-contact-form',
		'description'   => esc_html__( 'Add PopUp Form widgets here.', 'accountprofit' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'accountprofit_widgets_init' );

//custom posts register

function accountprofit_theme_custom_posts() {

	//service post data
	register_post_type( 'service-post',
        array(
            'labels' => array(
                'name' => __( 'Service-Posts' ),
                'singular_name' => __( 'service-post' )
            ),
            'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
            'public' => true,
            'show_ui' => true,
            'menu_icon'   => 'dashicons-star-filled',
        )
    );

    //service list data
	register_post_type( 'service',
        array(
            'labels' => array(
                'name' => __( 'Services' ),
                'singular_name' => __( 'service' )
            ),
            'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
            'public' => true,
            'show_ui' => true,
            'menu_icon'   => 'dashicons-editor-ul',
        )
    );

    //client data
	register_post_type( 'client',
        array(
            'labels' => array(
                'name' => __( 'Clients' ),
                'singular_name' => __( 'client' )
            ),
            'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
            'public' => false,
            'show_ui' => true,
            'menu_icon'   => 'dashicons-art',
        )
    );

    


}
add_action( 'init','accountprofit_theme_custom_posts' );

//solve single page not found error for custom post type
flush_rewrite_rules( false );


/**
 * Enables the Excerpt meta box in Page edit screen.
 */
function accountprofit_add_excerpt_support_for_pages() {
	add_post_type_support( 'service', 'excerpt' );
}
add_action( 'init', 'accountprofit_add_excerpt_support_for_pages' );



