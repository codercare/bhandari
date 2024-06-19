<?php

namespace Dustro_Textbox1;

use Elementor\Plugin;

if ( ! defined( 'ABSPATH' ) ) exit; 

add_action( 'elementor/widgets/register', function() {
	require_once('widget.php');

	$textbox1_widget =	new Dustro_Textbox1();

	Plugin::instance()->widgets_manager->register( $textbox1_widget );
});