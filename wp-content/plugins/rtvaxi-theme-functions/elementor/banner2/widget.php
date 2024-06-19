<?php
namespace Dustro_Banner2;

use Elementor\Widget_Base;

if ( ! defined( 'ABSPATH' ) ) exit; 

class Dustro_Banner2 extends Widget_Base {

	public static $slug = 'dustro-banner2';

	public function get_name() { return self::$slug; }

	public function get_title() { return __('Banner2', self::$slug); }

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
			'dustro_tag',
			[
				'label' => __( 'H tag', 'vaxi' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'options' => [
					'H1' => __( 'H1', 'vaxi' ),
					'H2' => __( 'H2', 'vaxi' ),
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
    if ( $settings['dustro_text'] ) {
			$this->add_render_attribute( 'shortcode', 'text', $settings['dustro_text'] );
		}  

    if ( $settings['dustro_tag'] ) {
			$this->add_render_attribute( 'shortcode', 'tag', $settings['dustro_tag'] );
		}     
    echo do_shortcode( '[rtvaxi_banner2 ' . $this->get_render_attribute_string( 'shortcode' ) . ']' );
	}
 
}