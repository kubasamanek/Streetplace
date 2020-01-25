<?php
namespace EdgeCore\CPT\Shortcodes\SplitScrollingSection;

use EdgeCore\Lib;

class SplitScrollingSection implements Lib\ShortcodeInterface {
	private $base;
	
	function __construct() {
		$this->base = 'edgtf_split_scrolling_section';
		add_action('vc_before_init', array($this, 'vcMap'));
	}
	
	public function getBase() {
		return $this->base;
	}
	
	public function vcMap() {
		vc_map( array(
			'name' => esc_html__('Edge Split Scrolling Section', 'edgtf-core'),
			'base' => $this->base,
			'icon' => 'icon-wpb-split-scrolling-section extended-custom-icon',
			'category' => esc_html__('by EDGE', 'edgtf-core'),
			'as_parent'	=> array('only' => 'edgtf_split_scrolling_section_left_panel, edgtf_split_scrolling_section_right_panel'),
			'js_view' => 'VcColumnView'
		));
	}

	public function render($atts, $content = null) {
		$args = array();
		
		$params = shortcode_atts($args, $atts);
		extract($params);

		$params['content'] = $content;

		$html = edgtf_core_get_shortcode_module_template_part('templates/split-scrolling-section-template', 'split-scrolling-section', '', $params);

		return $html;
	}
}