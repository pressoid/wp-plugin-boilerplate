<?php
/**
 * WP Plugin Boilerplate.
 *
 * @package   Plugin_Name
 * @author    Your Name <email@example.com>
 * @license   GPL-3.0+
 * @link      http://example.com
 * @copyright 2017 Your Name or Company Name
 *
 * @wordpress-plugin
 * Plugin Name: WP Plugin Boilerplate
 * Plugin URI:  http://example.com
 * Description: Plugin Boilerplate for WordPress.
 * Version:     1.0.0
 * Author:      Your Name <email@example.com>
 * Author URI:  http://example.com
 * Text Domain: plugin_name
 * License:     GPL-3.0+
 * License URI: http://www.gnu.org/licenses/gpl-3.0.txt
 */

if ( ! defined( 'WPINC' ) ) {
	die();
}

/**
 * This section setups plugin specific global constans.
 * They fallback to defaults only if they are
 * not already defined by developer.
 */
if ( ! defined( 'PLUGIN_NAME_CONSTANS' )) {
	define( 'PLUGIN_NAME_CONSTANS', true );
}

/**
 * Bootstrap a plugin.
 * Autoload plugin's files and functions.
 */
require_once 'bootstrap/autoload.php';
require_once 'functions.php';

/**
 * Checks environment compatibilities.
 */
$ok = require_once 'bootstrap/compatibility.php';

/**
 * Initialize plugin.
 *
 * @todo Change function name to your unique plugin name.
 */
if ( $ok ) {
	plugin_name();
}
