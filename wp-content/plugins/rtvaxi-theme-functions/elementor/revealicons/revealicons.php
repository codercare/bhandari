<?php

namespace Dustro_Revealicons;

use Elementor\Plugin;

if ( ! defined( 'ABSPATH' ) ) exit;

add_action( 'elementor/widgets/register', function() {
	require_once('widget.php');

	$revealicons_widget =	new Dustro_Revealicons();

	Plugin::instance()->widgets_manager->register( $revealicons_widget );
});