<?php
/************************************************************************
    setup - theme setup
************************************************************************/
// Register Theme Features
function custom_theme_features()  {

	// Add theme support for Automatic Feed Links
	add_theme_support( 'automatic-feed-links' );

	// Add theme support for Post Formats
	add_theme_support( 'post-formats', array( 'status', 'quote', 'gallery', 'image', 'video', 'audio', 'link', 'aside', 'chat' ) );

	// Add theme support for Featured Images
	add_theme_support( 'post-thumbnails' );

	// Add theme support for HTML5 Semantic Markup
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
}
add_action( 'after_setup_theme', 'custom_theme_features' );

/************************************************************************
    scripts and styles - enque scripts and styles
************************************************************************/
function vs_add_scripts()
{
    // Deregister the included library
    wp_deregister_script( 'jquery' );

    // Register the library again from Google's CDN
    wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js', array(), null, false );
    // Register JavaScript vs-scripts:
    wp_register_script( 'vs-scripts', get_template_directory_uri() . '/js/vs-scripts.js', array( 'jquery' ), true );
    wp_enqueue_script( 'vs-scripts' );
    // Register Bootstrap JS:
    wp_register_script( 'bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js', array( 'jquery' ), true );
    wp_enqueue_script( 'bootstrap-js' );
}
add_action( 'wp_enqueue_scripts', 'vs_add_scripts' );

