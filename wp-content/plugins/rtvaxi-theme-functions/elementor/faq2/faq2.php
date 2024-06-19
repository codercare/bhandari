<?php

namespace Dustro_faq2;

use Elementor\Plugin;

if ( ! defined( 'ABSPATH' ) ) exit; 

add_action( 'elementor/widgets/register', function() {
	require_once('widget.php');

	$faq2_widget =	new Dustro_faq2();

	Plugin::instance()->widgets_manager->register( $faq2_widget );
});