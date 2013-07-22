<?

/**
 *  Register Field Groups
 *
 *  The register_field_group function accepts 1 array which holds the relevant data to register a field group
 *  You may edit the array as you see fit. However, this may result in errors if the array is not compatible with ACF
 */

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_column-settings',
		'title' => 'Column settings',
		'fields' => array (
			array (
				'key' => 'field_51e65b42b92b9',
				'label' => 'Column width',
				'name' => 'column_width',
				'type' => 'radio',
				'instructions' => 'What fraction of the total width should this column occupy?',
				'required' => 1,
				'choices' => array (
					12 => '1/2',
					8 => '1/3',
					6 => '1/4',
					5 => '1/5',
					4 => '1/6',
				),
				'other_choice' => 1,
				'save_other_choice' => 0,
				'default_value' => 12,
				'layout' => 'horizontal',
			),
			array (
				'key' => 'field_51e65c7e74688',
				'label' => 'Column push',
				'name' => 'column_push',
				'type' => 'radio',
				'instructions' => 'What fraction of the entire width should this column be pushed from the immediately preceding column (or beginning of the column row).',
				'choices' => array (
					0 => 'None',
					1 => '1/24',
					2 => '1/12',
					3 => '1/8',
					4 => '1/6',
					6 => '1/4',
					8 => '1/3',
					12 => '1/2',
				),
				'other_choice' => 1,
				'save_other_choice' => 0,
				'default_value' => 0,
				'layout' => 'horizontal',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'page-column.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_hero-settings',
		'title' => 'Hero settings',
		'fields' => array (
			array (
				'key' => 'field_51e6a2af6d5ae',
				'label' => 'Image position',
				'name' => 'image_position',
				'type' => 'radio',
				'instructions' => 'Which side of the page do you want the hero image to display?',
				'choices' => array (
					'left' => 'Left',
					'right' => 'Right',
				),
				'other_choice' => 0,
				'save_other_choice' => 0,
				'default_value' => 'right',
				'layout' => 'horizontal',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'page-hero.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_page-settings',
		'title' => 'Page settings',
		'fields' => array (
			array (
				'key' => 'field_51e68aff21c3e',
				'label' => 'Hide title',
				'name' => 'hide_title',
				'type' => 'true_false',
				'instructions' => 'Should the title be shown for this section? Can be useful in combination with column page template.',
				'message' => 'Check this box to hide the title for this page.',
				'default_value' => 0,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_section-settings',
		'title' => 'Section settings',
		'fields' => array (
			array (
				'key' => 'field_51e6adf778fb8',
				'label' => 'Color scheme',
				'name' => 'color_scheme',
				'type' => 'radio',
				'instructions' => 'Choose which color scheme to use for this page. Dark means a dark background with light text. Light means a light background with dark text.',
				'choices' => array (
					'dark' => 'Dark background, light text',
					'light' => 'Light background, dark text',
				),
				'other_choice' => 0,
				'save_other_choice' => 0,
				'default_value' => 'light',
				'layout' => 'horizontal',
			),
			array (
				'key' => 'field_51e66262c8d40',
				'label' => 'Background type',
				'name' => 'bg_type',
				'type' => 'radio',
				'instructions' => 'Color',
				'choices' => array (
					'color' => 'Color',
					'image' => 'Image',
					'gradient' => 'Gradient',
				),
				'other_choice' => 0,
				'save_other_choice' => 0,
				'default_value' => 'color',
				'layout' => 'horizontal',
			),
			array (
				'key' => 'field_51e662ae987cf',
				'label' => 'Background color',
				'name' => 'bg_color',
				'type' => 'color_picker',
				'instructions' => 'The background color you would like to display behind this section.',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_51e66262c8d40',
							'operator' => '==',
							'value' => 'color',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '#ffffff',
			),
			array (
				'key' => 'field_51e662286b4c1',
				'label' => 'Background image',
				'name' => 'bg_image',
				'type' => 'image',
				'instructions' => 'The background image you would like to display for this section.',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_51e66262c8d40',
							'operator' => '==',
							'value' => 'image',
						),
					),
					'allorany' => 'all',
				),
				'save_format' => 'id',
				'preview_size' => 'thumbnail',
				'library' => 'uploadedTo',
			),
			array (
				'key' => 'field_51e6706ee13a5',
				'label' => 'Background image fixed',
				'name' => 'bg_image_fixed',
				'type' => 'radio',
				'instructions' => 'Would you like the background image to be fixed to the window, or to move together with the section as the page scrolls?',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_51e66262c8d40',
							'operator' => '==',
							'value' => 'image',
						),
					),
					'allorany' => 'all',
				),
				'choices' => array (
					'' => 'Move with the section',
					'fixed' => 'Fixed to the browser window',
				),
				'other_choice' => 0,
				'save_other_choice' => 0,
				'default_value' => '',
				'layout' => 'horizontal',
			),
			array (
				'key' => 'field_51e6632675b8a',
				'label' => 'Background gradient type',
				'name' => 'bg_gradient_type',
				'type' => 'radio',
				'instructions' => 'The type of gradient used for the background of this section.',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_51e66262c8d40',
							'operator' => '==',
							'value' => 'gradient',
						),
					),
					'allorany' => 'all',
				),
				'choices' => array (
					'left' => 'Left to Right',
					'top' => 'Top to Bottom',
					'radial' => 'Radial',
				),
				'other_choice' => 0,
				'save_other_choice' => 0,
				'default_value' => '',
				'layout' => 'horizontal',
			),
			array (
				'key' => 'field_51e662e675b88',
				'label' => 'Background gradient start',
				'name' => 'bg_gradient_start',
				'type' => 'color_picker',
				'instructions' => 'The starting color for the background gradient.',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_51e66262c8d40',
							'operator' => '==',
							'value' => 'gradient',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
			),
			array (
				'key' => 'field_51e6631075b89',
				'label' => 'Background gradient stop',
				'name' => 'bg_gradient_stop',
				'type' => 'color_picker',
				'instructions' => 'The stopping color for the background gradient.',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_51e66262c8d40',
							'operator' => '==',
							'value' => 'gradient',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
					'order_no' => 0,
					'group_no' => 0,
				),
				array (
					'param' => 'page_template',
					'operator' => '!=',
					'value' => 'page-column.php',
					'order_no' => 1,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
