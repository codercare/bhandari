<?php
namespace Dustro_Textbox2;

use Elementor\Widget_Base;

if ( ! defined( 'ABSPATH' ) ) exit; 

class Dustro_Textbox2 extends Widget_Base {

	public static $slug = 'dustro-textbox2';

	public function get_name() { return self::$slug; }

	public function get_title() { return __('Text box2', self::$slug); }

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
			'dustro_icon',
			[
				'label' => __( 'Icon', 'vaxi' ),
				'description' => __( 'Add Font awesome icon code ffom here: https://fontawesome.com/v5.15/icons', 'vaxi' ),
				'type' => \Elementor\Controls_Manager::TEXT,
        'input_type' => 'text',
				'default' => '',
			]
		);

		$this->add_control(
			'dustro_title',
			[
				'label' => __( 'Title', 'vaxi' ),
				'type' => \Elementor\Controls_Manager::TEXT,
        'input_type' => 'text',
				'default' => '',
			]
		);
 
     $this->add_control(
			'dustro_text',
			[
				'label' => __( 'Text', 'vaxi' ),
				'type' => \Elementor\Controls_Manager::TEXT,
        'input_type' => 'text',
				'default' => '',
			]
		);

		
	    $this->add_control(
			'dustro_buttontext',
			[
				'label' => __( 'Buttontext', 'vaxi' ),
				'type' => \Elementor\Controls_Manager::TEXT,
        'input_type' => 'text',
				'default' => '',
			]
		);	
		
		$this->add_control(
			'dustro_buttonurl',
			[
				'label' => __( 'Button URL', 'vaxi' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => __( 'https://your-link.com', 'vaxi' ),
				'show_external' => true,
				'default' => [
					'url' => '',
					'is_external' => true,
					'nofollow' => true,
				],
			]
		);

		$this->end_controls_section();
	}

	protected function render() {
    
   $settings = $this->get_settings_for_display();  
    
    if ( $settings['dustro_icon'] ) {
			$this->add_render_attribute( 'shortcode', 'icon', $settings['dustro_icon'] );
		} 	    
		if ( $settings['dustro_title'] ) {
			$this->add_render_attribute( 'shortcode', 'title', $settings['dustro_title'] );
		} 		

    if ( $settings['dustro_text'] ) {
			$this->add_render_attribute( 'shortcode', 'text', $settings['dustro_text'] );
		}
	   if ( $settings['dustro_buttontext'] ) {
			$this->add_render_attribute( 'shortcode', 'buttontext', $settings['dustro_buttontext'] );
	 }
   
   if ( $settings['dustro_buttonurl']['url'] ) {
			$this->add_render_attribute( 'shortcode', 'buttonurl', $settings['dustro_buttonurl']['url'] );
	 }
   
   if ( $settings['dustro_buttonurl']['nofollow'] ) {
			$this->add_render_attribute( 'shortcode', 'nofollow', $settings['dustro_buttonurl']['nofollow'] );
	 }
   
   if ( $settings['dustro_buttonurl']['is_external'] ) {
			$this->add_render_attribute( 'shortcode', 'external', $settings['dustro_buttonurl']['is_external'] );
	 }
	
		
    echo do_shortcode( '[rtvaxi_textbox2 ' . $this->get_render_attribute_string( 'shortcode' ) . ']' );
	}
 
}