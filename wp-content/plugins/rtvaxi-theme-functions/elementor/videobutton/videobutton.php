<?php

namespace Dustro_Videobutton;

use Elementor\Plugin;

if ( ! defined( 'ABSPATH' ) ) exit; 

add_action( 'elementor/widgets/register', function() {
	require_once('widget.php');

	$videobutton_widget =	new Dustro_Videobutton();

	Plugin::instance()->widgets_manager->register( $videobutton_widget );
});