<?php
namespace Vaxi_Blognews;

use Elementor\Widget_Base;

if ( ! defined( 'ABSPATH' ) ) exit; 

class Vaxi_Blognews extends Widget_Base {

	public static $slug = 'vaxi-blognews';

	public function get_name() { return self::$slug; }

	public function get_title() { return __('Blog news', self::$slug); }

	public function get_icon() { return 'fas fa-user-md'; }

	public function get_categories() { return [ 'general' ]; }

	protected function register_controls() {

		$this->start_controls_section(
			'content_section',
			[
				'label' => __( 'Options', self::$slug ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);




		$this->end_controls_section();
	}

	protected function render() {
    
   $settings = $this->get_settings_for_display();  
	    

		
    echo do_shortcode( '[rtvaxi_blognews ' . $this->get_render_attribute_string( 'shortcode' ) . ']' );
	}
 
}