<?php
/*
Plugin Name: Rt Vaxi Theme Functions
Plugin URI: rayoflightthemes.com
Description: Shortcodes and custom post types for Vaxi WordPress theme
Version: 1.9
Author: rayoflightthemes.com
License: themeforest.net
*/

/************************************************************************
* elementor custom widgets
*************************************************************************/

include('elementor/slider1slide/slider1slide.php');
include('elementor/icons1/icons1.php');
include('elementor/icons2/icons2.php');
include('elementor/icons2a/icons2a.php');
include('elementor/icons2at/icons2at.php');
include('elementor/icons2b/icons2b.php');
include('elementor/icons2bt/icons2bt.php');
include('elementor/icons3/icons3.php');
include('elementor/icons3a/icons3a.php');
include('elementor/icons4/icons4.php');
include('elementor/icons4a/icons4a.php');
include('elementor/faq2/faq2.php');
include('elementor/pricebox/pricebox.php');
include('elementor/servicebox/servicebox.php');
include('elementor/servicebox2/servicebox2.php');
include('elementor/teambox/teambox.php');
include('elementor/workingtime/workingtime.php');
include('elementor/adressbox/adressbox.php');
include('elementor/textbox1/textbox1.php');
include('elementor/textbox2/textbox2.php');
include('elementor/custombutton2/custombutton2.php');
include('elementor/ctaphone/ctaphone.php');
include('elementor/custombutton1/custombutton1.php');
include('elementor/videobutton/videobutton.php');
include('elementor/blognews/blognews.php');
include('elementor/teamfilter/teamfilter.php');
include('elementor/custombutton3/custombutton3.php');
include('elementor/banner1/banner1.php');
include('elementor/banner2/banner2.php');
include('elementor/banner3/banner3.php');
include('elementor/revealicons/revealicons.php');
include('elementor/testimonials1/testimonials1.php');
include('elementor/testimonials2/testimonials2.php');

/************************************************************************
* enable shortcodes in widgets
*************************************************************************/
add_filter('widget_text', 'do_shortcode');

/**********************************************************
* support for shortcodes in excerpt 
***********************************************************/
add_filter('the_excerpt', 'do_shortcode');

/********************************************************
* add meta boxes if acf plugin is activated
*********************************************************/
if( function_exists('acf_add_local_field_group') ):
include('registered-meta-boxes-plugin.php');
endif;

/**********************************************************
* Searchform shortcode
***********************************************************/
function shapeSpace_display_search_form() {
	return get_search_form(false);
}
add_shortcode('display_search_form', 'shapeSpace_display_search_form');

/********************************************************
* CUSTOM POST TYPES
*********************************************************/

 /* Testimonials 1 custom post type */
add_action('init', 'rtvaxi_test1_cpt'); 

function rtvaxi_test1_cpt() {  
{
  $labels = array(  
    'name' => esc_html__('Testimonials 1', 'vaxi'),  
    'singular_name' => esc_html__('testimonial 1', 'vaxi'),  
    'add_new' => esc_html__('Add New', 'vaxi'),  
    'add_new_item' => esc_html__('Add New', 'vaxi'),  
    'edit_item' => esc_html__('Edit item', 'vaxi'),  
    'new_item' => esc_html__('New item', 'vaxi'),  
    'view_item' => esc_html__('View item', 'vaxi'),  
    'search_items' => esc_html__('Search item', 'vaxi'),  
    'not_found' =>  esc_html__('No item found', 'vaxi'),  
    'not_found_in_trash' => esc_html__('No item found in Trash', 'vaxi'),  
    'parent_item_colon' => '' 
  );  
  
  $args = array(  
    'labels' => $labels,  
    'public' => true,  
    'publicly_queryable' => false,  
    'show_ui' => true,  
    'query_var' => true,
    'rewrite' => array('slug' => 'testimonials','with_front' => false), 
    'capability_type' => 'post',
    'show_in_nav_menus' => true,  	 
    'hierarchical' => false, 
    'exclude_from_search' => false,	 
    'menu_position' => 10, 
    'supports' => array( 'title', 'editor')  
  );  
  register_post_type('rtvaxi-test1',$args);  
} }


 /* Testimonials 2 custom post type */
add_action('init', 'rtvaxi_test2_cpt'); 

function rtvaxi_test2_cpt() {  
{
  $labels = array(  
    'name' => esc_html__('Testimonials 2', 'vaxi'),  
    'singular_name' => esc_html__('testimonial 2', 'vaxi'),  
    'add_new' => esc_html__('Add New', 'vaxi'),  
    'add_new_item' => esc_html__('Add New', 'vaxi'),  
    'edit_item' => esc_html__('Edit item', 'vaxi'),  
    'new_item' => esc_html__('New item', 'vaxi'),  
    'view_item' => esc_html__('View item', 'vaxi'),  
    'search_items' => esc_html__('Search item', 'vaxi'),  
    'not_found' =>  esc_html__('No item found', 'vaxi'),  
    'not_found_in_trash' => esc_html__('No item found in Trash', 'vaxi'),  
    'parent_item_colon' => '' 
  );  
  
  $args = array(  
    'labels' => $labels,  
    'public' => true,  
    'publicly_queryable' => false,  
    'show_ui' => true,  
    'query_var' => true,
    'rewrite' => array('slug' => 'testimonials','with_front' => false), 
    'capability_type' => 'post',
    'show_in_nav_menus' => true,  	 
    'hierarchical' => false, 
    'exclude_from_search' => false,	 
    'menu_position' => 10, 
    'supports' => array( 'title', 'editor', 'thumbnail')  
  );  
  register_post_type('rtvaxi-test2',$args);  
} }



/* Team filter custom post type */
add_action('init', 'rtvaxi_galleryfilter_cpt'); 

function rtvaxi_galleryfilter_cpt() {  
{
  $labels = array(  
    'name' => esc_html__('Team boxes group with filter option', 'vaxi'),  
    'singular_name' => esc_html__('team filter', 'vaxi'),  
    'add_new' => esc_html__('Add New', 'vaxi'),  
    'add_new_item' => esc_html__('Add New', 'vaxi'),  
    'edit_item' => esc_html__('Edit item', 'vaxi'),  
    'new_item' => esc_html__('New item', 'vaxi'),  
    'view_item' => esc_html__('View item', 'vaxi'),  
    'search_items' => esc_html__('Search item', 'vaxi'),  
    'not_found' =>  esc_html__('No item found', 'vaxi'),  
    'not_found_in_trash' => esc_html__('No item found in Trash', 'vaxi'),  
    'parent_item_colon' => '' 
  );  
  
  $args = array(  
    'labels' => $labels,  
    'public' => true,  
    'publicly_queryable' => true,  
    'show_ui' => true,  
    'query_var' => true,
    'rewrite' => array('slug' => 'team','with_front' => false), 
    'capability_type' => 'post',
    'show_in_nav_menus' => true,  	 
    'hierarchical' => false, 
    'exclude_from_search' => false,	 
    'menu_position' => 10, 
    'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt')  
  );  
  register_post_type('rtvaxi-team',$args);  
} 

register_taxonomy( 'rtvaxi-cat', 
	array( 	'rtvaxi-team' ), 
	array( 	'hierarchical' => true,
		'labels' => array('name'=>"Category",'add_new_item'=>"Add New Category"), 
		'singular_label' => __( "Cagetory", 'vaxi' ), 
		'rewrite' => array( 'slug' => 'category',  
		'with_front' => false)
	) 
);

}
/* gallery filter custom post type end */



register_deactivation_hook( __FILE__, 'flush_rewrite_rules' );
register_activation_hook( __FILE__, 'rtvaxi_functions_flush_rewrites' );
function rtvaxi_functions_flush_rewrites() {
  register_post_type('rtvaxi-test1',$args);
	register_post_type('rtvaxi-test2',$args);
	register_post_type('rtvaxi-team',$args);
	register_taxonomy( 'rtvaxi-cat', 
	array( 	'rtvaxi-team' ), 
	array( 	'hierarchical' => true,
		'labels' => array('name'=>"Category",'add_new_item'=>"Add New Category"), 
		'singular_label' => __( "Cagetory", 'vaxi' ), 
		'rewrite' => array( 'slug' => 'category',  
		'with_front' => false)
	) 
);
flush_rewrite_rules();
}

/**********************************************************
 * SHORTCODES WITH CUSTOM POST TYPE (team filter)
 *
 ***********************************************************/ 

/******************
 * Gallery filter query [rtvaxi_teamfilter  limit="-1" order="ASC" columns="3"]  
 *
 ******************/ 
function rtvaxi_teamfilter( $atts, $content = null ) {	

	$atts = extract(shortcode_atts(array(
	'limit' => 2,
	'order' => 'ASC'
   ),$atts));
   
	ob_start();	
	include('team-filter.php');
	$content = ob_get_clean();
    return $content;
}
add_shortcode('rtvaxi_teamfilter','rtvaxi_teamfilter');


/******************
 * Testimonials 1 [rtvaxi_test1 limit="-1" order="ASC"]  
 *
 ******************/ 
function rtvaxi_test1( $atts, $content = null ) {	

	$atts = extract(shortcode_atts(array(
	'limit' => 10,
	'order' => 'ASC'
   ),$atts));
   
	ob_start();	
	include('testimonials1.php');
	$content = ob_get_clean();
    return $content;
}
add_shortcode('rtvaxi_test1','rtvaxi_test1');


/******************
 * Testimonials 2 [rtvaxi_test2 limit="-1" order="ASC"]  
 *
 ******************/ 
function rtvaxi_test2( $atts, $content = null ) {	

	$atts = extract(shortcode_atts(array(
	'limit' => 10,
	'order' => 'ASC'
   ),$atts));
   
	ob_start();	
	include('testimonials2.php');
	$content = ob_get_clean();
    return $content;
}
add_shortcode('rtvaxi_test2','rtvaxi_test2');



/******************
 * SHORTCODES WITHOUT ELEMENTOR CUSTOM ELEMENTS
 *
 ******************/
/******************
 * Testimonials 
 [rtvaxi_testimonials text1="" text2="" url=""]
 *
 ******************/
function rtvaxi_testimonials( $atts, $content = null ) {
	$atts = extract(shortcode_atts(array(
  'text1' => '',
  'text2' => '',
  'url' => '',
	),$atts));

	return "
  <div class=\"testimonials\">
    <div class=\"item\">
      <h5>$text1</h5>
			<a href=\"$url\"><cite>$text2</cite></a>
    </div> 
  </div>  ";
}
add_shortcode('rtvaxi_testimonials','rtvaxi_testimonials');



/******************
 * Testimonials2 
 [rtvaxi_testimonials2 text1="" text2=""img="" url=""]
 *
 ******************/
function rtvaxi_testimonials2( $atts, $content = null ) {
	$atts = extract(shortcode_atts(array(
  'text1' => '',
  'text2' => '',
  'url' => '',
	'img' => '',
	),$atts));

	return "
  <div class=\"testimonials testimonials2\">
    <div class=\"item\">
      <h5>$text1</h5>
      <img src=\"$img\" alt=\"\">
			<a href=\"$url\"><cite>$text2</cite></a>
    </div> 
  </div>  
";
}
add_shortcode('rtvaxi_testimonials2','rtvaxi_testimonials2');



/******************
 * Slider 1 slide
 [rtvaxi_slider1slide title="" subtitle="" text="" image="" 
 buttonurl="" buttontext="" replacetitle="" textcenter="" tag=""]
 *
 ******************/
function rtvaxi_slider1slide( $atts, $content = null ) {
	$atts = extract(shortcode_atts(array(
  'title' => '',
  'subtitle' => '',
  'text' => '',
  'buttontext' => '',
	'buttontext2' => '',
	'phonenumber' => '',
  'buttonurl' => '',
  'external' => '',
  'nofollow' => '',
  'image' => '',
  'textcenter' => '',
  'tag' => 'h2',
	),$atts));

	return "
  <div class=\"slider1slide $textcenter\">    	
		<div class=\"container\">
      <div class=\"row slider1slide-text\">
        <div class=\"col p-0\">
          <$tag class=\"lgx-rotateInUpRight-one\">
            <span class=\"slider1slidetext1\">$title</span>
          </$tag>
          <p class=\"slider1slidertext2 lgx-rotateInUpRight-two\">$text</p>
          <p class=\"slider1slidertext3 lgx-rotateInUpRight-three\">$subtitle</p>
					<div class=\"slider-buttons\">
					  <div class=\"lgx-rotateInUpRight-three slider-button\"><a href=\"tel:$phonenumber\"><i class=\"fa fa-phone\"></i> $buttontext2</a></div> 					
					  <a class=\"lgx-rotateInUpRight-three custom-button1-slider\" href=\"$buttonurl\" target=\"$external\" rel=\"$nofollow\">$buttontext</a> 
          </div>
				</div>
      </div>
    </div> 
		<img src=\"$image\" alt=\"\">
  </div>   
";
}
add_shortcode('rtvaxi_slider1slide','rtvaxi_slider1slide'); 
 

/******************
 * SHORTCODES WITHOUT CUSTOM POST TYPEs WITH ELEMENTOR CUSTOM ELEMENTS
 *
 ******************/ 
 
 /******************
 * Blog news query [rtvaxi_blognews columns="3" limit="-1" order="DESC"]  
 *
 ******************/ 
function rtvaxi_blognews( $atts, $content = null ) {	
	$atts = extract(shortcode_atts(array(
	'limit' => 3, 
	'order' => 'DESC',
  ),$atts));
   
	ob_start();	
	include('blog-news.php');
	$content = ob_get_clean();
    return $content;
}
add_shortcode('rtvaxi_blognews','rtvaxi_blognews');
 
 
/******************
 * Reveal icons
 [rtvaxi_revealicons text1="" iconurl1="" text2="" iconurl2="" text3="" iconurl3="" text4="" iconurl4=""]
 *
 ******************/
function rtvaxi_revealicons( $atts, $content = null ) {
	$atts = extract(shortcode_atts(array(
  'text1' => '',
  'iconurl1' => '',
  'text2' => '',
  'iconurl2' => '',
	'text3' => '',
  'iconurl3' => '',
	),$atts));

	return "
  <div class=\"revealicons\">
    <div class=\"item1\">
      <div class=\"revealicons-imagewrapper revealicons-imagewrapper1\">
			  <img src=\"$iconurl1\" alt=\"\">
			</div>
			<div class=\"revealicons-textwrapper\">$text1</div>
    </div> 
    <div class=\"item2\">
      <div class=\"revealicons-imagewrapper revealicons-imagewrapper2\">
			  <img src=\"$iconurl2\" alt=\"\">
			</div>
			<div class=\"revealicons-textwrapper\">$text2</div>
    </div> 
	    <div class=\"item3\">
      <div class=\"revealicons-imagewrapper revealicons-imagewrapper3\">
			  <img src=\"$iconurl3\" alt=\"\">
			</div>
			<div class=\"revealicons-textwrapper\">$text3</div>		
    </div> 
  </div>  ";
}
add_shortcode('rtvaxi_revealicons','rtvaxi_revealicons'); 
 
/******************
 * Banner1
 [rtvaxi_banner1 title="" subtitle="" text="" image="" 
 buttonurl="" buttontext="" replacetitle="" textcenter="" tag=""]
 *
 ******************/
function rtvaxi_banner1( $atts, $content = null ) {
	$atts = extract(shortcode_atts(array(
  'title' => '',
  'subtitle' => '',
  'text' => '',
  'buttontext' => '',
	'phonenumber' => '',
	'buttontext2' => '',
  'buttonurl' => '',
  'external' => '',
  'nofollow' => '',
  'tag' => 'h1',
	),$atts));

	return "
  <div class=\"slider1slide banner1\">
		<div class=\"container\">
      <div class=\"row slider1slide-text\">
        <div class=\"col p-0\">
          <$tag class=\"lgx-rotateInUpRight-one\">
            <span class=\"slider1slidetext1\">$title</span>
          </$tag>
          <p class=\"slider1slidertext2 lgx-rotateInUpRight-two\">$text</p>
          <p class=\"slider1slidertext3 lgx-rotateInUpRight-three\">$subtitle</p>
					<div class=\"slider-buttons\">
					  <div class=\"lgx-rotateInUpRight-three slider-button\"><a href=\"tel:$phonenumber\"><i class=\"fa fa-phone\"></i> $buttontext2</a></div> 					
					  <a class=\"lgx-rotateInUpRight-three custom-button1\" href=\"$buttonurl\" target=\"$external\" rel=\"$nofollow\">$buttontext</a> 
          </div>
				</div>
      </div>
    </div> 
  </div>   
";
}
add_shortcode('rtvaxi_banner1','rtvaxi_banner1'); 



 /******************
 * Banner2
 [rtvaxi_banner2 title="" subtitle="" text="" ]
 *
 ******************/
function rtvaxi_banner2( $atts, $content = null ) {
	$atts = extract(shortcode_atts(array(
  'title' => '',
  'subtitle' => '',
  'text' => '',
  'tag' => 'h1',
	),$atts));

	return "
  <div class=\"banner2\">
    <div class=\"row\">
      <div class=\"col p-0\">
        <$tag>
          <span>$title</span>
        </$tag>
        <h3>$subtitle</h3>
        <p>$text</p>
		  </div>
    </div>
  </div>   
";
}
add_shortcode('rtvaxi_banner2','rtvaxi_banner2'); 



 /******************
 * Banner3
 [rtvaxi_banner3 title="" subtitle="" text="" ]
 *
 ******************/
function rtvaxi_banner3( $atts, $content = null ) {
	$atts = extract(shortcode_atts(array(
  'title' => '',
  'subtitle' => '',
  'text' => '',
  'tag' => 'h1',
	'buttontext' => '',
  'buttonurl' => '',
  'external' => '',
  'nofollow' => '',
	'remove' => '',
	),$atts));

	return "
  <div class=\"banner3\">
    <div class=\"row\">
      <div class=\"col p-0\">
        <h3>$subtitle</h3>
        <$tag>
          <span>$title</span>
        </$tag>				
        <p>$text</p>
		  	<a class=\"custom-button1 $remove\" href=\"$buttonurl\" target=\"$external\" rel=\"$nofollow\">$buttontext</a>           
			</div>
    </div>
  </div>   
";
}
add_shortcode('rtvaxi_banner3','rtvaxi_banner3'); 
 
  
/******************
 * Icons1 [rtvaxi_icons1]
 *
 ******************/
function rtvaxi_icons1( $atts, $content = null ) {
	$atts = extract(shortcode_atts(array(
  'image' => '',
	'image2' => '',
  'text1' => '',
  'text2' => '',
	'buttonurl' => '',
	'external' => '',
	'nofollow' => ''
	),$atts));

	return "
  <div class=\"icons1\">
	  <a href=\"$buttonurl\" target=\"$external\" rel=\"$nofollow\">
      <div class=\"img-wrapper\">
        <img class=\"icons1-image\" src=\"$image\" alt=\"\">
			  <img class=\"icons1-image2\" src=\"$image2\" alt=\"\">
      </div>
      <div class=\"text-wrapper\">
        <h3>$text1</h3> 
        <p>$text2</p>
      </div>
		</a>
   </div>   
";
}
add_shortcode('rtvaxi_icons1','rtvaxi_icons1'); 
 
 
 
 
 /******************
 * Icons2 [rtvaxi_icons2] 
 *
 ******************/
function rtvaxi_icons2( $atts, $content = null ) {
	$atts = extract(shortcode_atts(array(
  'image' => '',
  'text1' => '',
  'text2' => '',
	'external' => '',
	'nofollow' => '',
	'url' => '',
	),$atts));

	return "
  <div class=\"icons2\">
    <a href=\"$url\" target=\"$external\" rel=\"$nofollow\">
		<div class=\"img-wrapper\">
      <img src=\"$image\" alt=\"\">
    </div>
    <div class=\"text-wrapper\">
      <h3>$text1</h3> 
      <p>$text2</p>
    </div>
		</a>
  </div>   
";
}
add_shortcode('rtvaxi_icons2','rtvaxi_icons2'); 
 
 
 
 
 /******************
 * Icons2a Icon style 2 (right) [rtvaxi_icons2a] 
 *
 ******************/
function rtvaxi_icons2a( $atts, $content = null ) {
	$atts = extract(shortcode_atts(array(
  'image' => '',
  'text1' => '',
  'text2' => '',
	),$atts));

	return "
  <div class=\"icons2 icons2a row p-0\">
    <div class=\"col order-lg-1 order-2\">
		<div class=\"text-wrapper\">
      <h3>$text1</h3> 
      <p>$text2</p>
    </div>
		</div>
		<div class=\"col-auto order-lg-2 order-1 p-0\">
		<div class=\"image-wrapper\">
      <img src=\"$image\" alt=\"$text1\">
    </div>
		</div>
   </div>   
";
}
add_shortcode('rtvaxi_icons2a','rtvaxi_icons2a');  
 
 
 /******************
 * Icons2atitle Icon style 2 (only title) (right) [rtvaxi_icons2at] 
 *
 ******************/
function rtvaxi_icons2at( $atts, $content = null ) {
	$atts = extract(shortcode_atts(array(
  'image' => '',
  'text1' => '',
	),$atts));

	return "
  <div class=\"icons2 icons2a icons2at row p-0\">
    <div class=\"col order-lg-1 order-2\">
		<div class=\"text-wrapper\">
      <h3>$text1</h3> 
    </div>
		</div>
		<div class=\"col-auto order-lg-2 order-1 p-0\">
		<div class=\"image-wrapper\">
      <img src=\"$image\" alt=\"$text1\">
    </div>
		</div>
   </div>   
";
}
add_shortcode('rtvaxi_icons2at','rtvaxi_icons2at');   
 
 
 
  /******************
 * Icons2b Icon style 2 (left) [rtvaxi_icons2b] 
 *
 ******************/
function rtvaxi_icons2b( $atts, $content = null ) {
	$atts = extract(shortcode_atts(array(
  'image' => '',
  'text1' => '',
  'text2' => '',
	),$atts));

	return "
  <div class=\"icons2 icons2b row p-0\">
		<div class=\"col-auto p-0\">
		<div class=\"image-wrapper\">
      <img src=\"$image\" alt=\"$text1\">
    </div>
		</div>
		<div class=\"col\">
		<div class=\"text-wrapper\">
      <h3>$text1</h3> 
      <p>$text2</p>
    </div>
		</div>
   </div>  
";
}
add_shortcode('rtvaxi_icons2b','rtvaxi_icons2b');  
 
 
  /******************
 * Icons2bt Icon style 2 (left) only title [rtvaxi_icons2bt] 
 *
 ******************/
function rtvaxi_icons2bt( $atts, $content = null ) {
	$atts = extract(shortcode_atts(array(
  'image' => '',
  'text1' => '',
	),$atts));

	return "
  <div class=\"icons2 icons2b icons2bt row p-0\">
		<div class=\"col-auto p-0\">
		<div class=\"image-wrapper\">
      <img src=\"$image\" alt=\"$text1\">
    </div>
		</div>
		<div class=\"col\">
		<div class=\"text-wrapper\">
      <h3>$text1</h3> 
    </div>
		</div>
   </div>  
";
}
add_shortcode('rtvaxi_icons2bt','rtvaxi_icons2bt');   
 
 
/******************
 * Icons3 icon box style 3(boxed icons in row) [rtvaxi_icons3] 
 *
 ******************/
function rtvaxi_icons3( $atts, $content = null ) {
	$atts = extract(shortcode_atts(array(
  'buttontext' => '',
  'text1' => '',
  'text2' => '',
	'buttonurl' => '',
	'removebutton' => '',
	),$atts));

	return "
	<div>
    <div class=\"icons3 $removebutton\">
      <div class=\"icons3-top\">
        <h4>$text1</h4> 
        <h3>$text2</h3> 
      </div>
		  <a href=\"$buttonurl\">$buttontext</a> 
    </div>  
	</div> 	 
";
}
add_shortcode('rtvaxi_icons3','rtvaxi_icons3'); 
 
 
/******************
 * Icons3a icon box style 3 big (boxed icons in row) [rtvaxi_icons3] 
 *
 ******************/
function rtvaxi_icons3a( $atts, $content = null ) {
	$atts = extract(shortcode_atts(array(
  'buttontext' => '',
  'text1' => '',
  'text2' => '',
	'text3' => '',
	'buttonurl' => '',
	'removebutton' => '',
	),$atts));

	return "
  <div class=\"icons3 icons3a $removebutton\">
    <div class=\"icons3-top\">
     <div><h4>$text1</h4></div> 
		 <div><h2>$text2</h2> 
     <p>$text3</p> </div>
    </div>
		  <a href=\"$buttonurl\">$buttontext</a> 
   </div>   
";
}
add_shortcode('rtvaxi_icons3a','rtvaxi_icons3a'); 
  

/******************
 * Icons4 [rtvaxi_icons4] 
 *
 ******************/
function rtvaxi_icons4( $atts, $content = null ) {
	$atts = extract(shortcode_atts(array(
  'image' => '',
  'text1' => '',
  'text2' => '',
	'color' => '',
	'buttonurl' => '',
	'buttontext' => '',
	),$atts));

	return "
  <div class=\"icons4\">
    <div class=\"img-wrapper $color\">
      <img src=\"$image\" alt=\"$text1\">
    </div>
    <h3>$text1</h3> 
		<p>$text2</p> 
		<a href=\"$buttonurl\"><span>$buttontext</span><i class=\"fas fa-angle-right\"></i></a> 
  </div>   
";
}
add_shortcode('rtvaxi_icons4','rtvaxi_icons4'); 
 
 
 
 
/******************
 * Icons4a [rtvaxi_icons4a] 
 *
 ******************/
function rtvaxi_icons4a( $atts, $content = null ) {
	$atts = extract(shortcode_atts(array(
  'image' => '',
  'text1' => '',
  'text2' => '',
	'text3' => '',
	'color' => '',
	'phonenumber' => '',
	'buttonurl' => '',
	'buttontext' => '',
	),$atts));

	return "
  <div class=\"icons4\">
    <div class=\"img-wrapper $color\">
      <img src=\"$image\" alt=\"$text1\">
    </div>
    <h3>$text1</h3> 
		<h4><a href=\"tel:$phonenumber\">$text3</a></h4> 
		<p>$text2</p> 
		<a href=\"$buttonurl\">$buttontext<i class=\"fas fa-angle-right\"></i></a> 
  </div>   
";
}
add_shortcode('rtvaxi_icons4a','rtvaxi_icons4a'); 
 
 
 
 /******************
 * faq2 [rtvaxi_faq2] 
 *
 ******************/
function rtvaxi_faq2( $atts, $content = null ) {
	$atts = extract(shortcode_atts(array(
  'text1' => '',
  'text2' => '',
	),$atts));

	return "
  <div class=\"faq2\">
    <h3>$text1</h3> 
		<p>$text2</p> 
	</div>   
";
}
add_shortcode('rtvaxi_faq2','rtvaxi_faq2'); 
 
 

 /******************
 * Pricebox [rtvaxi_pricebox]
 *
 ******************/
function rtvaxi_pricebox( $atts, $content = null ) {
	$atts = extract(shortcode_atts(array(
  'image' => '',
  'title' => '',
  'subtitle' => '',
	'price' => '',
	'subtitle2' => '',
	'text3a' => '',
	'text3b' => '',
	'text3c' => '',
	'text3d' => '',
	'text3e' => '',
	'text3f' => '',
	'text3g' => '',
	'text3h' => '',
	'text3i' => '',
	'text3j' => '',	
	'buttontext' => '',	
	'buttonurl' => '',	
	'show' => '',	
	'border' => '',	
	),$atts));

	return "
  <div class=\"pricebox\">
    <div>
      <img src=\"$image\" alt=\"\">
    </div>
    <div class=\"pricebox-border $border\">
    </div>		
    <div class=\"text-wrapper\">
      <h3>$title</h3> 
      <h6>$subtitle</h6>
			<h4>$price</h4> 
			<h5>$subtitle2</h5> 
			<div class=\"pricebox-border2\">
      </div>	
			<ul class=\"pricebox-list $show\">
			  <li><i class=\"fas fa-circle\"></i><span>$text3a</span></li>
			  <li><i class=\"fas fa-circle\"></i><span>$text3b</span></li>
			  <li><i class=\"fas fa-circle\"></i><span>$text3c</span></li>
			  <li><i class=\"fas fa-circle\"></i><span>$text3d</span></li>
			  <li><i class=\"fas fa-circle\"></i><span>$text3e</span></li>
			  <li><i class=\"fas fa-circle\"></i><span>$text3f</span></li>		
			  <li><i class=\"fas fa-circle\"></i><span>$text3g</span></li>
			  <li><i class=\"fas fa-circle\"></i><span>$text3h</span></li>
			  <li><i class=\"fas fa-circle\"></i><span>$text3i</span></li>			
				<li><i class=\"fas fa-circle\"></i><span>$text3j</span></li>					
			</ul>
    	<a class=\"custom-button1\" href=\"$buttonurl\">$buttontext </a> 
		</div>
   </div>   
";
}
add_shortcode('rtvaxi_pricebox','rtvaxi_pricebox'); 
 
 
 
 /******************
 * Servicebox [rtvaxi_servicebox]
 *
 ******************/
function rtvaxi_servicebox( $atts, $content = null ) {
	$atts = extract(shortcode_atts(array(
  'image' => '',
  'title' => '',
	'icon' => '',
  'subtitle' => '',
	'price' => '',
	'subtitle2' => '',
	'text3a' => '',
	'text3b' => '',
	'text3c' => '',
	'text3d' => '',
	'text3e' => '',
	'text3f' => '',
	'text3g' => '',
	'text3h' => '',
	'text3i' => '',
	'text3j' => '',	
	'buttontext' => '',	
	'buttonurl' => '',	
	'show' => '',	
	'border' => '',	
	),$atts));

	return "
  <div class=\"servicebox\">
    <div>
      <a class=\"serviceboximg\" href=\"$buttonurl\"><img src=\"$image\" alt=\"\"></a>
    </div>
    <div class=\"servicebox-title\">
       <h3><i class=\"$icon\"></i> $title</h3> 
		</div>		
    <div class=\"text-wrapper\">
			<ul class=\"servicebox-list $show\">
			  <li><i class=\"fas fa-check\"></i><span>$text3a</span></li>
			  <li><i class=\"fas fa-check\"></i><span>$text3b</span></li>
			  <li><i class=\"fas fa-check\"></i><span>$text3c</span></li>
			  <li><i class=\"fas fa-check\"></i><span>$text3d</span></li>
			  <li><i class=\"fas fa-check\"></i><span>$text3e</span></li>
			  <li><i class=\"fas fa-check\"></i><span>$text3f</span></li>		
			  <li><i class=\"fas fa-check\"></i><span>$text3g</span></li>
			  <li><i class=\"fas fa-check\"></i><span>$text3h</span></li>
			  <li><i class=\"fas fa-check\"></i><span>$text3i</span></li>			
				<li><i class=\"fas fa-check\"></i><span>$text3j</span></li>					
			</ul>
    	<a class=\"serviceboxbutton\" href=\"$buttonurl\">$buttontext <i class=\"fa fa-chevron-right\"></i></a> 
		</div>
   </div>   
";
}
add_shortcode('rtvaxi_servicebox','rtvaxi_servicebox'); 
 
 
 
 
 /******************
 * Servicebox2 [rtvaxi_servicebox2]
 *
 ******************/
function rtvaxi_servicebox2( $atts, $content = null ) {
	$atts = extract(shortcode_atts(array(
  'image' => '',
  'title' => '',
	'icon' => '',
  'subtitle' => '',
	'price' => '',
	'subtitle2' => '',
	'text3a' => '',
	'text3b' => '',
	'text3c' => '',
	'text3d' => '',
	'text3e' => '',
	'text3f' => '',
	'text3g' => '',
	'text3h' => '',
	'text3i' => '',
	'text3j' => '',	
	'title2' => '',
	'title3' => '',
	'icon2' => '',
	'show' => '',
	'phonenumber' => '',
	),$atts));

	return "
  <div class=\"servicebox servicebox2\">
    <div>
      <img src=\"$image\" alt=\"\">
    </div>
    <div class=\"servicebox-title\">
      <h3><i class=\"$icon\"></i> $title</h3> 
		</div>		
    <div class=\"text-wrapper\">
			<ul class=\"servicebox-list $show\">
			  <li><i class=\"fas fa-check\"></i><span>$text3a</span></li>
			  <li><i class=\"fas fa-check\"></i><span>$text3b</span></li>
			  <li><i class=\"fas fa-check\"></i><span>$text3c</span></li>
			  <li><i class=\"fas fa-check\"></i><span>$text3d</span></li>
			  <li><i class=\"fas fa-check\"></i><span>$text3e</span></li>
			  <li><i class=\"fas fa-check\"></i><span>$text3f</span></li>		
			  <li><i class=\"fas fa-check\"></i><span>$text3g</span></li>
			  <li><i class=\"fas fa-check\"></i><span>$text3h</span></li>
			  <li><i class=\"fas fa-check\"></i><span>$text3i</span></li>			
				<li><i class=\"fas fa-check\"></i><span>$text3j</span></li>					
			</ul>
    	<h4>$title2</h4> 
			<h5><a href=\"tel:$phonenumber\"><i class=\"$icon2\"></i> $title3</a></h5> 
		</div>
   </div>   
";
}
add_shortcode('rtvaxi_servicebox2','rtvaxi_servicebox2'); 
 
 
 
 
  
 /******************
 * Teambox [rtvaxi_teambox]
 *
 ******************/
function rtvaxi_teambox( $atts, $content = null ) {
	$atts = extract(shortcode_atts(array(
  'image' => '',
  'title' => '',
	'title2' => '',
  'text' => '',
	'teamurl' => '',
	'text3a' => '',
	'text3b' => '',
	'text3c' => '',
	'text3d' => '',
	'url1' => '',
	'url2' => '',
	'url3' => '',
	'url4' => '',
	'show' => ''
	),$atts));

	return "
  <div class=\"teambox\">
    <div class=\"teambox-imagewrapper\">
      <a href=\"$teamurl\"><img src=\"$image\" alt=\"$title\"></a>
    </div>
    <div class=\"teambox-title\">
      <h3><a href=\"$teamurl\">$title</a></h3>
		</div>
    <div class=\"text-wrapper\">
			<h4>$title2</h4> 
			<p>$text</p> 
			<ul class=\"teambox-list $show\">
			  <li><a href=\"$url1\"> <i class=\"$text3a\"></i></a> </li>
			  <li><a href=\"$url2\"> <i class=\"$text3b\"></i></a> </li>
			  <li><a href=\"$url3\"> <i class=\"$text3c\"></i></a> </li>
			  <li><a href=\"$url4\"> <i class=\"$text3d\"></i></a> </li>		
			</ul>
		</div>
   </div>   
";
}
add_shortcode('rtvaxi_teambox','rtvaxi_teambox'); 
 
 
 
 /******************
 * Working time [rtvaxi_workingtime]
 *
 ******************/
function rtvaxi_workingtime( $atts, $content = null ) {
	$atts = extract(shortcode_atts(array(
  'text1' => '',
  'text2' => '',
  'text3' => '',
  'text4' => '',
  'text2a' => '',
  'text3a' => '',
  'text4a' => '',
	),$atts));

	return "
  <div class=\"workingtime\">
    <h3><i class=\"far fa-clock\"></i> $text1</h3> 
    <ul>
      <li>$text2<span>$text2a</span></li> 
      <li>$text3<span>$text3a</span></li>
      <li>$text4<span>$text4a</span></li>
    </ul>
  </div>   
";
}
add_shortcode('rtvaxi_workingtime','rtvaxi_workingtime');


 
 /******************
 * Adress box [rtvaxi_adressbox]
 *
 ******************/
function rtvaxi_adressbox( $atts, $content = null ) {
	$atts = extract(shortcode_atts(array(
  'text1' => '',
  'text2' => '',
  'text3' => '',
  'text4' => '',
 
	),$atts));

	return "
  <div class=\"adressbox\">
    <ul>
      <li><i class=\"fas fa-map-marker-alt\"></i> $text1</li> 
			<li> $text2</li> 
      <li><i class=\"fa fa-clock\"></i>$text3</li>
      <li><i class=\"fa fa-phone\"></i>$text4</li>
    </ul>
  </div>   
";
}
add_shortcode('rtvaxi_adressbox','rtvaxi_adressbox');
 
 
 
 
 /******************
 * Text box1 [rtvaxi_textbox1]
 *
 ******************/
function rtvaxi_textbox1( $atts, $content = null ) {
	$atts = extract(shortcode_atts(array(
  'title' => '',
	'text1' => '',
  'text2' => '',
  'text3' => '',
  'text4' => '',
	'text5' => '',
	'text6' => '', 
	'buttonurl' => '',
  'buttontext' => '' 	
	),$atts));

	return "
  <div class=\"textbox1\">
    <i class=\"fa fa-cogs\"></i>
		<h3>$title</h3> 
		<div class=\"textbox1-list\">
		<ul>
      <li>$text1</li> 
			<li>$text2</li> 
    </ul>
		<ul>
      <li>$text3</li>
      <li>$text4</li>
    </ul>
		<ul>
			<li>$text5</li>
      <li>$text6</li>
		</ul>
		</div>
		<a href=\"$buttonurl\">$buttontext <i class=\"fa fa-chevron-right\"></i></a> 
  </div>   
";
}
add_shortcode('rtvaxi_textbox1','rtvaxi_textbox1');
  
 
 
 /******************
 * Text box2 [rtvaxi_textbox2]
 *
 ******************/
function rtvaxi_textbox2( $atts, $content = null ) {
	$atts = extract(shortcode_atts(array(
  'title' => '',
	'text' => '',
  'icon' => '',
	'buttonurl' => '',
  'buttontext' => '' 	
	),$atts));

	return "
  <div class=\"textbox2\">
    <i class=\"$icon\"></i>
		<h3>$title</h3> 
		<p>$text</p> 
		<a href=\"$buttonurl\">$buttontext <i class=\"fa fa-chevron-right\"></i></a> 
  </div>   
";
}
add_shortcode('rtvaxi_textbox2','rtvaxi_textbox2');
  

/******************
 * Custom button 2 [rtvaxi_custombutton2]
 *
 ******************/
function rtvaxi_custombutton2( $atts, $content = null ) {
	$atts = extract(shortcode_atts(array(
  'buttontext' => '',
  'buttonurl' => '',
  'external' => '',
  'nofollow' => '',
	),$atts));

	return "
  <a class=\"custom-button2\" href=\"$buttonurl\" target=\"$external\" rel=\"$nofollow\">$buttontext</a> 
";
}
add_shortcode('rtvaxi_custombutton2','rtvaxi_custombutton2');


/******************
 * CTA phone [rtvaxi_ctaphone]
 *
 ******************/
function rtvaxi_ctaphone( $atts, $content = null ) {
	$atts = extract(shortcode_atts(array(
  'text1' => '',
  'text1size' => '',
  'text2' => '',
	'phonenumber' => '',
	),$atts));

	return "
  <div class=\"ctaphone\">
		<h3 class=\"$text1size\">$text1</h3> 
		<h4><a href=\"tel:$phonenumber\"><i class=\"fa fa-phone\"></i> $text2</a></h4> 
  </div> ";
}
add_shortcode('rtvaxi_ctaphone','rtvaxi_ctaphone');



/******************
 * single icon
 [rtvaxi_singleicon icon=""]
 *
 ******************/
function rtvaxi_singleicon( $atts, $content = null ) {
	$atts = extract(shortcode_atts(array(
  'icon' => '',
	),$atts));

	return "
  <div class=\"singleicon\">
    <i class=\"$icon\"></i>   
  </div>  
";
}
add_shortcode('rtvaxi_singleicon','rtvaxi_singleicon'); 
 
 
/******************
 * Video button [rtvaxi_videobutton]
 *
 ******************/
function rtvaxi_videobutton( $atts, $content = null ) {
	$atts = extract(shortcode_atts(array(
  'video' => '',
	),$atts));

	return "
  <div class=\"videobutton\">
    <a href=\"$video\" class=\"yt-video\">
      <i class=\"fas fa-play\"></i>   
    </a>     
  </div>           
";
}
add_shortcode('rtvaxi_videobutton','rtvaxi_videobutton'); 
 
 
/******************
 * Custom button 1 [rtvaxi_custombutton1]
 *
 ******************/
function rtvaxi_custombutton1( $atts, $content = null ) {
	$atts = extract(shortcode_atts(array(
  'buttontext' => '',
  'buttonurl' => '',
  'external' => '',
  'nofollow' => '',
	),$atts));

	return "
  <a class=\"custom-button1\" href=\"$buttonurl\" target=\"$external\" rel=\"$nofollow\">$buttontext</a> 
";
}
add_shortcode('rtvaxi_custombutton1','rtvaxi_custombutton1');


/******************
 * Custom button 3 popup [rtvaxi_custombutton3]
 *
 ******************/
function rtvaxi_custombutton3( $atts, $content = null ) {
	$atts = extract(shortcode_atts(array(
  'buttontext' => '',
  'buttonurl' => '',

	),$atts));

	return "
  <a class=\"custom-button1 custom-button3\" href=\"$buttonurl\">$buttontext</a> 
";
}
add_shortcode('rtvaxi_custombutton3','rtvaxi_custombutton3');



/******************
 * social icon
 [rtvaxi_socicon icon="" url=""]
 *
 ******************/
function rtvaxi_socicon( $atts, $content = null ) {
	$atts = extract(shortcode_atts(array(
  'icon' => 'fab fa-instagram',
  'url' => '',
	),$atts));

	return "
   <a class=\"socicon\" href=\"$url\"> <i class=\"$icon\"> </i> </a>
";
}
add_shortcode('rtvaxi_socicon','rtvaxi_socicon');


/******************
 * social icon top
 [rtvaxi_socicontop icon="" url=""]
 *
 ******************/
function rtvaxi_socicontop( $atts, $content = null ) {
	$atts = extract(shortcode_atts(array(
  'icon' => 'fab fa-instagram',
  'url' => '',
	),$atts));

	return "
   <a class=\"socicontop\" href=\"$url\"> <i class=\"$icon\"> </i> </a>
";
}
add_shortcode('rtvaxi_socicontop','rtvaxi_socicontop');