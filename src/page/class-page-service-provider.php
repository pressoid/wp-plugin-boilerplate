<?php
/**
 * WP Plugin Boilerplate.
 *
 * @author    Your Name <email@example.com>
 * @license   GPL-3.0+
 * @link      http://example.com
 * @copyright 2017 Your Name or Company Name
 */

namespace Plugin_Name\Page;

use Plugin_Name\Foundation\Service_Provider;

/**
 * Class Page Service Provider.
 *
 * Registers defined page services.
 *
 * @since   1.0.0
 *
 * @package Plugin_Name\Page
 * @author  Your Name <email@example.com>
 */
class Page_Service_Provider extends Service_Provider {
	/**
	 * Name of the provider.
	 *
	 * @var string
	 */
	const NAME = 'page';

	/**
	 * Registers page services at `admin_menu` hook.
	 *
	 * @return void
	 */
	public function boot() {
		add_action( 'admin_menu', [ $this, 'register' ] );
	}

	/**
	 * Defines services collection of the provider.
	 *
	 * @return array
	 */
	public function services() {
		return [
			Example_Page::class,
			Example_Sub_Page::class,
		];
	}
}
