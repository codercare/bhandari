<?php

namespace Dustro_Icons3a;

use Elementor\Plugin;

if ( ! defined( 'ABSPATH' ) ) exit; 

add_action( 'elementor/widgets/register', function() {
	require_once('widget.php');

	$icons3a_widget =	new Dustro_Icons3a();

	Plugin::instance()->widgets_manager->register( $icons3a_widget );
});