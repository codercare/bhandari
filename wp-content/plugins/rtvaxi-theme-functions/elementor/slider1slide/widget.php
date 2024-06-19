<?php
namespace Dustro_Slider1slide;

use Elementor\Widget_Base;

if ( ! defined( 'ABSPATH' ) ) exit; 

class Dustro_Slider1slide extends Widget_Base {

	public static $slug = 'dustro-slider1slide';

	public function get_name() { return self::$slug; }

	public function get_title() { return __('Slider1 slide', self::$slug); }

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
			'dustro_title',
			[
				'label' => __( 'Title', 'vaxi' ),
				'type' => \Elementor\Controls_Manager::TEXT,
        'input_type' => 'text',
				'default' => '',
			]
		);
     
      $this->add_control(
			'dustro_subtitle',
			[
				'label' => __( 'Subtitle', 'vaxi' ),
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
			'dustro_replacetitle',
			[
				'label' => __( 'Change title weight', 'vaxi' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'options' => [
					'' => __( 'Default', 'vaxi' ),
					'replacetitle' => __( 'Second', 'vaxi' ),
				],
				'default' => 'default',
			]
		);
       $this->add_control(
			'dustro_phonenumber',
			[
				'label' => __( 'Phone number', 'vaxi' ),
				'type' => \Elementor\Controls_Manager::TEXT,
        'input_type' => 'text',
				'default' => '',
			]
		);   
   $this->add_control(
			'dustro_textcenter',
			[
				'label' => __( 'Text center or left', 'vaxi' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'options' => [
					'' => __( 'Default', 'vaxi' ),
					'text-center' => __( 'Center', 'vaxi' ),
				],
				'default' => 'default',
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
			'dustro_image',
			[
				'label' => __( 'Choose Image', 'vaxi' ),
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
 
    if ( $settings['dustro_title'] ) {
			$this->add_render_attribute( 'shortcode', 'title', $settings['dustro_title'] );
		}  
    if ( $settings['dustro_subtitle'] ) {
			$this->add_render_attribute( 'shortcode', 'subtitle', $settings['dustro_subtitle'] );
		}  
    
    if ( $settings['dustro_replacetitle'] ) {
			$this->add_render_attribute( 'shortcode', 'replacetitle', $settings['dustro_replacetitle'] );
		}  
    if ( $settings['dustro_textcenter'] ) {
			$this->add_render_attribute( 'shortcode', 'textcenter', $settings['dustro_textcenter'] );
		}      
    
    if ( $settings['dustro_buttontext'] ) {
			$this->add_render_attribute( 'shortcode', 'buttontext', $settings['dustro_buttontext'] );
		} 
		if ( $settings['dustro_phonenumber'] ) {
			$this->add_render_attribute( 'shortcode', 'phonenumber', $settings['dustro_phonenumber'] );
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
   
   if ( $settings['dustro_image']['url'] ) {
			$this->add_render_attribute( 'shortcode', 'image', $settings['dustro_image']['url'] );
		}
   
    echo do_shortcode( '[rtvaxi_slider1slide ' . $this->get_render_attribute_string( 'shortcode' ) . ']' );
	}
 
}