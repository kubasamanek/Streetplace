<?php
namespace EdgeCore\CPT\Shortcodes\Separator;

use EdgeCore\Lib;

class Separator implements Lib\ShortcodeInterface
{
    private $base;

    function __construct() {
        $this->base = 'edgtf_separator';
        add_action('vc_before_init', array($this, 'vcMap'));
    }

    public function getBase() {
        return $this->base;
    }

    public function vcMap() {
        if (function_exists('vc_map')) {
            vc_map(
                array(
                    'name' => esc_html__('Edge Separator', 'edgtf-core'),
                    'base' => $this->base,
                    'category' => esc_html__('by EDGE', 'edgtf-core'),
                    'icon' => 'icon-wpb-separator extended-custom-icon',
                    'show_settings_on_create' => true,
                    'class' => 'wpb_vc_separator',
                    'custom_markup' => '<div></div>',
                    'params' => array(
                        array(
                            'type' => 'textfield',
                            'param_name' => 'custom_class',
                            'heading' => esc_html__('Custom CSS Class', 'edgtf-core'),
                            'description' => esc_html__('Style particular content element differently - add a class name and refer to it in custom CSS', 'edgtf-core')
                        ),
                        array(
                            'type' => 'dropdown',
                            'param_name' => 'position',
                            'heading' => esc_html__('Position', 'edgtf-core'),
                            'value' => array(
                                esc_html__('Center', 'edgtf-core') => 'center',
                                esc_html__('Left', 'edgtf-core') => 'left',
                                esc_html__('Right', 'edgtf-core') => 'right'
                            ),
                            'dependency' => array('element' => 'type', 'value' => array('normal'))
                        ),
                        array(
                            'type' => 'colorpicker',
                            'param_name' => 'color',
                            'heading' => esc_html__('Color', 'edgtf-core')
                        ),
                        array(
                            'type' => 'textfield',
                            'param_name' => 'top_margin',
                            'heading' => esc_html__('Top Margin (px or %)', 'edgtf-core')
                        ),
                        array(
                            'type' => 'textfield',
                            'param_name' => 'bottom_margin',
                            'heading' => esc_html__('Bottom Margin (px or %)', 'edgtf-core')
                        )
                    )
                )
            );
        }
    }

    public function render($atts, $content = null) {
        $args = array(
            'custom_class' => '',
            'position' => 'center',
            'color' => '',
            'top_margin' => '',
            'bottom_margin' => ''
        );
        $params = shortcode_atts($args, $atts);

        $params['holder_classes'] = $this->getHolderClasses($params);
        $params['holder_styles'] = $this->getHolderStyles($params);

        $html = edgtf_core_get_shortcode_module_template_part('templates/separator-template', 'separator', '', $params);

        return $html;
    }

    private function getHolderClasses($params) {
        $holderClasses = array();

        $holderClasses[] = !empty($params['custom_class']) ? esc_attr($params['custom_class']) : '';
        $holderClasses[] = !empty($params['position']) ? 'edgtf-separator-' . $params['position'] : '';

        return implode(' ', $holderClasses);
    }

    private function getHolderStyles($params) {
        $styles = array();

        if ($params['color'] !== '') {
            $styles[] = 'color: ' . $params['color'];
        }

        if ($params['top_margin'] !== '') {
            if (hyperon_edgtf_string_ends_with($params['top_margin'], '%') || hyperon_edgtf_string_ends_with($params['top_margin'], 'px')) {
                $styles[] = 'margin-top: ' . $params['top_margin'];
            } else {
                $styles[] = 'margin-top: ' . hyperon_edgtf_filter_px($params['top_margin']) . 'px';
            }
        }

        if ($params['bottom_margin'] !== '') {
            if (hyperon_edgtf_string_ends_with($params['bottom_margin'], '%') || hyperon_edgtf_string_ends_with($params['bottom_margin'], 'px')) {
                $styles[] = 'margin-bottom: ' . $params['bottom_margin'];
            } else {
                $styles[] = 'margin-bottom: ' . hyperon_edgtf_filter_px($params['bottom_margin']) . 'px';
            }
        }

        return implode(';', $styles);
    }
}
