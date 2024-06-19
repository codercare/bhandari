<?php

namespace Dustro_Icons2;

use Elementor\Plugin;

if ( ! defined( 'ABSPATH' ) ) exit; 

add_action( 'elementor/widgets/register', function() {
	require_once('widget.php');

	$icons2_widget =	new Dustro_Icons2();

	Plugin::instance()->widgets_manager->register( $icons2_widget );
});