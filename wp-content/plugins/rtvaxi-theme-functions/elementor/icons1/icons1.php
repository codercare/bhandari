<?php

namespace Dustro_Icons1;

use Elementor\Plugin;

if ( ! defined( 'ABSPATH' ) ) exit; 

add_action( 'elementor/widgets/register', function() {
	require_once('widget.php');

	$icons1_widget =	new Dustro_Icons1();

	Plugin::instance()->widgets_manager->register( $icons1_widget );
});