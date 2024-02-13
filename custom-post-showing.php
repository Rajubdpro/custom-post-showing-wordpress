<?php
/*
* Plugin Name: Custom Post Showing
* Plugin URI:
* Description: This plugin will display post autometicly 
* Author:rajubdpro
* Author URI:rajubdpro.com
* Licence: GPL5
* Version:1.0.0
* Text-Domain: custom_post_showing
*/

//Check file
if( !defined('ABSPATH')){
    exit();
}


// Declare some common Constant

// Declare Plugin Version
if( !defined('cps_version')){
    define('cps_version', '1.0.0');
}

// Plugin File Path
if ( ! defined( 'cps_FILE' ) ) {
    define( 'cps_FILE', __FILE__ );
}

// Plugin main Path
if ( ! defined( 'cps_PATH' ) ) {
    define( 'cps_PATH', plugin_dir_path( cps_FILE ) );
}

//Plugin URL Path
if ( ! defined( 'cps_URL' ) ) {
    define( 'cps_URL', plugins_url( '', cps_FILE ) );
}

require_once cps_PATH . 'inc/Loader.php';
