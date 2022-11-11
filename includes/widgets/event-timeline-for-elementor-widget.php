<?php

use Elementor\Controls_Manager;
use Elementor\Widget_Base;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Event Timeline For Elementor Widget.
 *
 * Elementor widget that inserts an animated headline content into the page, from any given text.
 *
 * @since 1.0.0
 */
class Event_Timeline_For_Elementor_Widget extends Widget_Base {

	/**
	 * Get widget name.
	 *
	 * Retrieve Event Timeline For Elementor widget name.
	 *
	 * @return string Widget name.
	 * @since 1.0.0
	 * @access public
	 */
	public function get_name() {
		return 'event-timeline-for-elementor';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve Event Timeline For Elementor widget title.
	 *
	 * @return string Widget title.
	 * @since 1.0.0
	 * @access public
	 */
	public function get_title() {
		return esc_html__( 'Event Timeline For Elementor', 'portfolio-for-elementor' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve Event Timeline For Elementor widget icon.
	 *
	 * @return string Widget icon.
	 * @since 1.0.0
	 * @access public
	 */
	public function get_icon() {
		return 'eicon-time-line';
	}

	/**
	 * Get custom help URL.
	 *
	 * Retrieve a URL where the user can get more information about the widget.
	 *
	 * @return string Widget help URL.
	 * @since 1.0.0
	 * @access public
	 */
	public function get_custom_help_url() {
		return 'https://developers.elementor.com/docs/widgets/';
	}


	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the Event Timeline For Elementor widget belongs to.
	 *
	 * @return array Widget categories.
	 * @since 1.0.0
	 * @access public
	 */
	public function get_categories() {
		return [ 'event-timeline-for-elementor-category' ];
	}

	/**
	 * Get widget keywords.
	 *
	 * Retrieve the list of keywords the Event Timeline For Elementor widget belongs to.
	 *
	 * @return array Widget keywords.
	 * @since 1.0.0
	 * @access public
	 */
	public function get_keywords() {
		return [
			'event',
			'timeline',
			'timeline for elementor',
			'event timeline for elementor'
		];
	}

	/**
	 * Category show
	 * */


	/**
	 * Register Event Timeline For Elementor widget controls.
	 *
	 * Add input fields to allow the user to customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function register_controls() {

		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__( 'Content', 'portfolio-for-elementor' ),
				'tab'   => Controls_Manager::TAB_CONTENT,
			]
		);


		$this->end_controls_section();
	}

	/**
	 * Render Event Timeline For Elementor widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function render() {

		$settings = $this->get_settings_for_display();

	}


}