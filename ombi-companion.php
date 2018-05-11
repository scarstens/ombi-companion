<?php
/**
 * Ombi Companion
 *
 * @wordpress-plugin
 * @package        WordPress
 * @subpackage     Ombi_companion
 * @author         Seth Carstens - Sethflix bros
 * @license        Private. Do not distribute. Copyright 2018 All Rights Reserved.
 * @link           https://sethflix.com/ombi
 * @version        0.1.0
 *
 * Built with WP PHX WordPress Development Toolkit v3.1.0 on Friday 11th of May 2018 10:00:28 PM
 * @link           https://github.com/WordPress-Phoenix/wordpress-development-toolkit
 *
 * Plugin Name: Ombi Companion
 * Plugin URI: https://sethflix.com/ombi
 * Description: Ombi Companion WP plugin.
 * Version: 0.1.0
 * Author: Seth Carstens  - Sethflix bros
 * Text Domain: ombi-companion
 * License: Private. Do not distribute. Copyright 2018 All Rights Reserved.
 */

defined( 'ABSPATH' ) or die(); // wordpress must exist

$current_dir = trailingslashit( dirname( __FILE__ ) );

/**
 * 3RD PARTY DEPENDENCIES
 * (manually include_once dependencies installed via composer for safety)
 */
if ( ! class_exists( 'WPAZ_Plugin_Base\\V_2_6\\Abstract_Plugin' ) ) {
	include_once $current_dir . 'lib/wordpress-phoenix/abstract-plugin-base/src/abstract-plugin.php';
}

/**
 * INTERNAL DEPENDENCIES (autoloader defined in main plugin class)
 */
include_once $current_dir . 'app/class-plugin.php';

Sethflix\Ombi\Plugin::run( __FILE__ );
