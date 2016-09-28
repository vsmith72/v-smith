<?php
/************************************************************************
    setup - theme setup
************************************************************************/
// Register Theme Features
function vs_theme_features()  {

	// Add theme support for Automatic Feed Links
	add_theme_support( 'automatic-feed-links' );

	// Add theme support for Post Formats
	add_theme_support( 'post-formats', array( 'status', 'quote', 'gallery', 'image', 'video', 'audio', 'link', 'aside', 'chat' ) );

	// Add theme support for Featured Images
	add_theme_support( 'post-thumbnails' );

	// Add theme support for HTML5 Semantic Markup
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
}
add_action( 'after_setup_theme', 'vs_theme_features' );

/************************************************************************
    scripts and styles - enque scripts and styles
************************************************************************/
function vs_add_scripts()
{
  // Deregister the included library
  wp_deregister_script( 'jquery' );

  // Register the library again from Google's CDN
  wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', array(), null, false );

  // Register Bootstrap JS:
  wp_register_script( 'bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array( 'jquery' ), true );
  wp_enqueue_script( 'bootstrap-js' );

  // Register JavaScript vs-scripts:
  wp_register_script( 'vs-scripts', get_template_directory_uri() . '/js/vs-scripts.js', array( 'jquery' ), true );
  wp_enqueue_script( 'vs-scripts' );

}
add_action( 'wp_enqueue_scripts', 'vs_add_scripts' );

// Load the theme stylesheets
function vs_theme_styles()
{
  // Load all of the styles that need to appear on all pages
  // bootstrap css
  wp_enqueue_style('bootstrap-min', get_template_directory_uri() . '/css/bootstrap-3.3.7-dist/css/bootstrap.min.css');
  // font awesome css
  wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css');
  wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css');
  // coder-portfolio custom css
  wp_enqueue_style( 'theme-style', get_stylesheet_uri() );

}
add_action('wp_enqueue_scripts', 'vs_theme_styles');

/************************************************************************
    MENUS -- Register Navigation Menus
************************************************************************/

function vs_navigation_menus() {

  $locations = array(
    'header-menu' => __( 'Menu for header', 'vs' ),
    'social-menu' => __( 'Social Menu for footer', 'vs' ),
  );
  register_nav_menus( $locations );

}
add_action( 'init', 'vs_navigation_menus' );

/************************************************************************
    CUSTOM POST TYPES
************************************************************************/
// Portfolio Custom Post Type
function vs_portfolio_cpt() {

  $args = array(
    'label'  => 'Portfolio',
    'public' => true,
    'has_archive' => true,
    'menu_icon' => 'dashicons-portfolio',
    'taxomomies' => array( 'post_tag', 'category'),
  );

  register_post_type( 'portfolio', $args );
}

add_action( 'init', 'vs_portfolio_cpt' );
