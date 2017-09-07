<?php

/**
 * Plugin Name: WordPress Plugin Boilerplate
 * Plugin URI:  https://plugin.com
 * Description: Plugin short description.
 * Version:     1.0.0
 * Author:      Jędrzej Chałubek
 * Author URI:  http://jedrzejchalubek.com
 * Text Domain: plugin
 * License:     GPL-3.0+
 * License URI: http://www.gnu.org/licenses/gpl-3.0.txt
 */

if (! defined('WPINC')) {
	die();
}

require_once 'bootstrap/autoload.php';
require_once 'bootstrap/compatibility.php';

plugin_name();
