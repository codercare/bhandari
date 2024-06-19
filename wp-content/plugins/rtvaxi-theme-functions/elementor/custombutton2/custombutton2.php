<?php

namespace Dustro_Custombutton2;

use Elementor\Plugin;

if ( ! defined( 'ABSPATH' ) ) exit; 

add_action( 'elementor/widgets/register', function() {
	require_once('widget.php');

	$custombutton2_widget =	new Dustro_Custombutton2();

	Plugin::instance()->widgets_manager->register( $custombutton2_widget );
});