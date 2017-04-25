<?php
/**
* @wordpress-plugin
* Plugin Name: WP Sponsored Hub Plugin
* Plugin URI: http://github.com/shortlist-digital/wp-sponsored-hub-plugin
* Description: A plugin to create Sponsored Hubs
* Version: 1.0.0
* Author: Shortlist Studio
* Author URI: http://shortlist.studio
* License: MIT
*/

require_once __DIR__ . '/../../../../vendor/autoload.php';

use WpSponsoredHubPlugin\Hooks\BasicDetailsAcf;
use WpSponsoredHubPlugin\Hooks\SocialMediaAcf;
use WpSponsoredHubPlugin\Hooks\RelatedContentAcf;
use WpSponsoredHubPlugin\Hooks\HtmlOverridesAcf;
use WpSponsoredHubPlugin\CustomRoles\Roles;
use WpSponsoredHubPlugin\CustomPostTypes\SponsoredHub;
use WpSponsoredHubPlugin\CustomFields\Header;
use WpSponsoredHubPlugin\CustomFields\SponsorDetails;
use WpSponsoredHubPlugin\CustomFields\Widgets;

class WpSponsoredHubPlugin
{
	public function __construct()
	{
		$this->add_hooks();
		$this->add_roles_and_capabilities();
		$this->add_post_type();
		$this->add_custom_fields();
	}

	private function add_hooks() {
		(new BasicDetailsAcf)->init();
		(new SocialMediaAcf)->init();
		(new RelatedContentAcf)->init();
		(new HtmlOverridesAcf)->init();
	}

	private function add_roles_and_capabilities() {
		(new Roles)->init();
	}

	private function add_post_type() {
		(new SponsoredHub)->init();
	}

	private function add_custom_fields() {
		(new Header)->init();
		(new SponsorDetails)->init();
		(new Widgets)->init();
	}
}

new WpSponsoredHubPlugin();
