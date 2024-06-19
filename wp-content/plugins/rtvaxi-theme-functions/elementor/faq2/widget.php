<?php
namespace Dustro_faq2;

use Elementor\Widget_Base;

if ( ! defined( 'ABSPATH' ) ) exit; 

class Dustro_faq2 extends Widget_Base {

	public static $slug = 'dustro-faq2';

	public function get_name() { return self::$slug; }

	public function get_title() { return __('FAQ 2', self::$slug); }

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
				'type' => \Elementor\Controls_Manager::TEXTAREA,
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

    echo do_shortcode( '[rtvaxi_faq2 ' . $this->get_render_attribute_string( 'shortcode' ) . ']' );
	}
 
}