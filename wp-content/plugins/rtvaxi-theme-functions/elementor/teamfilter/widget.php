<?php
namespace Vaxi_Teamfilter;

use Elementor\Widget_Base;

if ( ! defined( 'ABSPATH' ) ) exit; 

class Vaxi_Teamfilter extends Widget_Base {

	public static $slug = 'vaxi-teamfilter';

	public function get_name() { return self::$slug; }

	public function get_title() { return __('Team boxes with filter option', self::$slug); }

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


		$this->add_control(
			'vaxi_limit',
			[
				'label' => __( 'Limit ', 'vaxi' ),
				'description' => __( '-1 is unlimited number of items, add any number between -1 and 1000', 'vaxi' ),
				'type' => \Elementor\Controls_Manager::TEXT,
        'input_type' => 'text',
				'default' => '',
			]
		);
		
			$this->add_control(
			'vaxi_order',
			[
				'label' => __( 'Order', 'vaxi' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'options' => [
					'ASC' => __( 'From oldest post', 'vaxi' ),
					'DESC' => __( 'From newest post', 'vaxi' ),
		
				],
			]
		);	


		$this->end_controls_section();
	}

	protected function render() {
    
   $settings = $this->get_settings_for_display();  
	    
		if ( $settings['vaxi_limit'] ) {
			$this->add_render_attribute( 'shortcode', 'limit', $settings['vaxi_limit'] );
		} 	
		if ( $settings['vaxi_order'] ) {
			$this->add_render_attribute( 'shortcode', 'order', $settings['vaxi_order'] );
		} 			
		
    echo do_shortcode( '[rtvaxi_teamfilter ' . $this->get_render_attribute_string( 'shortcode' ) . ']' );
	}
 
}