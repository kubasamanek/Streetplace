<?php
namespace EdgeCore\CPT\Shortcodes\ImageWithText;

use EdgeCore\Lib;

class ImageWithText implements Lib\ShortcodeInterface
{
    private $base;

    public function __construct() {
        $this->base = 'edgtf_image_with_text';

        add_action('vc_before_init', array($this, 'vcMap'));
    }

    public function getBase() {
        return $this->base;
    }

    public function vcMap() {
        if (function_exists('vc_map')) {
            vc_map(
                array(
                    'name' => esc_html__('Edge Image With Text', 'edgtf-core'),
                    'base' => $this->getBase(),
                    'category' => esc_html__('by EDGE', 'edgtf-core'),
                    'icon' => 'icon-wpb-image-with-text extended-custom-icon',
                    'allowed_container_element' => 'vc_row',
                    'params' => array(
                        array(
                            'type' => 'textfield',
                            'param_name' => 'custom_class',
                            'heading' => esc_html__('Custom CSS Class', 'edgtf-core'),
                            'description' => esc_html__('Style particular content element differently - add a class name and refer to it in custom CSS', 'edgtf-core')
                        ),
                        array(
                            'type' => 'attach_image',
                            'param_name' => 'image',
                            'heading' => esc_html__('Image', 'edgtf-core'),
                            'description' => esc_html__('Select image from media library', 'edgtf-core')
                        ),
                        array(
                            'type' => 'textfield',
                            'param_name' => 'image_size',
                            'heading' => esc_html__('Image Size', 'edgtf-core'),
                            'description' => esc_html__('Enter image size. Example: thumbnail, medium, large, full or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height). Leave empty to use "thumbnail" size', 'edgtf-core')
                        ),
                        array(
                            'type' => 'dropdown',
                            'param_name' => 'enable_image_shadow',
                            'heading' => esc_html__('Enable Image Shadow', 'edgtf-core'),
                            'value' => array_flip(hyperon_edgtf_get_yes_no_select_array(false)),
                            'save_always' => true
                        ),
                        array(
                            'type' => 'dropdown',
                            'param_name' => 'image_behavior',
                            'heading' => esc_html__('Image Behavior', 'edgtf-core'),
                            'value' => array(
                                esc_html__('None', 'edgtf-core') => '',
                                esc_html__('Open Lightbox', 'edgtf-core') => 'lightbox',
                                esc_html__('Open Custom Link', 'edgtf-core') => 'custom-link',
                                esc_html__('Zoom', 'edgtf-core') => 'zoom',
                                esc_html__('Grayscale', 'edgtf-core') => 'grayscale'
                            )
                        ),
                        array(
                            'type' => 'textfield',
                            'param_name' => 'custom_link',
                            'heading' => esc_html__('Custom Link', 'edgtf-core'),
                            'dependency' => Array('element' => 'image_behavior', 'value' => array('custom-link'))
                        ),
                        array(
                            'type' => 'textfield',
                            'param_name' => 'custom_link_text',
                            'heading' => esc_html__('Custom Link Text', 'edgtf-core'),
                            'dependency' => Array('element' => 'image_behavior', 'value' => array('custom-link'))
                        ),
                        array(
                            'type' => 'dropdown',
                            'param_name' => 'custom_link_target',
                            'heading' => esc_html__('Custom Link Target', 'edgtf-core'),
                            'value' => array_flip(hyperon_edgtf_get_link_target_array()),
                            'dependency' => Array('element' => 'image_behavior', 'value' => array('custom-link'))
                        ),
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
                            'dependency' => array('element' => 'title', 'not_empty' => true)
                        ),
                        array(
                            'type' => 'colorpicker',
                            'param_name' => 'title_color',
                            'heading' => esc_html__('Title Color', 'edgtf-core'),
                            'dependency' => array('element' => 'title', 'not_empty' => true)
                        ),
                        array(
                            'type' => 'textfield',
                            'param_name' => 'title_top_margin',
                            'heading' => esc_html__('Title Top Margin (px)', 'edgtf-core'),
                            'dependency' => array('element' => 'title', 'not_empty' => true)
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
                            'dependency' => array('element' => 'text', 'not_empty' => true)
                        ),
                        array(
                            'type' => 'textfield',
                            'param_name' => 'text_top_margin',
                            'heading' => esc_html__('Text Top Margin (px)', 'edgtf-core'),
                            'dependency' => array('element' => 'text', 'not_empty' => true)
                        )
                    )
                )
            );
        }
    }

    public function render($atts, $content = null) {
        $args = array(
            'custom_class' => '',
            'image' => '',
            'image_size' => 'full',
            'enable_image_shadow' => 'no',
            'image_behavior' => '',
            'custom_link' => '',
            'custom_link_text' => '',
            'custom_link_target' => '_self',
            'title' => '',
            'title_separator' => '',
            'title_tag' => 'h4',
            'title_color' => '',
            'title_top_margin' => '',
            'text' => '',
            'text_color' => '',
            'text_top_margin' => ''
        );
        $params = shortcode_atts($args, $atts);

        $params['holder_classes'] = $this->getHolderClasses($params);
        $params['image'] = $this->getImage($params);
        $params['image_size'] = $this->getImageSize($params['image_size']);
        $params['image_behavior'] = !empty($params['image_behavior']) ? $params['image_behavior'] : $args['image_behavior'];
        $params['custom_link_target'] = !empty($params['custom_link_target']) ? $params['custom_link_target'] : $args['custom_link_target'];
        $params['title_tag'] = !empty($params['title_tag']) ? $params['title_tag'] : $args['title_tag'];
        $params['title_styles'] = $this->getTitleStyles($params);
        $params['text_styles'] = $this->getTextStyles($params);
        $params['button_params'] = $this->getButtonParameters($params);

        $html = edgtf_core_get_shortcode_module_template_part('templates/image-with-text', 'image-with-text', '', $params);

        return $html;
    }

    private function getHolderClasses($params) {
        $holderClasses = array();

        $holderClasses[] = !empty($params['custom_class']) ? esc_attr($params['custom_class']) : '';
        $holderClasses[] = $params['enable_image_shadow'] === 'yes' ? 'edgtf-has-shadow' : '';
        $holderClasses[] = !empty($params['image_behavior']) ? 'edgtf-image-behavior-' . $params['image_behavior'] : '';

        return implode(' ', $holderClasses);
    }

    private function getImage($params) {
        $image = array();

        if (!empty($params['image'])) {
            $id = $params['image'];

            $image['image_id'] = $id;
            $image_original = wp_get_attachment_image_src($id, 'full');
            $image['url'] = $image_original[0];
            $image['alt'] = get_post_meta($id, '_wp_attachment_image_alt', true);
        }

        return $image;
    }

    private function getImageSize($image_size) {
        $image_size = trim($image_size);
        //Find digits
        preg_match_all('/\d+/', $image_size, $matches);
        if (in_array($image_size, array('thumbnail', 'thumb', 'medium', 'large', 'full'))) {
            return $image_size;
        } elseif (!empty($matches[0])) {
            return array(
                $matches[0][0],
                $matches[0][1]
            );
        } else {
            return 'thumbnail';
        }
    }

    private function getTitleStyles($params) {
        $styles = array();

        if (!empty($params['title_color'])) {
            $styles[] = 'color: ' . $params['title_color'];
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

    private function getButtonParameters($params) {
        $button_params_array = array();

        if (!empty($params['custom_link_text'])) {
            $button_params_array['text'] = (!empty($params['custom_link_text'])) ? $params['custom_link_text'] : '';
        }

        $button_params_array['type'] = 'outline';
        $button_params_array['size'] = 'medium';
        $button_params_array['link'] = '#';
        $button_params_array['type'] = 'gapped_outline';

        return $button_params_array;
    }
}