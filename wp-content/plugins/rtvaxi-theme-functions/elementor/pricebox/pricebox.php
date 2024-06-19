<?php

namespace Dustro_Pricebox;

use Elementor\Plugin;

if ( ! defined( 'ABSPATH' ) ) exit; 

add_action( 'elementor/widgets/register', function() {
	require_once('widget.php');

	$pricebox_widget =	new Dustro_Pricebox();

	Plugin::instance()->widgets_manager->register( $pricebox_widget );
});