<?php

namespace Plugin_Name\Admin;

use WP_Widget;
use Plugin_Name\Contracts\Service;

abstract class Widget extends WP_Widget implements Service {
	public function register() {
		register_widget( $this );
	}
}