<?php

namespace Dustro_Workingtime;

use Elementor\Plugin;

if ( ! defined( 'ABSPATH' ) ) exit; 

add_action( 'elementor/widgets/register', function() {
	require_once('widget.php');

	$workingtime_widget =	new Dustro_Workingtime();

	Plugin::instance()->widgets_manager->register( $workingtime_widget );
});