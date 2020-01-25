<?php
namespace EdgeCore\CPT\Shortcodes\Button;

use EdgeCore\Lib;

class Button implements Lib\ShortcodeInterface
{
    private $base;

    public function __construct() {
        $this->base = 'edgtf_button';

        add_action('vc_before_init', array($this, 'vcMap'));
    }

    public function getBase() {
        return $this->base;
    }

    public function vcMap() {
        if (function_exists('vc_map')) {
            vc_map(
                array(
                    'name' => esc_html__('Edge Button', 'edgtf-core'),
                    'base' => $this->base,
                    'category' => esc_html__('by EDGE', 'edgtf-core'),
                    'icon' => 'icon-wpb-button extended-custom-icon',
                    'allowed_container_element' => 'vc_row',
                    'params' => array_merge(
                        array(
                            array(
                                'type' => 'textfield',
                                'param_name' => 'custom_class',
                                'heading' => esc_html__('Custom CSS Class', 'edgtf-core'),
                                'description' => esc_html__('Style particular content element differently - add a class name and refer to it in custom CSS', 'edgtf-core')
                            ),
                            array(
                                'type' => 'dropdown',
                                'param_name' => 'type',
                                'heading' => esc_html__('Type', 'edgtf-core'),
                                'value' => array(
                                    esc_html__('Solid', 'edgtf-core') => 'solid',
                                    esc_html__('Outline', 'edgtf-core') => 'outline',
                                    esc_html__('Gapped Outline', 'edgtf-core') => 'gapped_outline',
                                    esc_html__('Simple', 'edgtf-core') => 'simple'
                                ),
                                'admin_label' => true
                            ),
                            array(
                                'type' => 'dropdown',
                                'param_name' => 'animation',
                                'heading' => esc_html__('Animation', 'edgtf-core'),
                                'value' => array_flip(hyperon_edgtf_get_yes_no_select_array(false)),
                                'dependency' => array('element' => 'type', 'value' => array('solid'))
                            ),
                            array(
                                'type' => 'dropdown',
                                'param_name' => 'size',
                                'heading' => esc_html__('Size', 'edgtf-core'),
                                'value' => array(
                                    esc_html__('Default', 'edgtf-core') => '',
                                    esc_html__('Small', 'edgtf-core') => 'small',
                                    esc_html__('Medium', 'edgtf-core') => 'medium',
                                    esc_html__('Large', 'edgtf-core') => 'large',
                                    esc_html__('Huge', 'edgtf-core') => 'huge'
                                ),
                                'dependency' => array('element' => 'type', 'value' => array('solid', 'outline'))
                            ),
                            array(
                                'type' => 'textfield',
                                'param_name' => 'text',
                                'heading' => esc_html__('Text', 'edgtf-core'),
                                'value' => esc_html__('Button Text', 'edgtf-core'),
                                'save_always' => true,
                                'admin_label' => true
                            ),
                            array(
                                'type' => 'textfield',
                                'param_name' => 'link',
                                'heading' => esc_html__('Link', 'edgtf-core')
                            ),
                            array(
                                'type' => 'dropdown',
                                'param_name' => 'target',
                                'heading' => esc_html__('Link Target', 'edgtf-core'),
                                'value' => array_flip(hyperon_edgtf_get_link_target_array()),
                                'save_always' => true
                            )
                        ),
                        hyperon_edgtf_icon_collections()->getVCParamsArray(array(), '', true),
                        array(
                            array(
                                'type' => 'colorpicker',
                                'param_name' => 'color',
                                'heading' => esc_html__('Color', 'edgtf-core'),
                                'group' => esc_html__('Design Options', 'edgtf-core')
                            ),
                            array(
                                'type' => 'colorpicker',
                                'param_name' => 'hover_color',
                                'heading' => esc_html__('Hover Color', 'edgtf-core'),
                                'group' => esc_html__('Design Options', 'edgtf-core')
                            ),
                            array(
                                'type' => 'colorpicker',
                                'param_name' => 'background_color',
                                'heading' => esc_html__('Background Color', 'edgtf-core'),
                                'dependency' => array('element' => 'type', 'value' => array('solid')),
                                'group' => esc_html__('Design Options', 'edgtf-core')
                            ),
                            array(
                                'type' => 'colorpicker',
                                'param_name' => 'hover_background_color',
                                'heading' => esc_html__('Hover Background Color', 'edgtf-core'),
                                'dependency' => array('element' => 'type', 'value' => array('solid', 'outline')),
                                'group' => esc_html__('Design Options', 'edgtf-core')
                            ),
                            array(
                                'type' => 'colorpicker',
                                'param_name' => 'border_color',
                                'heading' => esc_html__('Border Color', 'edgtf-core'),
                                'dependency' => array('element' => 'type', 'value' => array('solid', 'outline', 'gapped_outline')),
                                'group' => esc_html__('Design Options', 'edgtf-core')
                            ),
                            array(
                                'type' => 'colorpicker',
                                'param_name' => 'hover_border_color',
                                'heading' => esc_html__('Hover Border Color', 'edgtf-core'),
                                'dependency' => array('element' => 'type', 'value' => array('solid', 'outline')),
                                'group' => esc_html__('Design Options', 'edgtf-core')
                            ),
                            array(
                                'type' => 'textfield',
                                'param_name' => 'font_size',
                                'heading' => esc_html__('Font Size (px)', 'edgtf-core'),
                                'group' => esc_html__('Design Options', 'edgtf-core')
                            ),
                            array(
                                'type' => 'dropdown',
                                'param_name' => 'font_weight',
                                'heading' => esc_html__('Font Weight', 'edgtf-core'),
                                'value' => array_flip(hyperon_edgtf_get_font_weight_array(true)),
                                'save_always' => true,
                                'group' => esc_html__('Design Options', 'edgtf-core')
                            ),
                            array(
                                'type' => 'dropdown',
                                'param_name' => 'text_transform',
                                'heading' => esc_html__('Text Transform', 'edgtf-core'),
                                'value' => array_flip(hyperon_edgtf_get_text_transform_array(true)),
                                'save_always' => true
                            ),
                            array(
                                'type' => 'textfield',
                                'param_name' => 'margin',
                                'heading' => esc_html__('Margin', 'edgtf-core'),
                                'description' => esc_html__('Insert margin in format: top right bottom left (e.g. 10px 5px 10px 5px)', 'edgtf-core'),
                                'group' => esc_html__('Design Options', 'edgtf-core')
                            ),
                            array(
                                'type' => 'textfield',
                                'param_name' => 'padding',
                                'heading' => esc_html__('Button Padding', 'edgtf-core'),
                                'description' => esc_html__('Insert padding in format: top right bottom left (e.g. 10px 5px 10px 5px)', 'edgtf-core'),
                                'dependency' => array('element' => 'type', 'value' => array('solid', 'outline')),
                                'group' => esc_html__('Design Options', 'edgtf-core')
                            )
                        )
                    )
                )
            );
        }
    }

    public function render($atts, $content = null) {
        $default_atts = array(
            'size' => '',
            'type' => 'solid',
            'animation' => '',
            'text' => '',
            'link' => '',
            'target' => '_self',
            'color' => '',
            'hover_color' => '',
            'background_color' => '',
            'hover_background_color' => '',
            'border_color' => '',
            'hover_border_color' => '',
            'font_size' => '',
            'font_weight' => '',
            'text_transform' => '',
            'margin' => '',
            'padding' => '',
            'custom_class' => '',
            'html_type' => 'anchor',
            'input_name' => '',
            'custom_attrs' => array()
        );
        $default_atts = array_merge($default_atts, hyperon_edgtf_icon_collections()->getShortcodeParams());
        $params = shortcode_atts($default_atts, $atts);

        if ($params['html_type'] !== 'input') {
            $iconPackName = hyperon_edgtf_icon_collections()->getIconCollectionParamNameByKey($params['icon_pack']);
            $params['icon'] = $iconPackName ? $params[$iconPackName] : '';
        }

        $params['size'] = !empty($params['size']) ? $params['size'] : 'medium';
        $params['type'] = !empty($params['type']) ? $params['type'] : 'solid';

        $params['link'] = !empty($params['link']) ? $params['link'] : '#';
        $params['target'] = !empty($params['target']) ? $params['target'] : $default_atts['target'];

        $params['button_classes'] = $this->getButtonClasses($params);
        $params['button_custom_attrs'] = !empty($params['custom_attrs']) ? $params['custom_attrs'] : array();
        $params['button_styles'] = $this->getButtonStyles($params);
        $params['button_data'] = $this->getButtonDataAttr($params);

        return edgtf_core_get_shortcode_module_template_part('templates/' . $params['html_type'], 'button', '', $params);
    }

    private function getButtonStyles($params) {
        $styles = array();

        if (!empty($params['color'])) {
            $styles[] = 'color: ' . $params['color'];
        }

        if (!empty($params['background_color']) && $params['type'] !== 'outline') {
            $styles[] = 'background-color: ' . $params['background_color'];
        }

        if (!empty($params['border_color'])) {
            $styles[] = 'border-color: ' . $params['border_color'];
        }

        if (!empty($params['font_size'])) {
            $styles[] = 'font-size: ' . hyperon_edgtf_filter_px($params['font_size']) . 'px';
        }

        if (!empty($params['font_weight']) && $params['font_weight'] !== '') {
            $styles[] = 'font-weight: ' . $params['font_weight'];
        }

        if (!empty($params['text_transform'])) {
            $styles[] = 'text-transform: ' . $params['text_transform'];
        }

        if ($params['margin'] !== '') {
            $styles[] = 'margin: ' . $params['margin'];
        }

        if ($params['padding'] !== '') {
            $styles[] = 'padding: ' . $params['padding'];
        }

        return $styles;
    }

    private function getButtonDataAttr($params) {
        $data = array();

        if (!empty($params['hover_color'])) {
            $data['data-hover-color'] = $params['hover_color'];
        }

        if (!empty($params['hover_background_color'])) {
            $data['data-hover-bg-color'] = $params['hover_background_color'];
        }

        if (!empty($params['hover_border_color'])) {
            $data['data-hover-border-color'] = $params['hover_border_color'];
        }

        return $data;
    }

    private function getButtonClasses($params) {
        $buttonClasses = array(
            'edgtf-btn',
            'edgtf-btn-' . $params['size'],
            'edgtf-btn-' . $params['type']
        );

        if (!empty($params['hover_background_color'])) {
            $buttonClasses[] = 'edgtf-btn-custom-hover-bg';
        }

        if (!empty($params['hover_border_color'])) {
            $buttonClasses[] = 'edgtf-btn-custom-border-hover';
        }

        if (!empty($params['hover_color'])) {
            $buttonClasses[] = 'edgtf-btn-custom-hover-color';
        }

        if (!empty($params['icon'])) {
            $buttonClasses[] = 'edgtf-btn-icon';
        }

        if (!empty($params['custom_class'])) {
            $buttonClasses[] = esc_attr($params['custom_class']);
        }

        if(!empty($params['animation'])){
            $buttonClasses[] = 'edgtf-btn-animation';
        }

        return $buttonClasses;
    }
}