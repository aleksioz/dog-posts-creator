<?php
/**
 * Plugin Name: Dog posts creator
 * Description: A plugin to handle creating "Dog" and editing posts based on Forminator form data.
 * Version: 1.0.1
 * Author: aleksioz
 * https://github.com/aleksioz
 * License: GPL2
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Define the plugin path
define( 'YOUR_PLUGIN_NAME_PATH', plugin_dir_path( __FILE__ ) );

// Include the required files
require_once YOUR_PLUGIN_NAME_PATH . 'includes/class-init.php';

// Initialize the plugin
add_action( 'plugins_loaded', ['Init', 'instance' ]);