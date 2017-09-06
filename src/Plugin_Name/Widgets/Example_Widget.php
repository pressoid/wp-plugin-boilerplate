<?php

namespace Plugin_Name\Widgets;

class Example_Widget extends Widget
{
    function __construct() {
        parent::__construct(
            'plugin-name-widget',
            __( 'Plugin Widget', 'plugin-name' ),
            [ 'description' => __( 'Short description of the widget.', 'plugin-name' ) ]
        );
    }

    function widget( $arguments, $instance ) {
        //
    }

    function form( $instance ) {
        //
    }

    function update( $new_instance, $old_instance ) {
        //
    }
}
