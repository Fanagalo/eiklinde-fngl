<?php
/**
 * Fanagalo_underscores_core functions and definitions
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @package Fanagalo_underscores_core
 */

// Disable use XML-RPC
add_filter( 'xmlrpc_enabled', '__return_false' );


if ( ! function_exists( 'eiklinde_fngl_2021_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function eiklinde_fngl_2021_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /assets/languages/ directory.
		 * If you're building a theme based on Healthmasters theme by Fanagalo, use a find and replace
		 * to change 'eiklinde-fngl' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'eiklinde-fngl', get_template_directory() . 'assets/languages' );

		add_theme_support( 'automatic-feed-links' ); // Add default posts and comments RSS feed links to head.
	
		// Let WordPress manage the document title.
		// By adding theme support, we declare that this theme does not use a
		// hard-coded <title> tag in the document head, and expect WordPress to
		// provide it for us.
		add_theme_support( 'title-tag' );

		// Enable support for Post Thumbnails on posts and pages.
		// @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary', 'eiklinde-fngl' ),
			'secondary' => esc_html__( 'Secondary', 'eiklinde-fngl' ),
		) );

		// Switch default core markup for search form, comment form, and comments to output valid HTML5.
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		/*
		add_theme_support( 'custom-background', apply_filters( 'eiklinde_fngl_2021_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );
		*/

		add_theme_support( 'customize-selective-refresh-widgets' ); // Add theme support for selective refresh for widgets.

		// Add support for core custom logo.
		//* @link https://codex.wordpress.org/Theme_Logo
		/*
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
		*/
		
		add_theme_support( 'align-wide' ); // Register support for Gutenberg wide images in your theme

		add_theme_support( 'responsive-embeds' ); // Add theme support for responsive embeds.

		// custom color palette */
		add_theme_support( 'editor-color-palette', array(
			array('name' => __( 'paars',      'eiklinde-fngl' ), 'slug' => 'paars',       'color' => 'hsl(300, 82%, 28%)',),
			array('name' => __( 'blauw',      'eiklinde-fngl' ), 'slug' => 'blauw',       'color' => 'hsl(210, 100%, 45%)',),
			array('name' => __( 'rood',       'eiklinde-fngl' ), 'slug' => 'rood',        'color' => 'hsl(0, 100%, 40%)',),
			array('name' => __( 'tekst grijs','eiklinde-fngl' ), 'slug' => 'tekst grijs', 'color' => 'hsl(0, 0%, 27%)',),
			array('name' => __( 'wit',        'eiklinde-fngl' ), 'slug' => 'wit',         'color' => '#ffffff',),
		
			) );
			
		// Block Editor Font Sizes, from Twentytwenty theme
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => _x( 'Small', 'Name of the small font size in the block editor', 'eiklinde-fngl' ),
					'shortName' => _x( 'S', 'Short name of the small font size in the block editor.', 'eiklinde-fngl' ),
					'size'      => 18,
					'slug'      => 'small',
				),
				array(
					'name'      => _x( 'Regular', 'Name of the regular font size in the block editor', 'eiklinde-fngl' ),
					'shortName' => _x( 'M', 'Short name of the regular font size in the block editor.', 'eiklinde-fngl' ),
					'size'      => 21,
					'slug'      => 'normal',
				),
				array(
					'name'      => _x( 'Large', 'Name of the large font size in the block editor', 'eiklinde-fngl' ),
					'shortName' => _x( 'L', 'Short name of the large font size in the block editor.', 'eiklinde-fngl' ),
					'size'      => 26.25,
					'slug'      => 'large',
				),
				array(
					'name'      => _x( 'Larger', 'Name of the larger font size in the block editor', 'eiklinde-fngl' ),
					'shortName' => _x( 'XL', 'Short name of the larger font size in the block editor.', 'eiklinde-fngl' ),
					'size'      => 32,
					'slug'      => 'larger',
				),
			)
		);

		add_theme_support( 'editor-styles' );

	}
endif;
add_action( 'after_setup_theme', 'eiklinde_fngl_2021_setup' );


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function eiklinde_fngl_2021_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'eiklinde-fngl' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'eiklinde-fngl' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'eiklinde_fngl_2021_widgets_init' );


/**
 * Enqueue block editor styles.
 */
function eiklinde_fngl_2021_editor_styles() {
	wp_enqueue_style( 'eiklinde-fngl', get_theme_file_uri( 'editor.css' ), array(), wp_get_theme()->get( 'Version' ), 'all' );
}
add_action( 'enqueue_block_editor_assets', 'eiklinde_fngl_2021_editor_styles', 1, 1 );


/**
 * Enqueue styles and scripts
 */
function eiklinde_fngl_2021_scripts() {

	// Replace default FRONTEND styles with custom styles
		// Overwrite core BLOCK styles with empty styles
		wp_dequeue_style( 'wp-block-library' );
		wp_deregister_style( 'wp-block-library' );
		wp_register_style( 'wp-block-library', '' );

		// Overwrite core THEME styles with empty styles
		wp_dequeue_style( 'wp-block-library-theme' );
		wp_deregister_style( 'wp-block-library-theme' );
		wp_register_style( 'wp-block-library-theme', '' );

	// Enable custom frontend styles; 'style' refers to style.css
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	// wp_enqueue_style('style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));

	// Script for responsive mobile menu
	// source: https://www.customyou.nl/responsive-menu-wordpress-clean-tutorial/
	wp_enqueue_script( 'nav-menu.js', get_template_directory_uri() . '/assets/js/nav-menu.js', array('jquery'), '20151111', true );

	// Helps with accessibility for keyboard only users. Original from _s
		wp_enqueue_script( 'eiklinde-fngl-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );

	// Makes threads in comments. Original from _s
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
add_action( 'wp_enqueue_scripts', 'eiklinde_fngl_2021_scripts' );

/* Add functions from directory "inc" */ 
require get_template_directory() . '/inc/custom-header.php';  // Implement the Custom Header feature.
require get_template_directory() . '/inc/template-tags.php';  // Custom template tags for this theme.
require get_template_directory() . '/inc/template-functions.php';  // Functions which enhance the theme by hooking into WordPress.
require get_template_directory() . '/inc/customizer.php';  // Customizer additions.

if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';  // Load Jetpack compatibility file.
}

?>