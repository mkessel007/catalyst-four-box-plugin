<?php

// load scripts

if ( ! is_admin() ) { add_action( 'wp_enqueue_scripts', 'cfsp_add_javascript' ); }

if ( ! function_exists( 'cfsp_add_javascript' ) ) {
	function cfsp_add_javascript() {
		wp_register_script( 'box-layout', plugin_dir_url( __FILE__ ) . 'js/box-layout.js', array( 'jquery' ), '1.0.0', TRUE );
		do_action( 'cfsp_add_javascript' );
	}
}

add_action( 'cfsp_add_javascript', 'cfsp_load_js' );

function cfsp_load_js() {
	wp_enqueue_script( 'box-layout' );
}