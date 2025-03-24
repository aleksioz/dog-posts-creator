<?php
/**
 * Plugin Name: Dog posts creator
 * Description: A plugin to handle creating "Dog" and editing posts based on Forminator form data.
 * Version: 1.0.5
 * Author: aleksioz
 * https://github.com/aleksioz
 * License: GPL2
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Define the plugin path
define( 'DPC_PATH', plugin_dir_path( __FILE__ ) );

// Include the required files
require_once DPC_PATH . 'includes/class-init.php';

// Initialize the plugin
add_action( 'plugins_loaded', ['DogPostsCreator\Init', 'instance' ]);