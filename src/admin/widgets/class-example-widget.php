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
