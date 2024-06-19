<?php
add_action('acf/init', 'acf_add_local_field_group1');
function acf_add_local_field_group1() {



      acf_add_local_field_group(array(
        'key' => 'group_2',
        'title' => 'Group2',
        'fields' => array (
            array (
                'key' => 'field_2',
                'label' => __('Choose background image for page title', 'vaxi'), 
                'name' => 'bg1',
                'type' => 'image',
                'instructions' => __('Choose background image for page title', 'vaxi'),
                'required' => 0,
                'default_value' => array (
                ),
            )
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'page',
                ),
            ),
        ),
    ));

	        acf_add_local_field_group(array(
        'key' => 'group_1a',
        'title' => 'My Group',
        'fields' => array (
            array (
                'key' => 'field_1a',
                'label' => __('Add/remove sidebar', 'vaxi'),
                'name' => 'sidebars',
                'type' => 'select',
                'instructions' => __('Add/remove sidebar', 'vaxi'),
                'required' => 0,
                'choices' => array (
                  'add' => __('add', 'vaxi'),
                  'remove' => __('remove', 'vaxi')
                ),
                'default_value' => array (
                ),
                'allow_null' => 1,
                'multiple' => 0,
            )
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'post',
                ),
            ),
        ),
    ));
		
			acf_add_local_field_group(array(
        'key' => 'group_text1',
        'title' => 'My Group',
        'fields' => array (
            array (
                'key' => 'field_text1',
                'label' => __('Subtitle', 'vaxi'),
                'name' => 'field_text1',
                'type' => 'text',
                'instructions' => __('Subtitle', 'vaxi'),
                'required' => 0,
                'default_value' => array (
                ),

            )
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'rtvaxi-team',
                ),
            ),
        ),
    ));		
		
		acf_add_local_field_group(array(
        'key' => 'group_text2',
        'title' => 'My Group',
        'fields' => array (
            array (
                'key' => 'field_text2',
                'label' => __('Text', 'vaxi'),
                'name' => 'field_text2',
                'type' => 'text',
                'instructions' => __('Text', 'vaxi'),
                'required' => 0,
                'default_value' => array (
                ),

            )
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'rtvaxi-team',
                ),
            ),
        ),
    ));			
		
		acf_add_local_field_group(array(
        'key' => 'group_1b',
        'title' => 'My Group',
        'fields' => array (
            array (
                'key' => 'field_1b',
                'label' => __('Team icons', 'vaxi'),
                'name' => 'sidebars',
                'type' => 'textarea',
                'instructions' => __('Add Font Awesome code for icons from this list: https://fontawesome.com/v4.7/icons/ ', 'vaxi'),
                'required' => 0,
                'default_value' => array (
                ),

            )
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'rtvaxi-team',
                ),
            ),
        ),
    ));	
			
		acf_add_local_field_group(array(
        'key' => 'group_1c',
        'title' => 'My Group',
        'fields' => array (
            array (
                'key' => 'field_1c',
                'label' => __('Team member inner page text', 'vaxi'),
                'name' => 'field_1c',
                'type' => 'textarea',
                'instructions' => __('Text for inner page team member', 'vaxi'),
                'required' => 0,
                'default_value' => array (
                ),

            )
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'rtvaxi-team',
                ),
            ),
        ),
    ));	


				    acf_add_local_field_group(array(
        'key' => 'group_4',
        'title' => 'Group4',
        'fields' => array (
            array (
                'key' => 'field_4',
                'label' => __('Testimonials URL', 'vaxi'),
                'name' => 'testimonials-url',
                'type' => 'text',
                'instructions' => __('Testimonials URL', 'vaxi'),
                'required' => 0,
                'default_value' => array (
                ),
            )
        ),
        'location' => array (
          array (
            array (
                'param' => 'post_type',
                'operator' => '==', 
                'value' => 'rtvaxi-test1',
            ),
          ),
          array (
            array (
                'param' => 'post_type',
                'operator' => '==', 
                'value' => 'rtvaxi-test2',
            ),
          ),
        ),
    ));

		
}