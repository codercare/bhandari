<?php

namespace Dustro_Icons2bt;

use Elementor\Plugin;

if ( ! defined( 'ABSPATH' ) ) exit; 

add_action( 'elementor/widgets/register', function() {
	require_once('widget.php');

	$icons2bt_widget =	new Dustro_Icons2bt();

	Plugin::instance()->widgets_manager->register( $icons2bt_widget );
});