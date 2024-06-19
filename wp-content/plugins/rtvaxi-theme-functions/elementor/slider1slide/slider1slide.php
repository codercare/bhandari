<?php

namespace Dustro_Slider1slide;

use Elementor\Plugin;

if ( ! defined( 'ABSPATH' ) ) exit;

add_action( 'elementor/widgets/register', function() {
	require_once('widget.php');

	$slider1slide_widget =	new Dustro_Slider1slide();

	Plugin::instance()->widgets_manager->register( $slider1slide_widget );
});