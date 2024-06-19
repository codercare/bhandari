<?php

namespace Dustro_Icons2b;

use Elementor\Plugin;

if ( ! defined( 'ABSPATH' ) ) exit; 

add_action( 'elementor/widgets/register', function() {
	require_once('widget.php');

	$icons2b_widget =	new Dustro_Icons2b();

	Plugin::instance()->widgets_manager->register( $icons2b_widget );
});