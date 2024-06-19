<?php
namespace rtvaxi_Testimonials1;

use Elementor\Widget_Base;

if ( ! defined( 'ABSPATH' ) ) exit; 

class rtvaxi_Testimonials1 extends Widget_Base {

	public static $slug = 'rtvaxi-testimonials1';

	public function get_name() { return self::$slug; }

	public function get_title() { return (esc_html__('Testimonials 1', 'vaxi')); }

	public function get_icon() { return 'fas fa-building'; }

	public function get_categories() { return [ 'general' ]; }

	protected function register_controls() {

		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__( 'Options', 'vaxi' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
    $this->add_control(
			'rtvaxi_limit',
			[
				'label' => __( 'Limit', 'vaxi' ),
				'description' => __( 'Add number for number of items, -1 is without limit', 'vaxi' ),
				'type' => \Elementor\Controls_Manager::TEXT,
        'input_type' => 'text',
				'default' => '',
			]
		);
   
		
		$this->add_control(
			'rtvaxi_order',
			[
				'label' => __( 'Order', 'vaxi' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'options' => [
					'ASC' => __( 'ASC', 'vaxi' ),
					'DESC' => __( 'DESC', 'vaxi' ),
				],
			]
		);	

		$this->end_controls_section();
	}

	protected function render() {
    
   $settings = $this->get_settings_for_display();  
	
   	 if (is_admin()){
   echo "<script>

// boxes services slick slider
	 (function($) {
  $('.testimonials1').slick({
    lazyLoad: 'ondemand', 
    infinite: true,
		arrows: false,
		dots: true,
		slidesToShow: 1,
    slidesToScroll: 1
  });
	})(jQuery); 
	 </script>";
}
	 
	 if ( $settings['rtvaxi_limit'] ) {
			$this->add_render_attribute( 'shortcode', 'limit', $settings['rtvaxi_limit'] );
	 } 
 
	 if ( $settings['rtvaxi_order']) {
			$this->add_render_attribute( 'shortcode', 'order', $settings['rtvaxi_order'] );
	 }


    echo do_shortcode( '[rtvaxi_test1 ' . $this->get_render_attribute_string( 'shortcode' ) . ']' );
	}
 
}