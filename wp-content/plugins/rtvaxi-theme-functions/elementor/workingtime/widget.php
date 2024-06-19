<?php
namespace Dustro_Workingtime;

use Elementor\Widget_Base;

if ( ! defined( 'ABSPATH' ) ) exit; 

class Dustro_Workingtime extends Widget_Base {

	public static $slug = 'dustro-workingtime';

	public function get_name() { return self::$slug; }

	public function get_title() { return __('Working time box', self::$slug); }

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
			'dustro_text2',
			[
				'label' => __( 'Text2', 'vaxi' ),
				'type' => \Elementor\Controls_Manager::TEXT,
        'input_type' => 'text',
				'default' => '',
			]
		);
    
    $this->add_control(
			'dustro_text2a',
			[
				'label' => __( 'Text2a', 'vaxi' ),
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
			'dustro_text3a',
			[
				'label' => __( 'Text3a', 'vaxi' ),
				'type' => \Elementor\Controls_Manager::TEXT,
        'input_type' => 'text',
				'default' => '',
			]
		);


    $this->add_control(
			'dustro_text4',
			[
				'label' => __( 'Text4', 'vaxi' ),
				'type' => \Elementor\Controls_Manager::TEXT,
        'input_type' => 'text',
				'default' => '',
			]
		);
		
		
    $this->add_control(
			'dustro_text4a',
			[
				'label' => __( 'Text4a', 'vaxi' ),
				'type' => \Elementor\Controls_Manager::TEXT,
        'input_type' => 'text',
				'default' => '',
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
       
	  if ( $settings['dustro_text2a'] ) {
			$this->add_render_attribute( 'shortcode', 'text2a', $settings['dustro_text2a'] );
		}        		 

    if ( $settings['dustro_text3'] ) {
			$this->add_render_attribute( 'shortcode', 'text3', $settings['dustro_text3'] );
		}
		
    if ( $settings['dustro_text3a'] ) {
			$this->add_render_attribute( 'shortcode', 'text3a', $settings['dustro_text3a'] );
		}		
		
    if ( $settings['dustro_text4'] ) {
			$this->add_render_attribute( 'shortcode', 'text4', $settings['dustro_text4'] );
		}		
    if ( $settings['dustro_text4a'] ) {
			$this->add_render_attribute( 'shortcode', 'text4a', $settings['dustro_text4a'] );
		}		
		
    echo do_shortcode( '[rtvaxi_workingtime ' . $this->get_render_attribute_string( 'shortcode' ) . ']' );
	}
 
}