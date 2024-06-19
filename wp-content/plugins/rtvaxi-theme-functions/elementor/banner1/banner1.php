<?php

namespace Dustro_Banner1;

use Elementor\Plugin;

if ( ! defined( 'ABSPATH' ) ) exit;

add_action( 'elementor/widgets/register', function() {
	require_once('widget.php');

	$banner1_widget =	new Dustro_Banner1();

	Plugin::instance()->widgets_manager->register( $banner1_widget );
});