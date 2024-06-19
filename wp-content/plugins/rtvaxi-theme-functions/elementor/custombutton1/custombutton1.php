<?php

namespace Dustro_Custombutton1;

use Elementor\Plugin;

if ( ! defined( 'ABSPATH' ) ) exit; 

add_action( 'elementor/widgets/register', function() {
	require_once('widget.php');

	$custombutton1_widget =	new Dustro_Custombutton1();

	Plugin::instance()->widgets_manager->register( $custombutton1_widget );
});