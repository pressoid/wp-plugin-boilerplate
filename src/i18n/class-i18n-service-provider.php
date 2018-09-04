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

use Plugin_Name\Foundation\Service_Provider;

/**
 * Class I18n Service Provider.
 *
 * Registers defined page services.
  *
 * @package Plugin_Name\I18n
 */
class I18n_Service_Provider extends Service_Provider {
	/**
	 * Name of the provider.
	 *
	 * @var string
	 */
	const NAME = 'i18n';

	/**
	 * Registers plugin textomain and load language files.
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
			I18n::class,
		];
	}
}
