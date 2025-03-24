<?php

/**
 * Init class
 *
 * @package Dog posts creator
 */

namespace DogPostsCreator;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Init {

    public static $instance = null;

    public static function instance() {
        // Initialize the plugin
        if (null === self::$instance) {
            self::$instance = new self();
        } 
        return self::$instance;
    }

    private function __construct() {
        // Make Dog posts creator available
        require_once DPC_PATH . 'includes/class-dog-create.php';
        DogCreate::instance();
    }

}