<?php

namespace rtvaxi_Testimonials1;

use Elementor\Plugin;

if ( ! defined( 'ABSPATH' ) ) exit; 

add_action( 'elementor/widgets/register', function() {
	require_once('widget.php');

	$bp_widget =	new rtvaxi_Testimonials1();

	Plugin::instance()->widgets_manager->register( $bp_widget );
});