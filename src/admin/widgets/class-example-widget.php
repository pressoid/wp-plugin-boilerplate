<?php

namespace Plugin_Name\Admin\Widgets;

use Plugin_Name\Admin\Widget;

class Example_Widget extends Widget {
	function __construct() {
		parent::__construct(
			'plugin-name-widget',
			__( 'Plugin Widget', 'plugin-name' ),
			[
				'description' => __( 'Short description of the widget.', 'plugin-name' ),
			]
		);
	}

	function widget( $arguments, $instance ) {
	}

	function form( $instance ) {
	}

	function update( $new_instance, $old_instance ) {
	}
}
