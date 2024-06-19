<?php

namespace Dustro_Icons4;

use Elementor\Plugin;

if ( ! defined( 'ABSPATH' ) ) exit; 

add_action( 'elementor/widgets/register', function() {
	require_once('widget.php');

	$icons4_widget =	new Dustro_Icons4();

	Plugin::instance()->widgets_manager->register( $icons4_widget );
});