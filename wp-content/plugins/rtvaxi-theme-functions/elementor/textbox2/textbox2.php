<?php

namespace Dustro_Textbox2;

use Elementor\Plugin;

if ( ! defined( 'ABSPATH' ) ) exit; 

add_action( 'elementor/widgets/register', function() {
	require_once('widget.php');

	$textbox2_widget =	new Dustro_Textbox2();

	Plugin::instance()->widgets_manager->register( $textbox2_widget );
});