<?php

namespace Dustro_Icons4a;

use Elementor\Plugin;

if ( ! defined( 'ABSPATH' ) ) exit; 

add_action( 'elementor/widgets/register', function() {
	require_once('widget.php');

	$icons4a_widget =	new Dustro_Icons4a();

	Plugin::instance()->widgets_manager->register( $icons4a_widget );
});