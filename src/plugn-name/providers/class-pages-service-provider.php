<?php

namespace Plugin_Name\Providers;

use Plugin_Name\Contracts\Service_Provider;

class Pages_Service_Provider extends Service_Provider {
	/**
	 * Name of the provider. Used as part of key
	 * of filter name for services collection.
	 *
	 * @var string
	 */
	const PROVIDER_NAME = 'pages';
}
