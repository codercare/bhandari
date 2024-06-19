<?php
namespace Dustro_Revealicons;

use Elementor\Widget_Base;

if ( ! defined( 'ABSPATH' ) ) exit; 

class Dustro_Revealicons extends Widget_Base {

	public static $slug = 'dustro-revealicons';

	public function get_name() { return self::$slug; }

	public function get_title() { return __('Icons reveal on hover', self::$slug); }

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
			'dustro_text1',
			[
				'label' => __( 'Text1', 'vaxi' ),
				'type' => \Elementor\Controls_Manager::TEXT,
        'input_type' => 'text',
				'default' => '',
			]
		);   
		$this->add_control(
			'dustro_iconurl1',
			[
				'label' => __( 'Icon1', 'vaxi' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
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
			'dustro_iconurl2',
			[
				'label' => __( 'Icon2', 'vaxi' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
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
			'dustro_iconurl3',
			[
				'label' => __( 'Icon3', 'vaxi' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
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

     if ( $settings['dustro_iconurl1']['url'] ) {
			$this->add_render_attribute( 'shortcode', 'iconurl1', $settings['dustro_iconurl1']['url'] );
		}	
    if ( $settings['dustro_text2'] ) {
			$this->add_render_attribute( 'shortcode', 'text2', $settings['dustro_text2'] );
		}  

     if ( $settings['dustro_iconurl2']['url'] ) {
			$this->add_render_attribute( 'shortcode', 'iconurl2', $settings['dustro_iconurl2']['url'] );
		}	
   if ( $settings['dustro_text3'] ) {
			$this->add_render_attribute( 'shortcode', 'text3', $settings['dustro_text3'] );
		}  

    if ( $settings['dustro_iconurl3']['url'] ) {
			$this->add_render_attribute( 'shortcode', 'iconurl3', $settings['dustro_iconurl3']['url'] );
		}	   
    echo do_shortcode( '[rtvaxi_revealicons ' . $this->get_render_attribute_string( 'shortcode' ) . ']' );
	}
 
}