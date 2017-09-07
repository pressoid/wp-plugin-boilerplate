<?php

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
