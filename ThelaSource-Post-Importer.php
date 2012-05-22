<?php
/*
Plugin Name: The La Source Post Importer
Plugin URI: https://github.com/echu113/ThelaSource-Post-Importer
Description: This plugin is designed for easy posting of The Source Newspaper articles. Should be able to parse a given document into specific posts. 
Version: 1.0
Author: Enej, Eric
License: GPL2
*/

add_action( 'admin_menu', 'my_plugin_menu' );

function my_plugin_menu() {
	add_options_page( 'My Plugin Options', 'My Plugin', 'manage_options', 'my-unique-identifier', 'my_plugin_options' );
}

function my_plugin_options() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	echo '<div class="wrap">';
	echo '<p>Here is where the form would go if I actually had options.</p>';
	echo '</div>';
}

?>
