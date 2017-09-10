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

namespace Plugin_Name\Providers;

use Plugin_Name\Service_Provider;

class Shortcodes_Service_Provider extends Service_Provider {
	/**
	 * Registers shortcodes services at `init` hook.
	 *
	 * @return void
	 */
	public function boot() {
		add_action( 'init', [ $this, 'register' ] );
	}

	/**
	 * Gets a name of the provider.
	 *
	 * @return string
	 */
	public function get_name() {
		return 'shortcodes';
	}
}
