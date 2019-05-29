<?php
/**
 * GeneratePress child theme functions and definitions.
 *
 * Add your custom PHP in this file. 
 * Only edit this file if you have direct access to it on your server (to fix errors if they happen).
 */

function generatepress_child_enqueue_scripts()
{
	if (is_rtl()) {
		wp_enqueue_style('generatepress-rtl', trailingslashit(get_template_directory_uri()) . 'rtl.css');
	}
	wp_enqueue_style('animate', get_stylesheet_directory_uri() . '/assets/animate/animate.min.css');
	wp_enqueue_style('slick', get_stylesheet_directory_uri() . '/assets/slick/slick.css');
	wp_enqueue_style('slick-theme', get_stylesheet_directory_uri() . '/assets/slick/slick-theme.css');
	wp_enqueue_script('jquery');
	wp_enqueue_script('slick', get_stylesheet_directory_uri() . '/assets/slick/slick.min.js');
	wp_enqueue_script('script', get_stylesheet_directory_uri() . '/script.js');
}
add_action('wp_enqueue_scripts', 'generatepress_child_enqueue_scripts', 100);
