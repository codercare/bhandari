<?php

namespace Vaxi_Ctaphone;

use Elementor\Plugin;

if ( ! defined( 'ABSPATH' ) ) exit; 

add_action( 'elementor/widgets/register', function() {
	require_once('widget.php');

	$ctaphone_widget =	new Vaxi_Ctaphone();

	Plugin::instance()->widgets_manager->register( $ctaphone_widget );
});