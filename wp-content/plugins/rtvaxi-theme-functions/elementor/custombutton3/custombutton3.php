<?php

namespace Dustro_Custombutton3;

use Elementor\Plugin;

if ( ! defined( 'ABSPATH' ) ) exit; 

add_action( 'elementor/widgets/register', function() {
	require_once('widget.php');

	$custombutton3_widget =	new Dustro_Custombutton3();

	Plugin::instance()->widgets_manager->register( $custombutton3_widget );
});