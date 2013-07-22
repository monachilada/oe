<?
/**
 *  Install Add-ons
 *  
 *  The following code will include all 4 premium Add-Ons in your theme.
 *  Please do not attempt to include a file which does not exist. This will produce an error.
 *  
 *  All fields must be included during the 'acf/register_fields' action.
 *  Other types of Add-ons (like the options page) can be included outside of this action.
 *  
 *  The following code assumes you have a folder 'add-ons' inside your theme.
 *
 *  IMPORTANT
 *  Add-ons may be included in a premium theme as outlined in the terms and conditions.
 *  However, they are NOT to be included in a premium / free plugin.
 *  For more information, please read http://www.advancedcustomfields.com/terms-conditions/
 */ 

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
