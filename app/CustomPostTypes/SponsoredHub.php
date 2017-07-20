<?php

namespace WpSponsoredHubPlugin\CustomPostTypes;

class SponsoredHub {

	public function init() {

		add_action('init', function() {

			$labels = array(
				'name'                => _x('Sponsored Hubs', 'Post Type General Name', 'text_domain'),
				'singular_name'       => _x('Sponsored Hub', 'Post Type Singular Name', 'text_domain'),
				'menu_name'           => __('Sponsored Hub', 'text_domain'),
				'parent_item_colon'   => __('Parent Item:', 'text_domain'),
				'all_items'           => __('All Sponsored Hubs', 'text_domain'),
				'view_item'           => __('View Sponsored Hub', 'text_domain'),
				'add_new_item'        => __('Add New Sponsored Hub', 'text_domain'),
				'add_new'             => __('Add New', 'text_domain'),
				'edit_item'           => __('Edit Sponsored Hub', 'text_domain'),
				'update_item'         => __('Update Sponsored Hub', 'text_domain'),
				'search_items'        => __('Search Sponsored Hubs', 'text_domain'),
				'not_found'           => __('Not found', 'text_domain'),
				'not_found_in_trash'  => __('Not found in Trash', 'text_domain'),
			);

			$args = array(
				'label'               => __('sponsored hub', 'text_domain'),
				'description'         => __('Beautiful editorial partnership hubs', 'text_domain'),
				'labels'              => $labels,
				'supports'            => array('title','thumbnail','revisions','author'),
				'taxonomies'          => array('category','post_tag'),
				'hierarchical'        => false,
				'public'              => true,
				'show_ui'             => true,
				'show_in_menu'        => true,
				'show_in_nav_menus'   => true,
				'show_in_admin_bar'   => true,
				'menu_position'       => 10,
				'menu_icon'           => 'dashicons-admin-site',
				'can_export'          => true,
				'has_archive'         => true,
				'exclude_from_search' => false,
				'publicly_queryable'  => true,
				'capability_type' => 'sponsored_hub',
				'capabilities' => array (
					'publish_posts' 		=> 'publish_sponsored_hubs',
					'edit_posts' 			=> 'edit_sponsored_hubs',
					'edit_others_posts' 	=> 'edit_others_sponsored_hubs',
					'delete_posts' 			=> 'delete_sponsored_hubs',
					'delete_private_posts' 	=> 'delete_private_lsponsored_ongforms',
					'delete_others_posts'	=> 'delete_others_sponsored_hubs',
					'read_private_posts' 	=> 'read_private_sponsored_hubs',
					'edit_post' 			=> 'edit_sponsored_hub',
					'delete_post' 			=> 'delete_sponsored_hub',
					'read_post' 			=> 'read_sponsored_hub',
				),
				'map_meta_cap' => true,
				'rewrite' => true,
				'query_var' => true,
				'show_in_rest' => true,
			);

			register_post_type('sponsored_hub', $args);
		}
		,0);
	}
}
