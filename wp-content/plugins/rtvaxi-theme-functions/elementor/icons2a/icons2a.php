<?php

namespace Dustro_Icons2a;

use Elementor\Plugin;

if ( ! defined( 'ABSPATH' ) ) exit; 

add_action( 'elementor/widgets/register', function() {
	require_once('widget.php');

	$icons2a_widget =	new Dustro_Icons2a();

	Plugin::instance()->widgets_manager->register( $icons2a_widget );
});