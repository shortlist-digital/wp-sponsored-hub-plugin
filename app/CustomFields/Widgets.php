<?php
namespace WpSponsoredHubPlugin\CustomFields;

class Widgets {

	public function init() {

		add_action('agreable_app_theme_init', function() {

			$key = 'sponsored_hub';

			include_once get_template_directory() . "/custom-fields/WidgetLoader.php";

			$widgets = \WidgetLoader::findByUsage('sponsored-hub');

			register_field_group(array (
				'key' => $key . '_widgets_group',
				'title' => 'Body',
				'fields' => array (
					array (
						'key' => $key . '_widgets',
						'label' => 'Content Widgets',
						'name' => 'widgets',
						'type' => 'flexible_content',
						'instructions' => 'The body of the content is built up with widgets',
						'required' => 1,
						'button_label' => 'Add Widget',
						'min' => 1,
						'layouts' => $widgets,
					),
				),
				'location' => array (
					array (
						array (
							'param' => 'post_type',
							'operator' => '==',
							'value' => 'sponsored_hub',
						),
					),
				),
				'menu_order' => 2,
				'hide_on_screen' => array (
					0 => 'the_content',
					1 => 'discussion',
					2 => 'comments',
				)
			));
		});
	}
}
