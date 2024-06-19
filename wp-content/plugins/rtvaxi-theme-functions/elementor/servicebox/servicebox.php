<?php

namespace Dustro_Servicebox;

use Elementor\Plugin;

if ( ! defined( 'ABSPATH' ) ) exit; 

add_action( 'elementor/widgets/register', function() {
	require_once('widget.php');

	$servicebox_widget =	new Dustro_Servicebox();

	Plugin::instance()->widgets_manager->register( $servicebox_widget );
});