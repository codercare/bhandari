<?php

namespace Dustro_Icons3;

use Elementor\Plugin;

if ( ! defined( 'ABSPATH' ) ) exit; 

add_action( 'elementor/widgets/register', function() {
	require_once('widget.php');

	$icons3_widget =	new Dustro_Icons3();

	Plugin::instance()->widgets_manager->register( $icons3_widget );
});