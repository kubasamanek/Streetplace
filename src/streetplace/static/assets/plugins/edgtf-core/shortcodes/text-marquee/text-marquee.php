<?php

namespace EdgeCore\CPT\Shortcodes\TextMarquee;

use EdgeCore\Lib;

class TextMarquee implements Lib\ShortcodeInterface
{
    private $base;

    public function __construct() {
        $this->base = 'edgtf_text_marquee';

        add_action('vc_before_init', array($this, 'vcMap'));
    }

    public function getBase() {
        return $this->base;
    }

    public function vcMap() {
        if (function_exists('vc_map')) {
            vc_map(
                array(
                    'name' => esc_html__('Edge Text Marquee', 'edgtf-core'),
                    'base' => $this->getBase(),
                    'category' => esc_html__('by EDGE', 'edgtf-core'),
                    'icon' => 'icon-wpb-text-marquee extended-custom-icon',
                    'allowed_container_element' => 'vc_row',
                    'params' => array(
                        array(
                            'type' => 'textfield',
                            'param_name' => 'text',
                            'heading' => esc_html__('Text', 'edgtf-core'),
                            'admin_label' => true
                        ),
                        array(
                            'type' => 'colorpicker',
                            'param_name' => 'color',
                            'heading' => esc_html__('Text Color', 'edgtf-core')
                        ),
                        array(
                            'type' => 'textfield',
                            'param_name' => 'font_size',
                            'heading' => esc_html__('Font Size (px or em)', 'edgtf-core')
                        ),
                        array(
                            'type' => 'textfield',
                            'param_name' => 'line_height',
                            'heading' => esc_html__('Line Height (px or em)', 'edgtf-core')
                        ),
                        array(
                            'type' => 'dropdown',
                            'param_name' => 'font_weight',
                            'heading' => esc_html__('Font Weight', 'edgtf-core'),
                            'value' => array_flip(hyperon_edgtf_get_font_weight_array(true)),
                            'save_always' => true
                        ),
                        array(
                            'type' => 'dropdown',
                            'param_name' => 'font_style',
                            'heading' => esc_html__('Font Style', 'edgtf-core'),
                            'value' => array_flip(hyperon_edgtf_get_font_style_array(true)),
                            'save_always' => true
                        ),
                        array(
                            'type' => 'textfield',
                            'param_name' => 'letter_spacing',
                            'heading' => esc_html__('Letter Spacing (px or em)', 'edgtf-core')
                        ),
                        array(
                            'type' => 'dropdown',
                            'param_name' => 'text_transform',
                            'heading' => esc_html__('Text Transform', 'edgtf-core'),
                            'value' => array_flip(hyperon_edgtf_get_text_transform_array(true)),
                            'save_always' => true
                        )
                    )
                )
            );
        }
    }

    public function render($atts, $content = null) {
        $args = array(
            'text' => '',
            'color' => '',
            'font_size' => '',
            'line_height' => '',
            'font_weight' => '',
            'font_style' => '',
            'letter_spacing' => '',
            'text_transform' => ''
        );
        $params = shortcode_atts($args, $atts);

        $params['text_styles'] = $this->getTextStyles($params);

        $html = edgtf_core_get_shortcode_module_template_part('templates/text-marquee', 'text-marquee', '', $params);

        return $html;
    }

    private function getTextStyles($params) {
        $styles = array();

        if (!empty($params['color'])) {
            $styles[] = 'color: ' . $params['color'];
        }

        if (!empty($params['font_size'])) {
            if (hyperon_edgtf_string_ends_with($params['font_size'], 'px') || hyperon_edgtf_string_ends_with($params['font_size'], 'em')) {
                $styles[] = 'font-size: ' . $params['font_size'];
            } else {
                $styles[] = 'font-size: ' . $params['font_size'] . 'px';
            }
        }

        if (!empty($params['line_height'])) {
            if (hyperon_edgtf_string_ends_with($params['line_height'], 'px') || hyperon_edgtf_string_ends_with($params['line_height'], 'em')) {
                $styles[] = 'line-height: ' . $params['line_height'];
            } else {
                $styles[] = 'line-height: ' . $params['line_height'] . 'px';
            }
        }

        if (!empty($params['font_weight'])) {
            $styles[] = 'font-weight: ' . $params['font_weight'];
        }

        if (!empty($params['font_style'])) {
            $styles[] = 'font-style: ' . $params['font_style'];
        }

        if (!empty($params['letter_spacing'])) {
            if (hyperon_edgtf_string_ends_with($params['letter_spacing'], 'px') || hyperon_edgtf_string_ends_with($params['letter_spacing'], 'em')) {
                $styles[] = 'letter-spacing: ' . $params['letter_spacing'];
            } else {
                $styles[] = 'letter-spacing: ' . $params['letter_spacing'] . 'px';
            }
        }

        if (!empty($params['text_transform'])) {
            $styles[] = 'text-transform: ' . $params['text_transform'];
        }

        return implode(';', $styles);
    }
}