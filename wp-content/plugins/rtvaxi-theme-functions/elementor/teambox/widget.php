<?php
namespace Dustro_Teambox;

use Elementor\Widget_Base;

if ( ! defined( 'ABSPATH' ) ) exit; 

class Dustro_Teambox extends Widget_Base {

	public static $slug = 'dustro-teambox';

	public function get_name() { return self::$slug; }

	public function get_title() { return __('Team box', self::$slug); }

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
			'dustro_title2',
			[
				'label' => __( 'Title2', 'vaxi' ),
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
			'dustro_teamurl',
			[
				'label' => __( 'Team inner page URL', 'vaxi' ),
				'type' => \Elementor\Controls_Manager::TEXT,
        'input_type' => 'text',
				'default' => '',
			]
		);
		
    $this->add_control(
			'dustro_text3a',
			[
				'label' => __( 'Icon one', 'vaxi' ),
				'description' => __( 'Add icons from this list, eg. fa facebook https://fontawesome.com/v5.15/icons', 'vaxi' ),
				'type' => \Elementor\Controls_Manager::TEXT,
        'input_type' => 'text',
				'default' => '',
			]
		);
		
		 $this->add_control(
			'dustro_url1',
			[
				'label' => __( 'Icon one URL', 'vaxi' ),
				'type' => \Elementor\Controls_Manager::TEXT,
        'input_type' => 'text',
				'default' => '',
			]
		);
		
		$this->add_control(
			'dustro_text3b',
			[
				'label' => __( 'Icon two', 'vaxi' ),
				'description' => __( 'Add icons from this list, eg. fa facebook https://fontawesome.com/v5.15/icons', 'vaxi' ),
				'type' => \Elementor\Controls_Manager::TEXT,
        'input_type' => 'text',
				'default' => '',
			]
		);
		 $this->add_control(
			'dustro_url2',
			[
				'label' => __( 'Icon two URL', 'vaxi' ),
				'type' => \Elementor\Controls_Manager::TEXT,
        'input_type' => 'text',
				'default' => '',
			]
		);		

   $this->add_control(
			'dustro_text3c',
			[
				'label' => __( 'Icon three', 'vaxi' ),
				'description' => __( 'Add icons from this list, eg. fa facebook https://fontawesome.com/v5.15/icons', 'vaxi' ),
				'type' => \Elementor\Controls_Manager::TEXT,
        'input_type' => 'text',
				'default' => '',
			]
		);  
		 $this->add_control(
			'dustro_url3',
			[
				'label' => __( 'Icon three URL', 'vaxi' ),
				'type' => \Elementor\Controls_Manager::TEXT,
        'input_type' => 'text',
				'default' => '',
			]
		);

   $this->add_control(
			'dustro_text3d',
			[
				'label' => __( 'Icon four', 'vaxi' ),
				'description' => __( 'Add icons from this list, eg. fa facebook https://fontawesome.com/v5.15/icons', 'vaxi' ),
				'type' => \Elementor\Controls_Manager::TEXT,
        'input_type' => 'text',
				'default' => '',
			]
		); 
		 $this->add_control(
			'dustro_url4',
			[
				'label' => __( 'Icon four URL', 'vaxi' ),
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
				],
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
		
		if ( $settings['dustro_title2'] ) {
			$this->add_render_attribute( 'shortcode', 'title2', $settings['dustro_title2'] );
		}
     if ( $settings['dustro_text'] ) {
			$this->add_render_attribute( 'shortcode', 'text', $settings['dustro_text'] );
		}   
     if ( $settings['dustro_teamurl'] ) {
			$this->add_render_attribute( 'shortcode', 'teamurl', $settings['dustro_teamurl'] );
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
			
     if ( $settings['dustro_url1'] ) {
			$this->add_render_attribute( 'shortcode', 'url1', $settings['dustro_url1'] );
		}
		
		if ( $settings['dustro_url2'] ) {
			$this->add_render_attribute( 'shortcode', 'url2', $settings['dustro_url2'] );
		}
    if ( $settings['dustro_url3'] ) {
			$this->add_render_attribute( 'shortcode', 'url3', $settings['dustro_url3'] );
		}       
		
    if ( $settings['dustro_url4'] ) {
			$this->add_render_attribute( 'shortcode', 'url4', $settings['dustro_url4'] );
		}  
	 
    if ( $settings['dustro_show'] ) {
			$this->add_render_attribute( 'shortcode', 'show', $settings['dustro_show'] );
		} 
		
    echo do_shortcode( '[rtvaxi_teambox ' . $this->get_render_attribute_string( 'shortcode' ) . ']' );
	}
 
}