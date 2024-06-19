<?php
namespace Dustro_Servicebox2;

use Elementor\Widget_Base;

if ( ! defined( 'ABSPATH' ) ) exit; 

class Dustro_Servicebox2 extends Widget_Base {

	public static $slug = 'dustro-servicebox2';

	public function get_name() { return self::$slug; }

	public function get_title() { return __('Service box style 2', self::$slug); }

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
			'dustro_image',
			[
				'label' => __( 'Choose Image', 'vaxi' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
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
			'dustro_icon',
			[
				'label' => __( 'Font Awesome icon shortcode', 'vaxi' ),
				'description' => __( 'Add icon shortcode from here https://fontawesome.com/v5.15/icons', 'vaxi' ),
				'type' => \Elementor\Controls_Manager::TEXT,
        'input_type' => 'text',
				'default' => 'fa fa-user-md',
			]
		);
		
    $this->add_control(
			'dustro_text3a',
			[
				'label' => __( 'List item 1', 'vaxi' ),
				'type' => \Elementor\Controls_Manager::TEXT,
        'input_type' => 'text',
				'default' => '',
			]
		);
		
		    $this->add_control(
			'dustro_text3b',
			[
				'label' => __( 'List item 2', 'vaxi' ),
				'type' => \Elementor\Controls_Manager::TEXT,
        'input_type' => 'text',
				'default' => '',
			]
		);

   $this->add_control(
			'dustro_text3c',
			[
				'label' => __( 'List item 3', 'vaxi' ),
				'type' => \Elementor\Controls_Manager::TEXT,
        'input_type' => 'text',
				'default' => '',
			]
		);  


   $this->add_control(
			'dustro_text3d',
			[
				'label' => __( 'List item 4', 'vaxi' ),
				'type' => \Elementor\Controls_Manager::TEXT,
        'input_type' => 'text',
				'default' => '',
			]
		); 

	
   $this->add_control(
			'dustro_text3e',
			[
				'label' => __( 'List item 5', 'vaxi' ),
				'type' => \Elementor\Controls_Manager::TEXT,
        'input_type' => 'text',
				'default' => '',
			]
		); 

		
   $this->add_control(
			'dustro_text3f',
			[
				'label' => __( 'List item 6', 'vaxi' ),
				'type' => \Elementor\Controls_Manager::TEXT,
        'input_type' => 'text',
				'default' => '',
			]
		); 
		
		
   $this->add_control(
			'dustro_text3g',
			[
				'label' => __( 'List item 7', 'vaxi' ),
				'type' => \Elementor\Controls_Manager::TEXT,
        'input_type' => 'text',
				'default' => '',
			]
		); 
		
		
   $this->add_control(
			'dustro_text3h',
			[
				'label' => __( 'List item 8', 'vaxi' ),
				'type' => \Elementor\Controls_Manager::TEXT,
        'input_type' => 'text',
				'default' => '',
			]
		); 
		
		
   $this->add_control(
			'dustro_text3i',
			[
				'label' => __( 'List item 9', 'vaxi' ),
				'type' => \Elementor\Controls_Manager::TEXT,
        'input_type' => 'text',
				'default' => '',
			]
		); 
		
   $this->add_control(
			'dustro_text3j',
			[
				'label' => __( 'List item 10', 'vaxi' ),
				'type' => \Elementor\Controls_Manager::TEXT,
        'input_type' => 'text',
				'default' => '',			
			]
		);

   $this->add_control(
			'dustro_show',
			[
				'label' => __( 'Show number of list items 1-10', 'vaxi' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'options' => [
					'show1' => __( '1', 'vaxi' ),
					'show2' => __( '2', 'vaxi' ),
					'show3' => __( '3', 'vaxi' ),
					'show4' => __( '4', 'vaxi' ),
					'show5' => __( '5', 'vaxi' ),
					'show6' => __( '6', 'vaxi' ),
					'show7' => __( '7', 'vaxi' ),
					'show8' => __( '8', 'vaxi' ),
					'show9' => __( '9', 'vaxi' ),
					'show10' => __( '10', 'vaxi' ),					
				],
			]
		);

     $this->add_control(
			'dustro_title2',
			[
				'label' => __( 'Title 2', 'vaxi' ),
				'type' => \Elementor\Controls_Manager::TEXT,
        'input_type' => 'text',
				'default' => '',
			]
		);
		
		$this->add_control(
			'dustro_title3',
			[
				'label' => __( 'Phone number or title 3', 'vaxi' ),
				'type' => \Elementor\Controls_Manager::TEXT,
        'input_type' => 'text',
				'default' => '',
			]
		);
		
	  $this->add_control(
			'dustro_icon2',
			[
				'label' => __( 'Font Awesome icon shortcode', 'vaxi' ),
				'description' => __( 'Add icon shortcode from here https://fontawesome.com/v5.15/icons', 'vaxi' ),
				'type' => \Elementor\Controls_Manager::TEXT,
        'input_type' => 'text',
				'default' => 'fa fa-phone',
			]
		);
		
	  $this->add_control(
			'dustro_phonenumber',
			[
				'label' => __( 'Phone number for call', 'vaxi' ),
				'type' => \Elementor\Controls_Manager::TEXT,
        'input_type' => 'text',
			]
		);		
		$this->end_controls_section();
	}

	protected function render() {
    
   $settings = $this->get_settings_for_display();  
    
    if ( $settings['dustro_image']['url'] ) {
			$this->add_render_attribute( 'shortcode', 'image', $settings['dustro_image']['url'] );
		}
 		
    if ( $settings['dustro_title'] ) {
			$this->add_render_attribute( 'shortcode', 'title', $settings['dustro_title'] );
		}
    
    if ( $settings['dustro_icon'] ) {
			$this->add_render_attribute( 'shortcode', 'icon', $settings['dustro_icon'] );
		}
    		
     if ( $settings['dustro_text3a'] ) {
			$this->add_render_attribute( 'shortcode', 'text3a', $settings['dustro_text3a'] );
		}
		
		if ( $settings['dustro_text3b'] ) {
			$this->add_render_attribute( 'shortcode', 'text3b', $settings['dustro_text3b'] );
		}
    if ( $settings['dustro_text3c'] ) {
			$this->add_render_attribute( 'shortcode', 'text3c', $settings['dustro_text3c'] );
		}       
		
    if ( $settings['dustro_text3d'] ) {
			$this->add_render_attribute( 'shortcode', 'text3d', $settings['dustro_text3d'] );
		}       
    if ( $settings['dustro_text3e'] ) {
			$this->add_render_attribute( 'shortcode', 'text3e', $settings['dustro_text3e'] );
		}    		
    if ( $settings['dustro_text3f'] ) {
			$this->add_render_attribute( 'shortcode', 'text3f', $settings['dustro_text3f'] );
		}    		
    if ( $settings['dustro_text3g'] ) {
			$this->add_render_attribute( 'shortcode', 'text3g', $settings['dustro_text3g'] );
		}  
    if ( $settings['dustro_text3h'] ) {
			$this->add_render_attribute( 'shortcode', 'text3h', $settings['dustro_text3h'] );
		}    
    if ( $settings['dustro_text3i'] ) {
			$this->add_render_attribute( 'shortcode', 'text3i', $settings['dustro_text3i'] );
		}    
    if ( $settings['dustro_text3j'] ) {
			$this->add_render_attribute( 'shortcode', 'text3j', $settings['dustro_text3j'] );
		}    
   
    if ( $settings['dustro_show'] ) {
			$this->add_render_attribute( 'shortcode', 'show', $settings['dustro_show'] );
		} 

	  if ( $settings['dustro_title2'] ) {
			$this->add_render_attribute( 'shortcode', 'title2', $settings['dustro_title2'] );
		}
    
	  if ( $settings['dustro_title3'] ) {
			$this->add_render_attribute( 'shortcode', 'title3', $settings['dustro_title3'] );
		}

	  if ( $settings['dustro_icon2'] ) {
			$this->add_render_attribute( 'shortcode', 'icon2', $settings['dustro_icon2'] );
		}
		
		if ( $settings['dustro_phonenumber'] ) {
			$this->add_render_attribute( 'shortcode', 'show', $settings['dustro_phonenumber'] );
		}
		
    echo do_shortcode( '[rtvaxi_servicebox2 ' . $this->get_render_attribute_string( 'shortcode' ) . ']' );
	}
 
}