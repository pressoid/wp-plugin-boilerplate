<?php
/**
 * WP Plugin Boilerplate.
 *
 * @author    Your Name <email@example.com>
 * @license   GPL-3.0+
 * @link      http://example.com
 * @copyright 2017 Your Name or Company Name
 */

namespace Plugin_Name\Widget;

use Plugin_Name\Foundation\Service_Provider;
use Plugin_Name\Admin\Widgets\Example_Widget;

/**
 * Class Widget Service Provider.
 *
 * Registers defined widget services.
 *
 * @since   1.0.0
 *
 * @package Plugin_Name\Widget
 * @author  Your Name <email@example.com>
 */
class Widget_Service_Provider extends Service_Provider {
	/**
	 * Name of the provider.
	 *
	 * @var string
	 */
	const NAME = 'widget_provider';

	/**
	 * Registers widget services at `widgets_init` hook.
	 *
	 * @return void
	 */
	public function boot() {
		add_action( 'widgets_init', [ $this, 'register' ] );
	}

	/**
	 * Defines services collection of the provider.
	 *
	 * @return array
	 */
	public function services() {
		return [
			Example_Widget::class,
		];
	}
}
