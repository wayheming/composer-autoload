<?php
/**
 * Plugin Name: Autoload composer
 * Plugin URI: https://mywebsite.com
 * Description: Empty.
 * Author: Ernest Beginov
 * Version: 0.0.1
 * Author URI: https://mywebsite.com
 */

defined( 'ABSPATH' ) || exit;

require_once plugin_dir_path( __FILE__ ) . 'vendor/autoload.php';

WHPluginComposer\Includes\Plugin::get_instance();
