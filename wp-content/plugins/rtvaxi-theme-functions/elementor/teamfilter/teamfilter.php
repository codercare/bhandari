<?php

namespace Vaxi_Teamfilter;

use Elementor\Plugin;

if ( ! defined( 'ABSPATH' ) ) exit; 

add_action( 'elementor/widgets/register', function() {
	require_once('widget.php');

	$teamfilter_widget =	new Vaxi_Teamfilter();

	Plugin::instance()->widgets_manager->register( $teamfilter_widget );
});