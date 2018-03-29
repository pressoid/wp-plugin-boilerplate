<?php
/**
 * WP Plugin Boilerplate.
 *
 * @author    Your Name <email@example.com>
 * @license   GPL-3.0+
 * @link      http://example.com
 * @copyright 2017 Your Name or Company Name
 */

namespace Plugin_Name\Foundation\Shortcode;

use Plugin_Name\Foundation\Service_Provider;

/**
 * Class Shortcode Service Provider.
 *
 * Registers defined shortcode services.
 *
 * @since   1.0.0
 *
 * @package Plugin_Name\Shortcode
 * @author  Your Name <email@example.com>
 */
class Shortcode_Service_Provider extends Service_Provider {
	/**
	 * Tag name of the provider.
	 *
	 * @var string
	 */
	const NAME = 'shortcode';

	/**
	 * Registers shortcode services at `init` hook.
	 *
	 * @return void
	 */
	public function boot() {
		add_action( 'init', [ $this, 'register' ] );
	}
}
