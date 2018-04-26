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
	wp_enqueue_style('twentyseventeen-child-google-fonts','//fonts.googleapis.com/css?family=Oranienbaum');
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
