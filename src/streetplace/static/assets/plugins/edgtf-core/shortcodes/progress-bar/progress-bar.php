<?php
namespace EdgeCore\CPT\Shortcodes\ProgressBar;

use EdgeCore\Lib;

class ProgressBar implements Lib\ShortcodeInterface
{
    private $base;

    function __construct() {
        $this->base = 'edgtf_progress_bar';
        add_action('vc_before_init', array($this, 'vcMap'));
    }

    public function getBase() {
        return $this->base;
    }

    public function vcMap() {
        if (function_exists('vc_map')) {
            vc_map(
                array(
                    'name' => esc_html__('Edge Progress Bar', 'edgtf-core'),
                    'base' => $this->base,
                    'icon' => 'icon-wpb-progress-bar extended-custom-icon',
                    'category' => esc_html__('by EDGE', 'edgtf-core'),
                    'allowed_container_element' => 'vc_row',
                    'params' => array(
                        array(
                            'type' => 'textfield',
                            'param_name' => 'custom_class',
                            'heading' => esc_html__('Custom CSS Class', 'edgtf-core'),
                            'description' => esc_html__('Style particular content element differently - add a class name and refer to it in custom CSS', 'edgtf-core')
                        ),
                        array(
                            'type' => 'textfield',
                            'param_name' => 'percent',
                            'heading' => esc_html__('Percentage', 'edgtf-core')
                        ),
                        array(
                            'type' => 'textfield',
                            'param_name' => 'title',
                            'heading' => esc_html__('Title', 'edgtf-core')
                        ),
                        array(
                            'type' => 'dropdown',
                            'param_name' => 'title_tag',
                            'heading' => esc_html__('Title Tag', 'edgtf-core'),
                            'value' => array_flip(hyperon_edgtf_get_title_tag(true, array('p' => 'p'))),
                            'save_always' => true,
                            'dependency' => array('element' => 'title', 'not_empty' => true)
                        ),
                        array(
                            'type' => 'colorpicker',
                            'param_name' => 'title_color',
                            'heading' => esc_html__('Title Color', 'edgtf-core'),
                            'dependency' => array('element' => 'title', 'not_empty' => true)
                        ),
                        array(
                            'type' => 'colorpicker',
                            'param_name' => 'color_active',
                            'heading' => esc_html__('Active Color', 'edgtf-core')
                        ),
                        array(
                            'type' => 'colorpicker',
                            'param_name' => 'color_inactive',
                            'heading' => esc_html__('Inactive Color', 'edgtf-core')
                        )
                    )
                )
            );
        }
    }

    public function render($atts, $content = null) {
        $args = array(
            'custom_class' => '',
            'percent' => '100',
            'title' => '',
            'title_tag' => 'h5',
            'title_color' => '',
            'color_active' => '',
            'color_inactive' => ''
        );
        $params = shortcode_atts($args, $atts);

        $params['holder_classes'] = $this->getHolderClasses($params);
        $params['title_tag'] = !empty($params['title_tag']) ? $params['title_tag'] : $args['title_tag'];
        $params['title_styles'] = $this->getTitleStyles($params);
        $params['active_bar_style'] = $this->getActiveColor($params);
        $params['inactive_bar_style'] = $this->getInactiveColor($params);

        $html = edgtf_core_get_shortcode_module_template_part('templates/progress-bar-template', 'progress-bar', '', $params);

        return $html;
    }

    private function getHolderClasses($params) {
        $holderClasses = array();

        $holderClasses[] = !empty($params['custom_class']) ? esc_attr($params['custom_class']) : '';

        return implode(' ', $holderClasses);
    }

    private function getTitleStyles($params) {
        $styles = array();

        if (!empty($params['title_color'])) {
            $styles[] = 'color: ' . $params['title_color'];
        }

        return $styles;
    }

    private function getActiveColor($params) {
        $styles = array();

        if (!empty($params['color_active'])) {
            $styles[] = 'background-color: ' . $params['color_active'];
        }

        return $styles;
    }

    private function getInactiveColor($params) {
        $styles = array();

        if (!empty($params['color_inactive'])) {
            $styles[] = 'background-color: ' . $params['color_inactive'];
        }

        return $styles;
    }
}