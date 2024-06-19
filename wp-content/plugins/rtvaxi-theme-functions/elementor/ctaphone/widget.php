<?php
namespace Vaxi_Ctaphone;

use Elementor\Widget_Base;

if ( ! defined( 'ABSPATH' ) ) exit; 

class Vaxi_Ctaphone extends Widget_Base {

	public static $slug = 'vaxi-ctaphone';

	public function get_name() { return self::$slug; }

	public function get_title() { return __('CTA phone', self::$slug); }

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
			'vaxi_text1',
			[
				'label' => __( 'Title', 'vaxi' ),
				'type' => \Elementor\Controls_Manager::TEXT,
        'input_type' => 'text',
				'default' => '',
			]
		);
		
		$this->add_control(
			'vaxi_text1size',
			[
				'label' => __( 'Icon color', 'vaxi' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'options' => [
					'' => __( 'Default', 'vaxi' ),
					'small' => __( 'Small', 'vaxi' )
				],
			]
		);
 
     $this->add_control(
			'vaxi_text2',
			[
				'label' => __( 'Text for phone number', 'vaxi' ),
				'type' => \Elementor\Controls_Manager::TEXT,
        'input_type' => 'text',
				'default' => '',
			]
		);

  $this->add_control(
			'vaxi_phonenumber',
			[
				'label' => __( 'Phone number', 'vaxi' ),
				'type' => \Elementor\Controls_Manager::TEXT,
        'input_type' => 'text',
				'default' => '',
			]
		);

		$this->end_controls_section();
	}

	protected function render() {
    
   $settings = $this->get_settings_for_display();  
	    
		if ( $settings['vaxi_text1'] ) {
			$this->add_render_attribute( 'shortcode', 'text1', $settings['vaxi_text1'] );
		} 		

    if ( $settings['vaxi_text2'] ) {
			$this->add_render_attribute( 'shortcode', 'text2', $settings['vaxi_text2'] );
		}

    if ( $settings['vaxi_text1size'] ) {
			$this->add_render_attribute( 'shortcode', 'text1size', $settings['vaxi_text1size'] );
		}
    if ( $settings['vaxi_phonenumber'] ) {
			$this->add_render_attribute( 'shortcode', 'phonenumber', $settings['vaxi_phonenumber'] );
		}		
		
    echo do_shortcode( '[rtvaxi_ctaphone ' . $this->get_render_attribute_string( 'shortcode' ) . ']' );
	}
 
}