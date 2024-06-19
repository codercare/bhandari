<?php
namespace Dustro_Videobutton;

use Elementor\Widget_Base;

if ( ! defined( 'ABSPATH' ) ) exit; 

class Dustro_Videobutton extends Widget_Base {

	public static $slug = 'dustro-videobutton';

	public function get_name() { return self::$slug; }

	public function get_title() { return __('Video popup button', self::$slug); }

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
			'dustro_video',
			[
				'label' => __( 'Add video URL', 'vaxi' ),
				'description' => __( 'Note: if you add short YouTube video it 
				is important to change text "short" to "embed". Example: 
				https://www.youtube.com/shorts/PRo96SnzBkc to 
				https://www.youtube.com/embed/PRo96SnzBkc
				or copy video embed code and extract URL.', 'vaxi' ),
				'type' => \Elementor\Controls_Manager::TEXT,
        'input_type' => 'text',
        'default' => '',
			]
		);
    

		$this->end_controls_section();
	}

	protected function render() {
    
   $settings = $this->get_settings_for_display();  
    
    
    if ( $settings['dustro_video'] ) {
			$this->add_render_attribute( 'shortcode', 'video', $settings['dustro_video'] );
		}
    

    echo do_shortcode( '[rtvaxi_videobutton ' . $this->get_render_attribute_string( 'shortcode' ) . ']' );
	}
 
}