<?php
/*
Plugin Name: Shoestrap 3 Extra Widget Areas
Plugin URI: http://wpmu.io
Description: Adds some extra widget areas to the Shoestrap theme.
Version: 1.4
Author: Aristeides Stathopoulos
Author URI:  http://aristeides.com
GitHub Plugin URI: https://github.com/shoestrap/shoestrap-3-extra-widget-areas
*/

if ( !defined( 'REDUX_OPT_NAME' ) )
	define( 'REDUX_OPT_NAME', 'shoestrap' );

// plugin folder url
if ( !defined( 'S3EWA_PLUGIN_URL' ) )
	define( 'S3EWA_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

// plugin folder path
if ( !defined( 'S3EWA_PLUGIN_DIR' ) )
	define( 'S3EWA_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

// plugin root file
if ( !defined( 'S3EWA_PLUGIN_FILE' ) )
	define( 'S3EWA_PLUGIN_FILE', __FILE__ );

function shoestrap_ewa_include_files() {
	include_once( S3EWA_PLUGIN_DIR . 'includes/admin.php' );
	include_once( S3EWA_PLUGIN_DIR . 'includes/functions.php' );
}
add_action( 'shoestrap_include_files', 'shoestrap_ewa_include_files' );

// Include the updater
require_once( plugin_dir_path(__FILE__) . 'includes/updater/updater.php' );