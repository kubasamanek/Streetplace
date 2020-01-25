<?php

namespace EdgeCore\CPT\Shortcodes\CardsGallery;

use EdgeCore\Lib;

/**
 * Class CardsGallery
 */
class CardsGallery implements Lib\ShortcodeInterface
{
    /**
     * @var string
     */
    private $base;

    /**
     * ZoomingSlider constructor.
     */
    public function __construct() {
        $this->base = 'edgtf_cards_gallery';

        add_action('vc_before_init', array($this, 'vcMap'));
    }

    /**
     * @return string
     */
    public function getBase() {
        return $this->base;
    }

    /**
     *
     */
    public function vcMap() {
        vc_map(array(
            'name' => esc_html__('Edge Cards Gallery', 'edgtf-core'),
            'base' => $this->base,
            'category' => esc_html__( 'by EDGE', 'edgtf-core' ),
            'icon' => 'icon-wpb-cards-gallery extended-custom-icon',
            'allowed_container_element' => 'vc_row',
            'params' => array(
                array(
                    'type' => 'textfield',
                    'param_name' => 'custom_class',
                    'heading' => esc_html__('Custom CSS Class', 'edgtf-core'),
                    'description' => esc_html__('Style particular content element differently - add a class name and refer to it in custom CSS', 'edgtf-core')
                ),
                array(
                    'type' => 'attach_images',
                    'heading' => esc_html__('Images', 'edgtf-core'),
                    'param_name' => 'images',
                    'description' => esc_html__('Select images from media library', 'edgtf-core')
                ),
                array(
                    'type' => 'dropdown',
                    'param_name' => 'enable_image_shadow',
                    'heading' => esc_html__('Enable Image Shadow', 'edgtf-core'),
                    'value' => array_flip(hyperon_edgtf_get_yes_no_select_array(false)),
                    'save_always' => true
                ),
                array(
                    'type' => 'colorpicker',
                    'heading' => esc_html__('Cards Background Color', 'edgtf-core'),
                    'param_name' => 'background_color'
                ),
                array(
                    'type' => 'dropdown',
                    'heading' => esc_html__('Layout', 'edgtf-core'),
                    'param_name' => 'layout',
                    'value' => array(
                        esc_html__('Stack Images Left', 'edgtf-core') => 'stack-images-left',
                        esc_html__('Stack Images Right', 'edgtf-core') => 'stack-images-right',
                    ),
                    'save_always' => true,
                    'admin_label' => true
                ),
                array(
                    'type' => 'dropdown',
                    'heading' => esc_html__('Bundle Animation', 'edgtf-core'),
                    'param_name' => 'bundle_animation',
                    'value' => array(
                        esc_html__('No', 'edgtf-core') => 'no',
                        esc_html__('Yes', 'edgtf-core') => 'yes'
                    ),
                    'save_always' => true,
                    'admin_label' => true
                ),
                array(
                    'type' => 'textfield',
                    'param_name' => 'title',
                    'heading' => esc_html__('Title', 'edgtf-core'),
                    'admin_label' => true
                ),
                array(
                    'type' => 'checkbox',
                    'param_name' => 'separator',
                    'heading' => esc_html__('Show separator below title', 'edgtf-core'),
                    'admin_label' => true,
                    'value' => 'yes',
                    'dependency' => array('element' => 'title', 'not_empty' => true),
                ),
                array(
                    'type' => 'dropdown',
                    'param_name' => 'title_tag',
                    'heading' => esc_html__('Title Tag', 'edgtf-core'),
                    'value' => array_flip(hyperon_edgtf_get_title_tag(true)),
                    'save_always' => true,
                    'dependency' => array('element' => 'title', 'not_empty' => true),
                    'group' => esc_html__('Title Style', 'edgtf-core')
                ),
                array(
                    'type' => 'colorpicker',
                    'param_name' => 'title_color',
                    'heading' => esc_html__('Title Color', 'edgtf-core'),
                    'dependency' => array('element' => 'title', 'not_empty' => true),
                    'group' => esc_html__('Title Style', 'edgtf-core')
                ),
                array(
                    'type' => 'textarea',
                    'param_name' => 'text',
                    'heading' => esc_html__('Text', 'edgtf-core')
                ),
                array(
                    'type' => 'dropdown',
                    'param_name' => 'text_tag',
                    'heading' => esc_html__('Text Tag', 'edgtf-core'),
                    'value' => array_flip(hyperon_edgtf_get_title_tag(true, array('p' => 'p'))),
                    'save_always' => true,
                    'dependency' => array('element' => 'text', 'not_empty' => true),
                    'group' => esc_html__('Text Style', 'edgtf-core')
                ),
                array(
                    'type' => 'colorpicker',
                    'param_name' => 'text_color',
                    'heading' => esc_html__('Text Color', 'edgtf-core'),
                    'dependency' => array('element' => 'text', 'not_empty' => true),
                    'group' => esc_html__('Text Style', 'edgtf-core')
                ),
                array(
                    'type' => 'textfield',
                    'param_name' => 'text_font_size',
                    'heading' => esc_html__('Text Font Size (px)', 'edgtf-core'),
                    'dependency' => array('element' => 'text', 'not_empty' => true),
                    'group' => esc_html__('Text Style', 'edgtf-core')
                ),
                array(
                    'type' => 'textfield',
                    'param_name' => 'text_line_height',
                    'heading' => esc_html__('Text Line Height (px)', 'edgtf-core'),
                    'dependency' => array('element' => 'text', 'not_empty' => true),
                    'group' => esc_html__('Text Style', 'edgtf-core')
                ),
                array(
                    'type' => 'dropdown',
                    'param_name' => 'text_font_weight',
                    'heading' => esc_html__('Text Font Weight', 'edgtf-core'),
                    'value' => array_flip(hyperon_edgtf_get_font_weight_array(true)),
                    'save_always' => true,
                    'dependency' => array('element' => 'text', 'not_empty' => true),
                    'group' => esc_html__('Text Style', 'edgtf-core')
                ),
                array(
                    'type' => 'textfield',
                    'param_name' => 'text_margin',
                    'heading' => esc_html__('Text Margin', 'edgtf-core'),
                    'description' => esc_html__('Please insert padding in format top right bottom left. You can use px or %', 'edgtf-core'),
                    'dependency' => array('element' => 'text', 'not_empty' => true),
                    'group' => esc_html__('Text Style', 'edgtf-core')
                ),
                array(
                    'type' => 'textfield',
                    'param_name' => 'link',
                    'heading' => esc_html__('Link', 'edgtf-core'),
                ),
                array(
                    'type' => 'textfield',
                    'param_name' => 'link_text',
                    'heading' => esc_html__('Link Text', 'edgtf-core'),
                    'dependency' => array('element' => 'link', 'not_empty' => true),
                ),
                array(
                    'type' => 'colorpicker',
                    'param_name' => 'link_color',
                    'heading' => esc_html__('Link Color', 'edgtf-core'),
                    'dependency' => array('element' => 'link', 'not_empty' => true),
                    'group' => esc_html__('Link Style', 'edgtf-core')
                ),
                array(
                    'type' => 'dropdown',
                    'param_name' => 'link_target',
                    'heading' => esc_html__('Link Target', 'edgtf-core'),
                    'value' => array_flip(hyperon_edgtf_get_link_target_array()),
                    'save_always' => true,
                    'dependency' => array('element' => 'link', 'not_empty' => true),
                    'group' => esc_html__('Link Style', 'edgtf-core')
                ),
            )
        ));
    }

    /**
     * @param array $atts
     * @param null $content
     *
     * @return string
     */
    public function render($atts, $content = null) {
        $args = array(
            'custom_class' => '',
            'images' => '',
            'enable_image_shadow' => 'no',
            'background_color' => '',
            'layout' => '',
            'bundle_animation' => 'no',
            'title' => '',
            'separator' => '',
            'title_tag' => 'h2',
            'title_color' => '',
            'text' => '',
            'text_tag' => 'h5',
            'text_color' => '',
            'text_font_size' => '',
            'text_line_height' => '',
            'text_font_weight' => '',
            'text_margin' => '',
            'link' => '',
            'link_text' => '',
            'link_color' => '',
            'link_target' => '',
        );

        $params = shortcode_atts($args, $atts);
        $params['images'] = $this->getGalleryImages($params);
        $params['holder_classes'] = $this->getHolderClasses($params);
        if ($params['background_color'] !== '') {
            $params['background_color'] = 'background-color:' . $params['background_color'];
        }

        $params['section_title_params'] = array();

        $params['section_title_params']['title'] = $params['title'];
        $params['section_title_params']['separator'] = $params['separator'];
        $params['section_title_params']['title_tag'] = !empty($params['title_tag']) ? $params['title_tag'] : $args['title_tag'];
        $params['section_title_params']['title_styles'] = $this->getSTTitleStyles($params);
        $params['section_title_params']['title_color'] = $params['title_color'];
        $params['section_title_params']['text'] = $params['text'];
        $params['section_title_params']['text_tag'] = !empty($params['text_tag']) ? $params['text_tag'] : $args['text_tag'];
        $params['section_title_params']['text_styles'] = $this->getSTTextStyles($params);

        // for separator
        if ($params['layout'] == 'stack-images-left' || $params['layout'] == 'shuffled-left') {
            $params['section_title_params']['position'] = 'left';
        } else {
            $params['section_title_params']['position'] = 'right';
        }

        $params['button_params'] = array();

        $params['section_title_params']['button_link'] = $params['link'];
        $params['section_title_params']['button_text'] = $params['link_text'];
        $params['section_title_params']['button_target'] = $params['link_target'];
        $params['section_title_params']['button_color'] = $params['link_color'];
        $params['section_title_params']['button_type'] = 'simple';

        return edgtf_core_get_shortcode_module_template_part('templates/cards-gallery', 'cards-gallery', '', $params);
    }

    private function getSTTextStyles($params) {
        $styles = array();

        if (!empty($params['text_color'])) {
            $styles[] = 'color: ' . $params['text_color'];
        }

        if (!empty($params['text_font_size'])) {
            $styles[] = 'font-size: ' . hyperon_edgtf_filter_px($params['text_font_size']) . 'px';
        }

        if (!empty($params['text_line_height'])) {
            $styles[] = 'line-height: ' . hyperon_edgtf_filter_px($params['text_line_height']) . 'px';
        }

        if (!empty($params['text_font_weight'])) {
            $styles[] = 'font-weight: ' . $params['text_font_weight'];
        }

        if ($params['text_margin'] !== '') {
            $styles[] = 'margin: ' . $params['text_margin'];
        }

        return implode(';', $styles);
    }

    private function getSTTitleStyles($params) {
        $styles = array();

        if (!empty($params['title_color'])) {
            $styles[] = 'color: ' . $params['title_color'];
        }

        return implode(';', $styles);
    }

    /**
     * Return images for slider
     *
     * @param $params
     *
     * @return array
     */
    private function getGalleryImages($params) {
        $image_ids = array();
        $images = array();
        $i = 0;

        if ($params['images'] !== '') {
            $image_ids = explode(',', $params['images']);
        }

        foreach ($image_ids as $id) {

            $image['image_id'] = $id;
            $image_original = wp_get_attachment_image_src($id, 'full');
            $image['url'] = $image_original[0];
            $image['title'] = get_the_title($id);
            $image['image_link'] = get_post_meta($id, 'attachment_image_link', true);
            $image['image_target'] = get_post_meta($id, 'attachment_image_target', true);

            $image_dimensions = hyperon_edgtf_get_image_dimensions($image['url']);
            if (is_array($image_dimensions) && array_key_exists('height', $image_dimensions)) {

                if (!empty($image_dimensions['height']) && $image_dimensions['width']) {
                    $image['height'] = $image_dimensions['height'];
                    $image['width'] = $image_dimensions['width'];
                }
            }

            $images[$i] = $image;
            $i++;
        }

        return $images;

    }

    private function getHolderClasses($params) {
        $classes = array('edgtf-cards-gallery-holder');

        if ($params['bundle_animation'] == 'yes') {
            $classes[] = 'edgtf-bundle-animation';
        }

        $classes[] = $params['enable_image_shadow'] === 'yes' ? 'edgtf-has-shadow' : '';
        $classes[] = 'edgtf-' . $params['layout'];
        $classes[] = 'clearfix';

        return $classes;
    }
}