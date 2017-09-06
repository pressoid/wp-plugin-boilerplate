<?php

namespace Plugin_Name\Foundation\Widgets;

use WP_Widget;
use Plugin_Name\Contracts\Service;

abstract class Widget extends WP_Widget implements Service {

	public function register() {
		register_widget( $this );
	}
}
