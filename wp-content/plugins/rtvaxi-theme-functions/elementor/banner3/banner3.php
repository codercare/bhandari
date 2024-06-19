<?php

namespace Dustro_Banner3;

use Elementor\Plugin;

if ( ! defined( 'ABSPATH' ) ) exit;

add_action( 'elementor/widgets/register', function() {
	require_once('widget.php');

	$banner3_widget =	new Dustro_Banner3();

	Plugin::instance()->widgets_manager->register( $banner3_widget );
});