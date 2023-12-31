<?php
/**
 * Bernhardt News Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Bernhardt_News_Theme
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function bernhardt_news_theme_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Bernhardt News Theme, use a find and replace
		* to change 'bernhardt-news-theme' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'bernhardt-news-theme', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'bernhardt-news-theme' ),
		)
	);

	register_nav_menus(
		array(
			'menu-2' => esc_html__( 'Secondary', 'bernhardt-news-theme' ),
		)
	);


	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'bernhardt_news_theme_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'bernhardt_news_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bernhardt_news_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'bernhardt_news_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'bernhardt_news_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bernhardt_news_theme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'bernhardt-news-theme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'bernhardt-news-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Header Sidebar', 'bernhardt-news-theme' ),
			'id'            => 'header-sidebar',
			'description'   => esc_html__( 'Add widgets here.', 'bernhardt-news-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Column 1', 'bernhardt-news-theme' ),
			'id'            => 'footer-col-1',
			'description'   => esc_html__( 'Add widgets here.', 'bernhardt-news-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h6 class="widget-title">',
			'after_title'   => '</h6>',
		)
	);
	
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Column 2', 'bernhardt-news-theme' ),
			'id'            => 'footer-col-2',
			'description'   => esc_html__( 'Add widgets here.', 'bernhardt-news-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h6 class="widget-title">',
			'after_title'   => '</h6>',
		)
	);
	
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Column 3', 'bernhardt-news-theme' ),
			'id'            => 'footer-col-3',
			'description'   => esc_html__( 'Add widgets here.', 'bernhardt-news-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h6 class="widget-title">',
			'after_title'   => '</h6>',
		)
	);
	
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Column 4', 'bernhardt-news-theme' ),
			'id'            => 'footer-col-4',
			'description'   => esc_html__( 'Add widgets here.', 'bernhardt-news-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h6 class="widget-title">',
			'after_title'   => '</h6>',
		)
	);
	
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Column 5', 'bernhardt-news-theme' ),
			'id'            => 'footer-col-5',
			'description'   => esc_html__( 'Add widgets here.', 'bernhardt-news-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h6 class="widget-title">',
			'after_title'   => '</h6>',
		)
	);
	
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Column 6', 'bernhardt-news-theme' ),
			'id'            => 'footer-col-6',
			'description'   => esc_html__( 'Add widgets here.', 'bernhardt-news-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h6 class="widget-title">',
			'after_title'   => '</h6>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Bottom', 'bernhardt-news-theme' ),
			'id'            => 'footer-bottom',
			'description'   => esc_html__( 'Add widgets here.', 'bernhardt-news-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'bernhardt_news_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function bernhardt_news_theme_scripts() {
	wp_enqueue_style( 'bernhardt-news-theme-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'bernhardt-news-theme-style', 'rtl', 'replace' );

	wp_enqueue_script( 'bernhardt-news-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bernhardt-news-theme-script', get_template_directory_uri() . '/js/script.js', array(), _S_VERSION, true );

	wp_enqueue_style( 'bernhardt-frank-ruhl-libre', 'https://fonts.googleapis.com/css2?family=Frank+Ruhl+Libre:wght@300;400;500;600;700;800;900&display=swap', array(), _S_VERSION );
	wp_enqueue_style( 'bernhardt-raleway', 'https://fonts.googleapis.com/css2?family=Frank+Ruhl+Libre:wght@300;400;500;600;700;800;900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', array(), _S_VERSION );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bernhardt_news_theme_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

//add SVG support

function cc_mime_types( $mimes ){
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
  }
  add_filter( 'upload_mimes', 'cc_mime_types' );


//add picture format

add_image_size('custom-post-thumbnail', 460, 460);

//add additional fields for social network

function custom_user_profile_fields($user_contactmethods) {
	// Add custom fields
	$user_contactmethods['linkedin_field'] = 'Linkedin';
	
	return $user_contactmethods;
}
add_filter('user_contactmethods', 'custom_user_profile_fields');

function save_custom_user_profile_fields( $user_id ) {
	if ( ! current_user_can( 'edit_user', $user_id ) ) {
		return false;
	}

	// Save the values of the custom fields
	update_user_meta( $user_id, 'linkedin_field', sanitize_text_field( $_POST['linkedin_field'] ) );
}
add_action( 'personal_options_update', 'save_custom_user_profile_fields' );
add_action( 'edit_user_profile_update', 'save_custom_user_profile_fields' );
