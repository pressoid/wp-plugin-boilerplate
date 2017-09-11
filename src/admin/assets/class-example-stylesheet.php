<?php
/**
 * WP Plugin Boilerplate.
 *
 * @package   Plugin_Name
 * @author    Your Name <email@example.com>
 * @license   GPL-3.0+
 * @link      http://example.com
 * @copyright 2017 Your Name or Company Name
 */

namespace Plugin_Name\Admin\Assets;

use Plugin_Name\Plugin;
use Plugin_Name\Admin\Stylesheet;

/**
 * Class Example StyleSheet.
 *
 * Adds style file of the plugin.
 *
 * @since   1.0.0
 *
 * @package Plugin_Name
 * @author  Your Name <email@example.com>
 */
class Example_Stylesheet extends Stylesheet {
	/**
	 * Gets the filepath of the stylesheet.
	 *
	 * @return string
	 */
	public function get_filepath() {
		return plugin_name_url('resources/assets/plugin.css');
	}

	/**
	 * Gets the tag name for the stylesheet.
	 *
	 * @return string
	 */
	public function get_tag() {
		return Plugin::NAME;
	}
}
