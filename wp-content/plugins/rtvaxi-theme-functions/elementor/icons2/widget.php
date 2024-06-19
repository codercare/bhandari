<?php
namespace Dustro_Icons2;

use Elementor\Widget_Base;

if ( ! defined( 'ABSPATH' ) ) exit; 

class Dustro_Icons2 extends Widget_Base {

	public static $slug = 'dustro-icons2';

	public function get_name() { return self::$slug; }

	public function get_title() { return __('Icon style 2 (centered)', self::$slug); }

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
			'dustro_url',
			[
				'label' => __( 'URL', 'vaxi' ),
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
    
    if ( $settings['dustro_image']['url'] ) {
			$this->add_render_attribute( 'shortcode', 'image', $settings['dustro_image']['url'] );
		}
 		
    if ( $settings['dustro_text1'] ) {
			$this->add_render_attribute( 'shortcode', 'text1', $settings['dustro_text1'] );
		}
    
    if ( $settings['dustro_text2'] ) {
			$this->add_render_attribute( 'shortcode', 'text2', $settings['dustro_text2'] );
		}
        
    if ( $settings['dustro_url']['url'] ) {
			$this->add_render_attribute( 'shortcode', 'url', $settings['dustro_url']['url'] );
	 }
   
   if ( $settings['dustro_url']['nofollow'] ) {
			$this->add_render_attribute( 'shortcode', 'nofollow', $settings['dustro_url']['nofollow'] );
	 }
   
   if ( $settings['dustro_url']['is_external'] ) {
			$this->add_render_attribute( 'shortcode', 'external', $settings['dustro_url']['is_external'] );
	 }     

    echo do_shortcode( '[rtvaxi_icons2 ' . $this->get_render_attribute_string( 'shortcode' ) . ']' );
	}
 
}