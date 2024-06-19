<?php

namespace Dustro_Teambox;

use Elementor\Plugin;

if ( ! defined( 'ABSPATH' ) ) exit; 

add_action( 'elementor/widgets/register', function() {
	require_once('widget.php');

	$teambox_widget =	new Dustro_Teambox();

	Plugin::instance()->widgets_manager->register( $teambox_widget );
});