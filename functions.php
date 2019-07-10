<?php
/**
 * task functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package task
 */

if ( ! function_exists( 'task_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function task_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on task, use a find and replace
		 * to change 'task' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'task', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'task' ),
			'menu-top' => esc_html__( 'Top menu', 'task' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'task_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'task_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function task_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'task_content_width', 640 );
}
add_action( 'after_setup_theme', 'task_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function task_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'task' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'task' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'task_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function task_scripts() {
	wp_enqueue_style( 'task-style', get_stylesheet_uri() );

	// Google Fonts
	wp_enqueue_style('task-fonts', "https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800");
	// Fontawesom
		wp_enqueue_style('task-font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css');
	// Bootstrap
		wp_enqueue_style('task-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
	// Responsive Framework
		wp_enqueue_style('task-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
	// Main Stylesheet
		wp_enqueue_style('task-main', get_template_directory_uri() . '/css/style.css');

	wp_enqueue_script( 'html5shiv', 'https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js' );
	wp_script_add_data( 'html5shiv', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'respond', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js' );
	wp_script_add_data( 'respond', 'conditional', 'lt IE 9' );


	wp_enqueue_script( 'task-jquery', get_template_directory_uri() . '/js/jquery-1.12.3.min.js', array(), '20151215', true );
	wp_enqueue_script( 'task-waypoints', get_template_directory_uri() . '/js/waypoints.min.js', array(), '20151215', true );
	wp_enqueue_script( 'task-counterup', get_template_directory_uri() . '/js/jquery.counterup.min.js', array(), '20151215', true );
	// Back To Top
	wp_enqueue_script( 'task-backtotop', get_template_directory_uri() . '/js/backtotop.js', array('jquery'), '20151215', true );
	// JQuery Click to Scroll down with Menu
	wp_enqueue_script( 'task-localScroll', get_template_directory_uri() . '/js/jquery.localScroll.min.js', array(), '20151215', true );
	wp_enqueue_script( 'task-scrollTo', get_template_directory_uri() . '/js/jquery.scrollTo.min.js', array(), '20151215', true );
	wp_enqueue_script( 'task-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '20151215', true );
	wp_enqueue_script( 'task-main', get_template_directory_uri() . '/js/main.js', array(), '20151215', true );

	wp_enqueue_script( 'task-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'task-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'task_scripts' );

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

add_filter('show_admin_bar', '__return_false'); //disable

add_filter( 'get_custom_logo', 'change_logo_class' );
function change_logo_class( $html ) {
	$html = str_replace( 'custom-logo-link', 'navbar-brand custom_navbar-brand', $html );
	return $html;
}
