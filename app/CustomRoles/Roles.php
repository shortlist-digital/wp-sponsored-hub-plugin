<?php

namespace WpSponsoredHubPlugin\CustomRoles;

class Roles {

	public function init() {

		add_action('admin_init', function() {

			if (!get_role('sponsored_hubs_editor')) {
				// Add sponsored hubs editor role
				add_role('sponsored_hubs_editor',
					'Sponsored Hubs Editor',
					array(
						'read' => true,
						'edit_posts' => true,
						'delete_posts' => true,
						'publish_posts' => true,
						'upload_files' => true,
					)
				);
			}
			// Add the roles you'd like to administer the custom post types
			$roles = array('sponsored_hubs_editor','administrator');
			// Loop through each role and assign capabilities
			foreach($roles as $the_role) {
				$role = get_role($the_role);
				$role->add_cap('read_sponsored_hub');
				$role->add_cap('read_private_sponsored_hubs');
				$role->add_cap('edit_sponsored_hub');
				$role->add_cap('edit_sponsored_hubs');
				$role->add_cap('edit_others_sponsored_hubs');
				$role->add_cap('edit_published_sponsored_hubs');
				$role->add_cap('publish_sponsored_hubs');
				$role->add_cap('delete_others_sponsored_hubs');
				$role->add_cap('delete_private_sponsored_hubs');
				$role->add_cap('delete_published_sponsored_hubs');
			}

			get_role($roles[0])->remove_cap('edit_posts');
		});
	}
}
