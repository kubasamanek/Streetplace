<?php
namespace EdgeCore\CPT\Shortcodes\AnimationHolder;

use EdgeCore\Lib;

class AnimationHolder implements Lib\ShortcodeInterface
{
    private $base;

    function __construct() {
        $this->base = 'edgtf_animation_holder';
        add_action('vc_before_init', array($this, 'vcMap'));
    }

    public function getBase() {
        return $this->base;
    }

    public function vcMap() {
        if (function_exists('vc_map')) {
            vc_map(
                array(
                    'name' => esc_html__('Edge Animation Holder', 'edgtf-core'),
                    'base' => $this->base,
                    "as_parent" => array('except' => 'vc_row'),
                    'content_element' => true,
                    'category' => esc_html__('by EDGE', 'edgtf-core'),
                    'icon' => 'icon-wpb-animation-holder extended-custom-icon',
                    'show_settings_on_create' => true,
                    'js_view' => 'VcColumnView',
                    'params' => array(
                        array(
                            'type' => 'dropdown',
                            'param_name' => 'animation',
                            'heading' => esc_html__('Animation Type', 'edgtf-core'),
                            'value' => array(
                                esc_html__('Element Grow In', 'edgtf-core') => 'edgtf-grow-in',
                                esc_html__('Element Fade In Down', 'edgtf-core') => 'edgtf-fade-in-down',
                                esc_html__('Element From Fade', 'edgtf-core') => 'edgtf-element-from-fade',
                                esc_html__('Element From Left', 'edgtf-core') => 'edgtf-element-from-left',
                                esc_html__('Element From Right', 'edgtf-core') => 'edgtf-element-from-right',
                                esc_html__('Element From Top', 'edgtf-core') => 'edgtf-element-from-top',
                                esc_html__('Element From Bottom', 'edgtf-core') => 'edgtf-element-from-bottom',
                                esc_html__('Element Flip In', 'edgtf-core') => 'edgtf-flip-in',
                                esc_html__('Element X Rotate', 'edgtf-core') => 'edgtf-x-rotate',
                                esc_html__('Element Z Rotate', 'edgtf-core') => 'edgtf-z-rotate',
                                esc_html__('Element Y Translate', 'edgtf-core') => 'edgtf-y-translate',
                                esc_html__('Element Fade In X Rotate', 'edgtf-core') => 'edgtf-fade-in-left-x-rotate',
                            ),
                            'save_always' => true
                        ),
                        array(
                            'type' => 'textfield',
                            'param_name' => 'animation_delay',
                            'heading' => esc_html__('Animation Delay (ms)', 'edgtf-core')
                        )
                    )
                )
            );
        }
    }

    public function render($atts, $content = null) {
        $args = array(
            'animation' => '',
            'animation_delay' => ''
        );
        extract(shortcode_atts($args, $atts));

        $html = '<div class="edgtf-animation-holder ' . esc_attr($animation) . '" data-animation="' . esc_attr($animation) . '" data-animation-delay="' . esc_attr($animation_delay) . '"><div class="edgtf-animation-inner">' . do_shortcode($content) . '</div></div>';

        return $html;
    }
}