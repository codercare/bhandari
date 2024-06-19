<?php

namespace Dustro_Servicebox2;

use Elementor\Plugin;

if ( ! defined( 'ABSPATH' ) ) exit; 

add_action( 'elementor/widgets/register', function() {
	require_once('widget.php');

	$servicebox2_widget =	new Dustro_Servicebox2();

	Plugin::instance()->widgets_manager->register( $servicebox2_widget );
});