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

/**
 * Class Assets Service Provider.
 *
 * Registers defined asset services.
 *
 * @since   1.0.0
 *
 * @package Plugin_Name
 * @author  Your Name <email@example.com>
 */
class Assets_Service_Provider extends Service_Provider {
	/**
	 * Registers asset services at `wp_enqueue_scripts` hook.
	 *
	 * @return void
	 */
	public function boot() {
		add_action( 'wp_enqueue_scripts', [ $this, 'register' ] );
	}

	/**
	 * Gets a name of the provider.
	 *
	 * @return string
	 */
	public function get_name() {
		return 'assets';
	}
}
