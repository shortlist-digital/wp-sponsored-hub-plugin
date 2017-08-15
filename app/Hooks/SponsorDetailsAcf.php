<?php namespace WpSponsoredHubPlugin\Hooks;

class SponsorDetailsAcf {

  public function init() {
    \add_filter('wp_sponsor_details_acf', array($this, 'sponsor_details_location_acf'), 10);
  }

  public function sponsor_details_location_acf($acf_definition) {
    $acf_definition['location'][] = [
      [
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'sponsored_hub',
      ]
    ];

    return $acf_definition;
  }
}
