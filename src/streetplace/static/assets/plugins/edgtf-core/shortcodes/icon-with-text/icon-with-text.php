<?php

namespace EdgeCore\CPT\Shortcodes\IconWithText;

use EdgeCore\Lib;

class IconWithText implements Lib\ShortcodeInterface
{
    private $base;

    public function __construct() {
        $this->base = 'edgtficon_with_text';

        add_action('vc_before_init', array($this, 'vcMap'));
    }

    public function getBase() {
        return $this->base;
    }

    public function vcMap() {
        if (function_exists('vc_map')) {
            vc_map(
                array(
                    'name' => esc_html__('Edge Icon With Text', 'edgtf-core'),
                    'base' => $this->base,
                    'icon' => 'icon-wpb-icon-with-text extended-custom-icon',
                    'category' => esc_html__('by EDGE', 'edgtf-core'),
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
                                    esc_html__('Icon Left From Text', 'edgtf-core') => 'icon-left',
                                    esc_html__('Icon Left From Title', 'edgtf-core') => 'icon-left-from-title',
                                    esc_html__('Icon Top', 'edgtf-core') => 'icon-top'
                                ),
                                'std' => 'icon-top',
                                'save_always' => true,
                            ),
                            array(
                                'type' => 'dropdown',
                                'param_name' => 'icon_source',
                                'heading' => esc_html__('Icon Source', 'edgtf-core'),
                                'value' => array(
                                    esc_html__('Icon Pack', 'edgtf-core') => 'icon-pack',
                                    esc_html__('Image', 'edgtf-core') => 'image',
                                    esc_html__('SVG Path', 'edgtf-core') => 'svg-path'
                                ),
                                'save_always' => true,
                                'admin_label' => true,
                            ),
                        ),
                        hyperon_edgtf_icon_collections()->getVCParamsArray(array(
                            'element' => 'icon_source',
                            'value' => array('icon-pack')
                        )),
                        array(
                            array(
                                'type' => 'attach_image',
                                'param_name' => 'image',
                                'heading' => esc_html__('Image', 'edgtf-core'),
                                'dependency' => array(
                                    'element' => 'icon_source',
                                    'value' => array('image')
                                ),
                            ),

                            ////////////////////////////////////////////////////////////////////////////////////////////

                            array(
                                'type' => 'textfield',
                                'param_name' => 'image_size',
                                'heading' => esc_html__('Image Size (px)', 'edgtf-core'),
                                'group' => esc_html__('Image Settings', 'edgtf-core'),
                                'dependency' => array(
                                    'element' => 'icon_source',
                                    'value' => array('image')
                                ),
                            ),

                            ////////////////////////////////////////////////////////////////////////////////////////////

                            array(
                                'type' => 'textarea_raw_html',
                                'param_name' => 'svg_source',
                                'heading' => esc_html__('SVG Source', 'edgtf-core'),
                                'dependency' => array(
                                    'element' => 'icon_source',
                                    'value' => 'svg-path',
                                ),
                            ),
                            array(
                                'type' => 'textfield',
                                'param_name' => 'svg_height',
                                'heading' => esc_html__('SVG Height (px)', 'edgtf-core'),
                                'dependency' => array(
                                    'element' => 'icon_source',
                                    'value' => 'svg-path',
                                ),
                                'group' => esc_html__('SVG Settings', 'edgtf-core'),
                            ),
                            array(
                                'type' => 'textfield',
                                'param_name' => 'svg_width',
                                'heading' => esc_html__('SVG Width (px)', 'edgtf-core'),
                                'dependency' => array(
                                    'element' => 'icon_source',
                                    'value' => 'svg-path',
                                ),
                                'group' => esc_html__('SVG Settings', 'edgtf-core'),
                            ),
                            array(
                                'type' => 'colorpicker',
                                'param_name' => 'svg_stroke_color',
                                'heading' => esc_html__('SVG Stroke Color', 'edgtf-core'),
                                'dependency' => array(
                                    'element' => 'icon_source',
                                    'value' => 'svg-path',
                                ),
                                'group' => esc_html__('SVG Settings', 'edgtf-core'),
                            ),
                            array(
                                'type' => 'textfield',
                                'param_name' => 'svg_stroke_width',
                                'heading' => esc_html__('SVG Stroke Width (px)', 'edgtf-core'),
                                'dependency' => array(
                                    'element' => 'icon_source',
                                    'value' => 'svg-path',
                                ),
                                'group' => esc_html__('SVG Settings', 'edgtf-core'),
                            ),

                            array(
                                'type' => 'dropdown',
                                'param_name' => 'svg_animation_type',
                                'heading' => esc_html__('SVG Animation type', 'edgtf-core'),
                                'value' => array(
                                    esc_html__('Delayed', 'edgtf-core') => 'delayed',
                                    esc_html__('Sync', 'edgtf-core') => 'sync',
                                    esc_html__('One by One', 'edgtf-core') => 'oneByOne'
                                ),
                                'dependency' => array(
                                    'element' => 'icon_source',
                                    'value' => 'svg-path',
                                ),
                                'save_always' => true,
                                'group' => esc_html__('SVG Settings', 'edgtf-core'),
                            ),
                            array(
                                'type' => 'textfield',
                                'param_name' => 'svg_animation_duration',
                                'heading' => esc_html__('SVG Animation Duration', 'edgtf-core'),
                                'description' => esc_html__('In frames (common browser speed 30 frames per second)', 'edgtf-core'),
                                'dependency' => array(
                                    'element' => 'icon_source',
                                    'value' => 'svg-path',
                                ),
                                'value' => 200,
                                'save_always' => true,
                                'group' => esc_html__('SVG Settings', 'edgtf-core'),
                            ),
                            array(
                                'type' => 'textfield',
                                'param_name' => 'svg_animation_duration_delay',
                                'heading' => esc_html__('SVG Animation Duration Delay', 'edgtf-core'),
                                'description' => esc_html__('In frames (common browser speed 30 frames per second). Delay must be shorter than duration', 'edgtf-core'),
                                'dependency' => array(
                                    'element' => 'svg_animation_type',
                                    'value' => 'delayed',
                                ),
                                'value' => 30,
                                'save_always' => true,
                                'group' => esc_html__('SVG Settings', 'edgtf-core'),
                            ),
                            array(
                                'type' => 'checkbox',
                                'param_name' => 'svg_animation_reverse',
                                'heading' => esc_html__('Reverse SVG Animation', 'edgtf-core'),
                                'description' => esc_html__('Reverse the order of animation execution', 'edgtf-core'),
                                'value' => 'reverse',
                                'dependency' => array(
                                    'element' => 'icon_source',
                                    'value' => 'svg-path',
                                ),
                                'save_always' => true,
                                'group' => esc_html__('SVG Settings', 'edgtf-core'),
                            ),

                            ////////////////////////////////////////////////////////////////////////////////////////////

                            array(
                                'type' => 'dropdown',
                                'param_name' => 'icon_type',
                                'heading' => esc_html__('Icon Type', 'edgtf-core'),
                                'value' => array(
                                    esc_html__('Normal', 'edgtf-core') => 'edgtf-normal',
                                    esc_html__('Circle', 'edgtf-core') => 'edgtf-circle',
                                    esc_html__('Square', 'edgtf-core') => 'edgtf-square'
                                ),
                                'dependency' => array(
                                    'element' => 'icon_source',
                                    'value' => array('icon-pack')
                                ),
                                'group' => esc_html__('Icon Settings', 'edgtf-core')
                            ),
                            array(
                                'type' => 'dropdown',
                                'param_name' => 'icon_size',
                                'heading' => esc_html__('Icon Size', 'edgtf-core'),
                                'value' => array(
                                    esc_html__('Medium', 'edgtf-core') => 'edgtf-icon-medium',
                                    esc_html__('Tiny', 'edgtf-core') => 'edgtf-icon-tiny',
                                    esc_html__('Small', 'edgtf-core') => 'edgtf-icon-small',
                                    esc_html__('Large', 'edgtf-core') => 'edgtf-icon-large',
                                    esc_html__('Very Large', 'edgtf-core') => 'edgtf-icon-huge'
                                ),
                                'group' => esc_html__('Icon Settings', 'edgtf-core'),
                                'dependency' => array(
                                    'element' => 'icon_source',
                                    'value' => array('icon-pack')
                                ),
                            ),
                            array(
                                'type' => 'textfield',
                                'param_name' => 'shape_size',
                                'heading' => esc_html__('Shape Size (px)', 'edgtf-core'),
                                'group' => esc_html__('Icon Settings', 'edgtf-core'),
                                'dependency' => array(
                                    'element' => 'icon_source',
                                    'value' => array('icon-pack')
                                ),
                            ),
                            array(
                                'type' => 'colorpicker',
                                'param_name' => 'icon_color',
                                'heading' => esc_html__('Icon Color', 'edgtf-core'),
                                'group' => esc_html__('Icon Settings', 'edgtf-core'),
                                'dependency' => array(
                                    'element' => 'icon_source',
                                    'value' => array('icon-pack')
                                ),
                            ),
                            array(
                                'type' => 'colorpicker',
                                'param_name' => 'icon_hover_color',
                                'heading' => esc_html__('Icon Hover Color', 'edgtf-core'),
                                'group' => esc_html__('Icon Settings', 'edgtf-core'),
                                'dependency' => array(
                                    'element' => 'icon_source',
                                    'value' => array('icon-pack')
                                ),
                            ),
                            array(
                                'type' => 'colorpicker',
                                'param_name' => 'icon_background_color',
                                'heading' => esc_html__('Icon Background Color', 'edgtf-core'),
                                'dependency' => array(
                                    'element' => 'icon_type',
                                    'value' => array('edgtf-square', 'edgtf-circle')
                                ),
                                'group' => esc_html__('Icon Settings', 'edgtf-core'),
                            ),
                            array(
                                'type' => 'colorpicker',
                                'param_name' => 'icon_hover_background_color',
                                'heading' => esc_html__('Icon Hover Background Color', 'edgtf-core'),
                                'dependency' => array(
                                    'element' => 'icon_type',
                                    'value' => array('edgtf-square', 'edgtf-circle')
                                ),
                                'group' => esc_html__('Icon Settings', 'edgtf-core')
                            ),
                            array(
                                'type' => 'colorpicker',
                                'param_name' => 'icon_border_color',
                                'heading' => esc_html__('Icon Border Color', 'edgtf-core'),
                                'dependency' => array(
                                    'element' => 'icon_type',
                                    'value' => array('edgtf-square', 'edgtf-circle')
                                ),
                                'group' => esc_html__('Icon Settings', 'edgtf-core')
                            ),
                            array(
                                'type' => 'colorpicker',
                                'param_name' => 'icon_border_hover_color',
                                'heading' => esc_html__('Icon Border Hover Color', 'edgtf-core'),
                                'dependency' => array(
                                    'element' => 'icon_type',
                                    'value' => array('edgtf-square', 'edgtf-circle')
                                ),
                                'group' => esc_html__('Icon Settings', 'edgtf-core')
                            ),
                            array(
                                'type' => 'textfield',
                                'param_name' => 'icon_border_width',
                                'heading' => esc_html__('Border Width (px)', 'edgtf-core'),
                                'dependency' => array(
                                    'element' => 'icon_type',
                                    'value' => array('edgtf-square', 'edgtf-circle')
                                ),
                                'group' => esc_html__('Icon Settings', 'edgtf-core')
                            ),
                            array(
                                'type' => 'dropdown',
                                'param_name' => 'icon_animation',
                                'heading' => esc_html__('Icon Animation', 'edgtf-core'),
                                'value' => array_flip(hyperon_edgtf_get_yes_no_select_array(false)),
                                'group' => esc_html__('Icon Settings', 'edgtf-core'),
                                'dependency' => array(
                                    'element' => 'icon_source',
                                    'value' => array('icon-pack')
                                ),
                            ),
                            array(
                                'type' => 'textfield',
                                'param_name' => 'icon_animation_delay',
                                'heading' => esc_html__('Icon Animation Delay (ms)', 'edgtf-core'),
                                'dependency' => array('element' => 'icon_animation', 'value' => array('yes')),
                                'group' => esc_html__('Icon Settings', 'edgtf-core'),
                                'dependency' => array(
                                    'element' => 'icon_source',
                                    'value' => array('icon-pack')
                                ),
                            ),

                            ////////////////////////////////////////////////////////////////////////////////////////////

                            array(
                                'type' => 'textfield',
                                'param_name' => 'title',
                                'heading' => esc_html__('Title', 'edgtf-core')
                            ),
                            array(
                                'type' => 'checkbox',
                                'param_name' => 'title_separator',
                                'heading' => esc_html__('Separator Below Title?', 'edgtf-core'),
                                'value' => 'true',
                                'std' => 'true',
                                'dependency' => array('element' => 'title', 'not_empty' => true),
                                'save_always' => true,
                            ),
                            array(
                                'type' => 'dropdown',
                                'param_name' => 'title_tag',
                                'heading' => esc_html__('Title Tag', 'edgtf-core'),
                                'value' => array_flip(hyperon_edgtf_get_title_tag(true)),
                                'save_always' => true,
                                'dependency' => array('element' => 'title', 'not_empty' => true),
                                'group' => esc_html__('Text Settings', 'edgtf-core')
                            ),
                            array(
                                'type' => 'colorpicker',
                                'param_name' => 'title_color',
                                'heading' => esc_html__('Title Color', 'edgtf-core'),
                                'dependency' => array('element' => 'title', 'not_empty' => true),
                                'group' => esc_html__('Text Settings', 'edgtf-core')
                            ),
                            array(
                                'type' => 'textfield',
                                'param_name' => 'title_top_margin',
                                'heading' => esc_html__('Title Top Margin (px)', 'edgtf-core'),
                                'dependency' => array('element' => 'title', 'not_empty' => true),
                                'group' => esc_html__('Text Settings', 'edgtf-core')
                            ),
                            array(
                                'type' => 'textarea',
                                'param_name' => 'text',
                                'heading' => esc_html__('Text', 'edgtf-core')
                            ),
                            array(
                                'type' => 'colorpicker',
                                'param_name' => 'text_color',
                                'heading' => esc_html__('Text Color', 'edgtf-core'),
                                'dependency' => array('element' => 'text', 'not_empty' => true),
                                'group' => esc_html__('Text Settings', 'edgtf-core')
                            ),
                            array(
                                'type' => 'textfield',
                                'param_name' => 'text_top_margin',
                                'heading' => esc_html__('Text Top Margin (px)', 'edgtf-core'),
                                'dependency' => array('element' => 'text', 'not_empty' => true),
                                'group' => esc_html__('Text Settings', 'edgtf-core')
                            ),
                            array(
                                'type' => 'textfield',
                                'param_name' => 'link',
                                'heading' => esc_html__('Link', 'edgtf-core'),
                                'description' => esc_html__('Set link around icon and title', 'edgtf-core')
                            ),
                            array(
                                'type' => 'dropdown',
                                'param_name' => 'target',
                                'heading' => esc_html__('Target', 'edgtf-core'),
                                'value' => array_flip(hyperon_edgtf_get_link_target_array()),
                                'dependency' => array('element' => 'link', 'not_empty' => true),
                            ),
                            array(
                                'type' => 'textfield',
                                'param_name' => 'text_padding',
                                'heading' => esc_html__('Text Padding (px)', 'edgtf-core'),
                                'description' => esc_html__('Set left or top padding dependence of type for your text holder. Default value is 13 for left type and 25 for top icon with text type', 'edgtf-core'),
                                'dependency' => array('element' => 'type', 'value' => array('icon-left', 'icon-top')),
                                'group' => esc_html__('Text Settings', 'edgtf-core')
                            )
                        )
                    )
                )
            );
        }
    }

    public function render($atts, $content = null) {
        $default_atts = array(
            'custom_class' => '',
            'type' => 'icon-left',
            'image' => '',
            'icon_type' => 'edgtf-normal',
            'icon_size' => 'edgtf-icon-medium',
            'image_size' => '',
            'shape_size' => '',
            'icon_color' => '',
            'icon_hover_color' => '',
            'icon_background_color' => '',
            'icon_hover_background_color' => '',
            'icon_border_color' => '',
            'icon_border_hover_color' => '',
            'icon_border_width' => '',
            'icon_animation' => '',
            'icon_animation_delay' => '',
            'title' => '',
            'title_separator' => '',
            'title_tag' => 'h4',
            'title_color' => '',
            'title_top_margin' => '',
            'text' => '',
            'text_color' => '',
            'text_top_margin' => '',
            'link' => '',
            'target' => '_self',
            'text_padding' => '',
            'icon_source' => '',
            'svg_source' => '',
            'svg_height' => '100',
            'svg_width' => '100',
            'svg_stroke_width' => '4',
            'svg_stroke_color' => '#000000',
            'svg_animation_type' => 'delayed',
            'svg_animation_duration' => '100',
            'svg_animation_duration_delay' => '0',
            'svg_animation_reverse' => '',
        );

        $default_atts = array_merge($default_atts, hyperon_edgtf_icon_collections()->getShortcodeParams());
        $params = shortcode_atts($default_atts, $atts);

        $params['type'] = !empty($params['type']) ? $params['type'] : $default_atts['type'];

        $params['icon_parameters'] = $this->getIconParameters($params);
        $params['holder_classes'] = $this->getHolderClasses($params);
        $params['content_styles'] = $this->getContentStyles($params);
        $params['title_styles'] = $this->getTitleStyles($params);
        $params['title_tag'] = !empty($params['title_tag']) ? $params['title_tag'] : $default_atts['title_tag'];
        $params['text_styles'] = $this->getTextStyles($params);
        $params['target'] = !empty($params['target']) ? $params['target'] : $default_atts['target'];
        $params['animation_data'] = $this->getAnimationData($params);
        $params['svg_parameters'] = $this->getSVGParameters($params);

        return edgtf_core_get_shortcode_module_template_part('templates/iwt', 'icon-with-text', $params['type'], $params);
    }

    private function getAnimationData($params) {
        $animation_data = array();

        if (!empty($params['svg_source'])) {
            $params_array['svg_source'] = $params['svg_source'];

            if (!empty($params['svg_stroke_width'])) {
                $animation_data['data-stroke-width'] = $params['svg_stroke_width'];
            }

            if (!empty($params['svg_stroke_color'])) {
                $animation_data['data-stroke-color'] = $params['svg_stroke_color'];
            }

            if (!empty($params['svg_animation_type'])) {
                $animation_data['data-animation-type'] = $params['svg_animation_type'];
            }

            if (!empty($params['svg_animation_duration'])) {
                $animation_data['data-animation-duration'] = $params['svg_animation_duration'];
            }

            if (!empty($params['svg_animation_duration_delay'])) {
                // animation delay must be shorter than animation duration
                if ($params['svg_animation_duration_delay'] >= $params['svg_animation_duration']) {
                    $animation_data['data-animation-duration-delay'] = $params['svg_animation_duration'] - 1;
                } else {
                    $animation_data['data-animation-duration-delay'] = $params['svg_animation_duration_delay'];
                }
            }

            if (!empty($params['svg_animation_reverse'])) {
                $animation_data['data-animation-reverse'] = $params['svg_animation_reverse'];
            }
        }

        return $animation_data;
    }

    private function getSVGParameters($params) {
        $params_array = array();

        if (!empty($params['svg_source'])) {
            $params_array['svg_source'] = $params['svg_source'];

            if (!empty($params['svg_height'])) {
                $params_array['svg_height'] = $params['svg_height'];
            }

            if (!empty($params['svg_width'])) {
                $params_array['svg_width'] = $params['svg_width'];
            }
        }

        return $params_array;
    }

    private function getIconParameters($params) {
        $params_array = array();

        if (empty($params['image']) && empty($params['svg_source'])) {
            $iconPackName = hyperon_edgtf_icon_collections()->getIconCollectionParamNameByKey($params['icon_pack']);

            $params_array['icon_pack'] = $params['icon_pack'];
            $params_array[$iconPackName] = $params[$iconPackName];

            if (!empty($params['icon_size'])) {
                $params_array['size'] = $params['icon_size'];
            }

            if (!empty($params['image_size'])) {
                $params_array['custom_size'] = hyperon_edgtf_filter_px($params['image_size']) . 'px';
            }

            if (!empty($params['icon_type'])) {
                $params_array['type'] = $params['icon_type'];
            }

            if (!empty($params['shape_size'])) {
                $params_array['shape_size'] = hyperon_edgtf_filter_px($params['shape_size']) . 'px';
            }

            if (!empty($params['icon_border_color'])) {
                $params_array['border_color'] = $params['icon_border_color'];
            }

            if (!empty($params['icon_border_hover_color'])) {
                $params_array['hover_border_color'] = $params['icon_border_hover_color'];
            }

            if ($params['icon_border_width'] !== '') {
                $params_array['border_width'] = hyperon_edgtf_filter_px($params['icon_border_width']) . 'px';
            }

            if (!empty($params['icon_background_color'])) {
                $params_array['background_color'] = $params['icon_background_color'];
            }

            if (!empty($params['icon_hover_background_color'])) {
                $params_array['hover_background_color'] = $params['icon_hover_background_color'];
            }

            $params_array['icon_color'] = $params['icon_color'];

            if (!empty($params['icon_hover_color'])) {
                $params_array['hover_icon_color'] = $params['icon_hover_color'];
            }

            $params_array['icon_animation'] = $params['icon_animation'];
            $params_array['icon_animation_delay'] = $params['icon_animation_delay'];
        }

        return $params_array;
    }

    private function getHolderClasses($params) {
        $holderClasses = array('edgtf-iwt', 'clearfix');

        $holderClasses[] = !empty($params['custom_class']) ? esc_attr($params['custom_class']) : '';
        $holderClasses[] = !empty($params['type']) ? 'edgtf-iwt-' . $params['type'] : '';
        $holderClasses[] = !empty($params['icon_size']) ? 'edgtf-iwt-' . str_replace('edgtf-', '', $params['icon_size']) : '';
        $holderClasses[] = !empty($params['icon_source']) ? 'edgtf-iwt-' . $params['icon_source'] : '';

        return $holderClasses;
    }

    private function getContentStyles($params) {
        $styles = array();

        if ($params['text_padding'] !== '' && $params['type'] === 'icon-left') {
            $styles[] = 'padding-left: ' . hyperon_edgtf_filter_px($params['text_padding']) . 'px';
        }

        if ($params['text_padding'] !== '' && $params['type'] === 'icon-top') {
            $styles[] = 'padding-top: ' . hyperon_edgtf_filter_px($params['text_padding']) . 'px';
        }

        return implode(';', $styles);
    }

    private function getTitleStyles($params) {
        $styles = array();

        if (!empty($params['title_color'])) {
            $styles[] = 'color: ' . $params['title_color'];
        }

        if (!empty($params['title_font_style'])) {
            $styles[] = 'font-style:' . $params['title_font_style'];
        }

        if ($params['title_top_margin'] !== '') {
            $styles[] = 'margin-top: ' . hyperon_edgtf_filter_px($params['title_top_margin']) . 'px';
        }

        return implode(';', $styles);
    }

    private function getTextStyles($params) {
        $styles = array();

        if (!empty($params['text_color'])) {
            $styles[] = 'color: ' . $params['text_color'];
        }

        if ($params['text_top_margin'] !== '') {
            $styles[] = 'margin-top: ' . hyperon_edgtf_filter_px($params['text_top_margin']) . 'px';
        }

        return implode(';', $styles);
    }
}