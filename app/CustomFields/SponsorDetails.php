<?php
namespace WpSponsoredHubPlugin\CustomFields;

class SponsorDetails {

	public function init() {

		add_action('agreable_app_theme_init', function() {

			$key = 'sponsor_details';

			register_field_group(array (
				'key' => $key,
				'title' => 'Sponsor Details',
				'fields' => array (
					array (
						'key' => $key . '_basic_details_tab',
						'label' => 'Basic Details',
						'type' => 'tab',
						'placement' => 'left'
					),
					array (
						'key' => $key . '_logo_button_destination',
						'label' => 'Logo button destination',
						'name' => $key . '_logo_button_destination',
						'type' => 'url',
						'instructions' => 'What URL do you want the logo to go to? (http://)',
						'required' => 1,
						'wrapper' => array (
							'width' => '50%'
						),
						'placeholder' => 'http://shortlist.com'
					),
					array (
						'key' => $key . '_sponsored_text',
						'label' => 'Sponsored Text',
						'name' => $key . '_sponsored_text',
						'type' => 'select',
						'instructions' => 'Select one of the three sponsored content labels',
						'required' => 1,
						'wrapper' => array (
							'width' => '50%'
						),
						'choices' => array (
							'Sponsored By' => 'Sponsored By',
							'Brought To You By' => 'Brought To You By',
							'In Association With' => 'In Association With'
						),
						'default_value' => array (
							'sponsored_by' => 'Sponsored By'
						)
					),
					array (
						'key' => $key . '_advanced_details_tab',
						'label' => 'Advanced Details',
						'type' => 'tab',
						'placement' => 'left'
					),
					array (
						'key' => $key . '_brand_image',
						'label' => 'Brand Image',
						'name' => $key . '_brand_image',
						'type' => 'image',
						'instructions' => 'Add a brand logo',
						'return_format' => 'array',
						'preview_size' => 'thumbnail',
						'library' => 'all',
						'wrapper' => array (
							'width' => '50'
						)
					),
					array (
						'key' => $key . '_brand_name',
						'label' => 'Brand Name',
						'name' => $key . '_brand_name',
						'type' => 'text',
						'instructions' => 'Add brand name',
						'width' => '50',
						'wrapper' => array (
							'width' => '50'
						)
					),
					array (
						'key' => $key . '_custom_options',
						'label' => 'Custom options',
						'name' => $key . '_custom_options',
						'type' => 'checkbox',
						'choices' => array (
							'show_social' => 'Show social links',
							'invert_logo' => 'Invert logo'
						),
						'default_value' => array (
							'show_social' => 'show_social'
						),
						'wrapper' => array (
							'width' => 50
						),
						'layout' => 'vertical'
					),
					array (
						'key' => $key . '_background_colour',
						'label' => 'Background Colour',
						'name' => $key . '_background_colour',
						'type' => 'color_picker',
						'wrapper' => array (
							'width' => 33.333
						)
					),
					array (
						'key' => $key . '_text_colour',
						'label' => 'Text Colour',
						'name' => $key . '_text_colour',
						'type' => 'color_picker',
						'wrapper' => array (
							'width' => 33.333
						)
					),
					array (
						'key' => $key . '_social_icons_background_colour',
						'label' => 'Social Icons Colour',
						'name' => $key . '_social_icons_background_colour',
						'type' => 'color_picker',
						'wrapper' => array (
							'width' => 33.333
						)
					)
				),
				'location' => array (
					array (
						array (
							'param' => 'post_type',
							'operator' => '==',
							'value' => 'sponsored_hub'
						)
					)
				),
				'menu_order' => 2,
				'hide_on_screen' => array (
					0 => 'the_content',
					1 => 'discussion',
					2 => 'comments'
				)
			));
		});
	}
}
