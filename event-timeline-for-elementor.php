<?php
/**
 * Plugin Name: Event Timeline For Elementor
 * Description: You can make event timeline section use this plugin completely free.
 * Plugin URI:  https://github.com/habibur899/event-timeline-for-elementor
 * Version:     1.0.0
 * Author:      Habibur Rahaman
 * Author URI:  https://github.com/habibur899
 * Text Domain: event-timeline-for-elementor
 *
 * Elementor tested up to: 3.8.0
 * Elementor Pro tested up to: 3.8.0
 */

use Event_Timeline_For_Elementor_Addon\Event_Timeline_For_Elementor;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function event_timeline_for_elementor_addon() {

	// Load plugin file
	require_once( __DIR__ . '/includes/plugin.php' );
	// Run the plugin
	Event_Timeline_For_Elementor::instance();

}

add_action( 'plugins_loaded', 'event_timeline_for_elementor_addon' );
