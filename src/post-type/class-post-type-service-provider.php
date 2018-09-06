<?php
/**
 * WP Plugin Boilerplate.
 *
 * @author    Your Name <email@example.com>
 * @license   GPL-3.0+
 * @link      http://example.com
 * @copyright 2017 Your Name or Company Name
 */

namespace Plugin_Name\Post_Type;

use Plugin_Name\Foundation\Service_Provider;

/**
 * Class Post Type Service Provider.
 *
 * Registers defined post type services.
 *
 * @since   1.0.0
 *
 * @package Plugin_Name\Post_Type
 * @author  Your Name <email@example.com>
 */
class Post_Type_Service_Provider extends Service_Provider {
	/**
	 * Name of the provider.
	 *
	 * @var string
	 */
	const NAME = 'post_type';

	/**
	 * Registers post type services at `init` hook.
	 *
	 * @return void
	 */
	public function boot() {
		add_action( 'init', [ $this, 'register' ] );
	}

	/**
	 * Defines services collection of the provider.
	 *
	 * @return array
	 */
	public function services() {
		return [
			Example_Post_Type::class
		];
	}
}
