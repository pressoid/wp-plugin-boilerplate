<?php
/**
 * WP Plugin Boilerplate.
 *
 * @author    Your Name <email@example.com>
 * @license   GPL-3.0+
 * @link      http://example.com
 * @copyright 2017 Your Name or Company Name
 */

namespace Plugin_Name\Foundation\Asset;

use Plugin_Name\Foundation\Service_Provider;

/**
 * Class Asset Service Provider.
 *
 * Registers defined asset services.
 *
 * @since   1.0.0
 *
 * @package Plugin_Name\Asset
 * @author  Your Name <email@example.com>
 */
class Asset_Service_Provider extends Service_Provider {
	/**
	 * Tag name of the provider.
	 *
	 * @var string
	 */
	const NAME = 'asset';

	/**
	 * Registers asset services at `wp_enqueue_scripts` hook.
	 *
	 * @return void
	 */
	public function boot() {
		add_action( 'wp_enqueue_scripts', [ $this, 'register' ] );
	}
}
