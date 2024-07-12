<?php
/*
Plugin Name: Hello World
Plugin URI:  http://helloworld.com
Description: A simple plugin to display a custom message using a shortcode.
Version:     1.0
Author:      Hello World
Author URI:  http://helloworld.com
License:     GPL2
*/

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
    exit;
}

// Function to display the custom message
function custom_message_shortcode() {
    return '<div class="custom-message">Hello World!</div>';
}

// Register the shortcode
add_shortcode('custom_message', 'custom_message_shortcode');

// Enqueue custom stylesheet
function custom_message_plugin_styles() {
    wp_enqueue_style('custom-message-styles', plugins_url('style.css', __FILE__));
}

add_action('wp_enqueue_scripts', 'custom_message_plugin_styles');
