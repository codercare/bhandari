<?php

namespace Dustro_Banner2;

use Elementor\Plugin;

if ( ! defined( 'ABSPATH' ) ) exit;

add_action( 'elementor/widgets/register', function() {
	require_once('widget.php');

	$banner2_widget =	new Dustro_Banner2();

	Plugin::instance()->widgets_manager->register( $banner2_widget );
});