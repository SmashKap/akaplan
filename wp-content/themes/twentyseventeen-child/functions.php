<?php
/**
* Twenty Seventeen Child functions and definitions
*
* @link http://codex.wordpress.org/Theme_Development
* @link http://codex.wordpress.org/Child_Themes
*
* @package WordPress
* @subpackage Twenty_Seventeen
* @since 1.0
*/

// Enqueue scripts and styles
function twentyseventeen_child_scripts(){
	wp_enqueue_style( 'twentyseventeen-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'twentyseventeen-style' ));
	wp_enqueue_style('twentyseventeen-child-google-fonts','//fonts.googleapis.com/css?family=Oranienbaum|Abel|Cuprum|Francois+One|Hind|Julius+Sans+One|Jura|PT+Sans+Narrow|Roboto+Condensed|Open+Sans|Oxygen');
}
add_action( 'wp_enqueue_scripts', 'twentyseventeen_child_scripts' );


/*
 * A simple function to control the number of Twenty Seventeen Theme Front Page Sections
 * Source: wpcolt.com
 */
function wpc_custom_front_sections( $num_sections )
	{
		return 6; //Change this number to change the number of the sections.
	}
add_filter( 'twentyseventeen_child_front_page_sections', 'wpc_custom_front_sections' );


function create_custom_post_types() {
    register_post_type( 'projects',
        array(
            'labels' => array(
                'name' => __( 'Projects' ),
                'singular_name' => __( 'Project' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'portfolio' ),
        )
    );
}
add_action( 'init', 'create_custom_post_types' );

/* Create dynamic sidebar to display twitter feed */
function twitter_feed_sidebar() {
	register_sidebar(
		array(
			'name' => __( 'Twitter feed sidebar', 'twentyseventeen-child' ),
			'id' => 'twitter-feed-sidebar',
			'description' =>__( 'Appears on the static front page template', 'twentyseventeen-child'),
			'before_widget' => '<aside class="widget-content twitter-feed-sidebar">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
	) );
}
add_action( 'widgets_init', 'twitter_feed_sidebar' );

function contact_form_sidebar() {
	register_sidebar(
		array(
			'name' => __( 'Contact form sidebar', 'twentyseventeen-child' ),
			'id' => 'contact-form-sidebar',
			'description' =>__( 'Appears on the static front page template', 'twentyseventeen-child'),
			'before_widget' => '<aside class="widget-content contact-form-sidebar">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
	) );
}
add_action( 'widgets_init', 'contact_form_sidebar' );

function child_theme_setup() {
	// override parent theme's 'more' text for excerpts
	remove_filter( 'excerpt_more', 'twentyseventeen_excerpt_more' );
}
add_action( 'after_setup_theme', 'child_theme_setup' );

function custom_excerpt_more($more) {
	return '<div class="take-action-link"><a href="'. get_permalink() . '"><span>Read more</span> »</a></div>';
}
add_filter('excerpt_more', 'custom_excerpt_more');
