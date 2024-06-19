<?php

namespace Dustro_Adressbox;

use Elementor\Plugin;

if ( ! defined( 'ABSPATH' ) ) exit; 

add_action( 'elementor/widgets/register', function() {
	require_once('widget.php');

	$adressbox_widget =	new Dustro_Adressbox();

	Plugin::instance()->widgets_manager->register( $adressbox_widget );
});