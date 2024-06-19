<?php

namespace Dustro_Icons2at;

use Elementor\Plugin;

if ( ! defined( 'ABSPATH' ) ) exit; 

add_action( 'elementor/widgets/register', function() {
	require_once('widget.php');

	$icons2at_widget =	new Dustro_Icons2at();

	Plugin::instance()->widgets_manager->register( $icons2at_widget );
});