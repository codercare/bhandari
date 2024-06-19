<?php

namespace Vaxi_Blognews;

use Elementor\Plugin;

if ( ! defined( 'ABSPATH' ) ) exit; 

add_action( 'elementor/widgets/register', function() {
	require_once('widget.php');

	$blognews_widget =	new Vaxi_Blognews();

	Plugin::instance()->widgets_manager->register( $blognews_widget );
});