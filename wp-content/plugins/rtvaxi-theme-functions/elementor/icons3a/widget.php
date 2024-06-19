<?php
namespace Dustro_Icons3a;

use Elementor\Widget_Base;

if ( ! defined( 'ABSPATH' ) ) exit; 

class Dustro_Icons3a extends Widget_Base {

	public static $slug = 'dustro-icons3a';

	public function get_name() { return self::$slug; }

	public function get_title() { return __('Icon box style 3 big (boxed icons in row)', self::$slug); }

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
 
     $this->add_control(
			'dustro_text1',
			[
				'label' => __( 'Text1', 'vaxi' ),
				'type' => \Elementor\Controls_Manager::TEXT,
        'input_type' => 'text',
				'default' => '',
			]
		);
    
    $this->add_control(
			'dustro_text2',
			[
				'label' => __( 'Text2', 'vaxi' ),
				'type' => \Elementor\Controls_Manager::TEXT,
        'input_type' => 'text',
				'default' => '',
			]
		);
		
    $this->add_control(
			'dustro_text3',
			[
				'label' => __( 'Text3', 'vaxi' ),
				'type' => \Elementor\Controls_Manager::TEXT,
        'input_type' => 'text',
				'default' => '',
			]
		);
		
    $this->add_control(
			'dustro_buttontext',
			[
				'label' => __( 'Button text', 'vaxi' ),
				'type' => \Elementor\Controls_Manager::TEXT,
        'input_type' => 'text',
				'default' => '',
			]
		);
	  
   $this->add_control(
			'dustro_removebutton',
			[
				'label' => __( 'Remove button', 'vaxi' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'options' => [
					'' => __( 'Default', 'vaxi' ),
					'removebutton' => __( 'Remove button', 'vaxi' ),
				],
			]
		);	
	
		
		$this->end_controls_section();
	}

	protected function render() {
    
   $settings = $this->get_settings_for_display();  

    if ( $settings['dustro_text1'] ) {
			$this->add_render_attribute( 'shortcode', 'text1', $settings['dustro_text1'] );
		}
    
    if ( $settings['dustro_text2'] ) {
			$this->add_render_attribute( 'shortcode', 'text2', $settings['dustro_text2'] );
		}

		if ( $settings['dustro_text3'] ) {
			$this->add_render_attribute( 'shortcode', 'text3', $settings['dustro_text3'] );
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
   if ( $settings['dustro_removebutton'] ) {
			$this->add_render_attribute( 'shortcode', 'removebutton', $settings['dustro_removebutton'] );
	 } 

    echo do_shortcode( '[rtvaxi_icons3a ' . $this->get_render_attribute_string( 'shortcode' ) . ']' );
	}
 
}