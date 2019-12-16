<?php
/*
 * Plugin Name: Embed museum-digital
 * Plugin URI:  https://wordpress.org/plugins/museum-digital-oembed/
 * Description: Embed content from museum-digital into your WordPress site.
 * Version:     1.0
 * Author:      Joshua Ramon Enslin
 * Author URI:  https://en.about.museum-digital.org/about/people/Joshua_Ramon_Enslin/
 * License:     GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: museum-digital-oembed
*/



/**
 * Prevent direct access to the file.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}



/**
 * Include plugin files
 */
require_once plugin_dir_path(__FILE__) . 'includes/oembed.php';
