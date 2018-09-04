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

namespace Plugin_Name\I18n;

use Plugin_Name\Foundation\Service;

/**
 * Class I18n.
 *
 * Loads plugin's language files.
  *
 * @package Plugin_Name\Foundation
 */
class I18n extends Service {
	/**
	 * Registers plugin textomain and load language files.
	 *
	 * @return void
	 */
	public function register() {
		$path = PLUGIN_NAME_DIR . '/resources/languages';

		load_plugin_textdomain( 'plugin_name', false, $path );
	}
}
