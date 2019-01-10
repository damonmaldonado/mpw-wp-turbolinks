<?php
/*
Plugin Name: MPW Turbolinks
Plugin URI:  
Description: Load Turbolinks Script
Version:     1.0.0
License:     GPL3
License URI: https://www.gnu.org/licenses/gpl-3.0.html
*/



function mpw_turbolinks_setup() {

	wp_register_script( 'turbolinks', plugin_dir_url( __FILE__ ) . '/js/turbolinks.js', NULL, '5.2.0', true );
	wp_enqueue_script( 'turbolinks' );

}

add_action( 'wp_enqueue_scripts', 'mpw_turbolinks_setup' );
