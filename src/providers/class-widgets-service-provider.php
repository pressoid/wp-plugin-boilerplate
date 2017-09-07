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

use Plugin_Name\Contracts\Service_Provider;

class Widgets_Service_Provider extends Service_Provider {
	/**
	 * Name of the provider. Used as part of key
	 * of filter name for services collection.
	 *
	 * @var string
	 */
	const NAME = 'widgets';

	/**
	 * Registers widgets services at `widgets_init` hook.
	 *
	 * @return void
	 */
	public function boot() {
		add_action( 'widgets_init', [ $this, 'register' ] );
	}
}
