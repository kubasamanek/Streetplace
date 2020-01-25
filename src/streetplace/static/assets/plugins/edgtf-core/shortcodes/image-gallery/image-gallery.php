<?php
namespace EdgeCore\CPT\Shortcodes\ImageGallery;

use EdgeCore\Lib;

class ImageGallery implements Lib\ShortcodeInterface
{
    private $base;

    public function __construct() {
        $this->base = 'edgtf_image_gallery';

        add_action('vc_before_init', array($this, 'vcMap'));
    }

    public function getBase() {
        return $this->base;
    }

    public function vcMap() {
        if (function_exists('vc_map')) {
            vc_map(
                array(
                    'name' => esc_html__('Edge Image Gallery', 'edgtf-core'),
                    'base' => $this->getBase(),
                    'category' => esc_html__('by EDGE', 'edgtf-core'),
                    'icon' => 'icon-wpb-image-gallery extended-custom-icon',
                    'allowed_container_element' => 'vc_row',
                    'params' => array(
                        array(
                            'type' => 'textfield',
                            'param_name' => 'custom_class',
                            'heading' => esc_html__('Custom CSS Class', 'edgtf-core'),
                            'description' => esc_html__('Style particular content element differently - add a class name and refer to it in custom CSS', 'edgtf-core')
                        ),
                        array(
                            'type' => 'dropdown',
                            'param_name' => 'type',
                            'heading' => esc_html__('Gallery Type', 'edgtf-core'),
                            'value' => array(
                                esc_html__('Image Grid', 'edgtf-core') => 'grid',
                                esc_html__('Masonry', 'edgtf-core') => 'masonry',
                                esc_html__('Slider', 'edgtf-core') => 'slider',
                                esc_html__('Carousel', 'edgtf-core') => 'carousel'
                            ),
                            'save_always' => true,
                            'admin_label' => true
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
                            'param_name' => 'title_bottom_margin',
                            'heading' => esc_html__('Bottom Margin (px or %)', 'edgtf-core')
                        ),
                        array(
                            'type' => 'attach_images',
                            'param_name' => 'images',
                            'heading' => esc_html__('Images', 'edgtf-core'),
                            'description' => esc_html__('Select images from media library', 'edgtf-core')
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
                            'type' => 'textarea',
                            'param_name' => 'custom_links',
                            'heading' => esc_html__('Custom Links', 'edgtf-core'),
                            'description' => esc_html__('Delimit links by comma', 'edgtf-core'),
                            'dependency' => array('element' => 'image_behavior', 'value' => array('custom-link'))
                        ),
                        array(
                            'type' => 'dropdown',
                            'param_name' => 'custom_link_target',
                            'heading' => esc_html__('Custom Link Target', 'edgtf-core'),
                            'value' => array_flip(hyperon_edgtf_get_link_target_array()),
                            'dependency' => array('element' => 'image_behavior', 'value' => array('custom-link'))
                        ),
                        array(
                            'type' => 'dropdown',
                            'param_name' => 'number_of_columns',
                            'heading' => esc_html__('Number of Columns', 'edgtf-core'),
                            'value' => array(
                                esc_html__('Two', 'edgtf-core') => 'two',
                                esc_html__('Three', 'edgtf-core') => 'three',
                                esc_html__('Four', 'edgtf-core') => 'four',
                                esc_html__('Five', 'edgtf-core') => 'five',
                                esc_html__('Six', 'edgtf-core') => 'six'
                            ),
                            'save_always' => true,
                            'dependency' => array('element' => 'type', 'value' => array('grid', 'masonry'))
                        ),
                        array(
                            'type' => 'dropdown',
                            'param_name' => 'space_between_items',
                            'heading' => esc_html__('Space Between Items', 'edgtf-core'),
                            'value' => array_flip(hyperon_edgtf_get_space_between_items_array()),
                            'save_always' => true
                        ),
                        array(
                            'type' => 'dropdown',
                            'param_name' => 'number_of_visible_items',
                            'heading' => esc_html__('Number Of Visible Items', 'edgtf-core'),
                            'value' => array(
                                esc_html__('One', 'edgtf-core') => '1',
                                esc_html__('Two', 'edgtf-core') => '2',
                                esc_html__('Three', 'edgtf-core') => '3',
                                esc_html__('Four', 'edgtf-core') => '4',
                                esc_html__('Five', 'edgtf-core') => '5',
                                esc_html__('Six', 'edgtf-core') => '6'
                            ),
                            'save_always' => true,
                            'dependency' => array('element' => 'type', 'value' => array('carousel')),
                            'group' => esc_html__('Slider Settings', 'edgtf-core')
                        ),
                        array(
                            'type' => 'dropdown',
                            'param_name' => 'slider_loop',
                            'heading' => esc_html__('Enable Slider Loop', 'edgtf-core'),
                            'value' => array_flip(hyperon_edgtf_get_yes_no_select_array(false, true)),
                            'save_always' => true,
                            'dependency' => array('element' => 'type', 'value' => array('slider', 'carousel')),
                            'group' => esc_html__('Slider Settings', 'edgtf-core')
                        ),
                        array(
                            'type' => 'dropdown',
                            'param_name' => 'slider_autoplay',
                            'heading' => esc_html__('Enable Slider Autoplay', 'edgtf-core'),
                            'value' => array_flip(hyperon_edgtf_get_yes_no_select_array(false, true)),
                            'save_always' => true,
                            'dependency' => array('element' => 'type', 'value' => array('slider', 'carousel')),
                            'group' => esc_html__('Slider Settings', 'edgtf-core')
                        ),
                        array(
                            'type' => 'textfield',
                            'param_name' => 'slider_speed',
                            'heading' => esc_html__('Slide Duration', 'edgtf-core'),
                            'description' => esc_html__('Default value is 5000 (ms)', 'edgtf-core'),
                            'dependency' => array('element' => 'type', 'value' => array('slider', 'carousel')),
                            'group' => esc_html__('Slider Settings', 'edgtf-core')
                        ),
                        array(
                            'type' => 'textfield',
                            'param_name' => 'slider_speed_animation',
                            'heading' => esc_html__('Slide Animation Duration', 'edgtf-core'),
                            'description' => esc_html__('Speed of slide animation in milliseconds. Default value is 600.', 'edgtf-core'),
                            'dependency' => array('element' => 'type', 'value' => array('slider', 'carousel')),
                            'group' => esc_html__('Slider Settings', 'edgtf-core')
                        ),
                        array(
                            'type' => 'dropdown',
                            'param_name' => 'slider_padding',
                            'heading' => esc_html__('Enable Slider Padding', 'edgtf-core'),
                            'description' => esc_html__('Padding left and right on stage (can see neighbours).', 'edgtf-core'),
                            'value' => array_flip(hyperon_edgtf_get_yes_no_select_array(false)),
                            'save_always' => true,
                            'dependency' => array('element' => 'type', 'value' => array('slider')),
                            'group' => esc_html__('Slider Settings', 'edgtf-core')
                        ),
                        array(
                            'type' => 'dropdown',
                            'param_name' => 'slider_navigation',
                            'heading' => esc_html__('Enable Slider Navigation Arrows', 'edgtf-core'),
                            'value' => array_flip(hyperon_edgtf_get_yes_no_select_array(false, true)),
                            'save_always' => true,
                            'dependency' => array('element' => 'type', 'value' => array('slider', 'carousel')),
                            'group' => esc_html__('Slider Settings', 'edgtf-core')
                        ),
                        array(
                            'type' => 'dropdown',
                            'param_name' => 'slider_pagination',
                            'heading' => esc_html__('Enable Slider Pagination', 'edgtf-core'),
                            'value' => array_flip(hyperon_edgtf_get_yes_no_select_array(false, true)),
                            'save_always' => true,
                            'dependency' => array('element' => 'type', 'value' => array('slider', 'carousel')),
                            'group' => esc_html__('Slider Settings', 'edgtf-core')
                        )
                    )
                )
            );
        }
    }

    public function render($atts, $content = null) {
        $args = array(
            'custom_class' => '',
            'type' => 'grid',
            'title' => '',
            'title_separator' => '',
            'title_tag' => 'h2',
            'title_color' => '',
            'title_bottom_margin' => '',
            'images' => '',
            'image_size' => 'thumbnail',
            'enable_image_shadow' => 'no',
            'image_behavior' => '',
            'custom_links' => '',
            'custom_link_target' => '_self',
            'number_of_columns' => 'three',
            'space_between_items' => 'normal',
            'number_of_visible_items' => '1',
            'slider_loop' => 'yes',
            'slider_autoplay' => 'yes',
            'slider_speed' => '5000',
            'slider_speed_animation' => '600',
            'slider_padding' => 'no',
            'slider_navigation' => 'yes',
            'slider_pagination' => 'yes'
        );
        $params = shortcode_atts($args, $atts);

        $params['holder_classes'] = $this->getHolderClasses($params, $args);
        $params['inner_classes'] = $this->getInnerClasses($params, $args);
        $params['slider_data'] = $this->getSliderData($params);

        $params['type'] = !empty($params['type']) ? $params['type'] : $args['type'];
        $params['title_tag'] = !empty($params['title_tag']) ? $params['title_tag'] : $args['title_tag'];
        $params['title_styles'] = $this->getTitleStyles($params);
        $params['images'] = $this->getGalleryImages($params);
        $params['image_size'] = $this->getImageSize($params['image_size']);
        $params['image_behavior'] = !empty($params['image_behavior']) ? $params['image_behavior'] : $args['image_behavior'];
        $params['custom_links'] = $this->getCustomLinks($params);
        $params['custom_link_target'] = !empty($params['custom_link_target']) ? $params['custom_link_target'] : $args['custom_link_target'];

        $html = '';
        if (!empty($params['title'])) {
            $html .= edgtf_core_get_shortcode_module_template_part('templates/title', 'image-gallery', '', $params);;
        }
        $html .= edgtf_core_get_shortcode_module_template_part('templates/' . $params['type'], 'image-gallery', '', $params);

        return $html;
    }

    private function getTitleStyles($params) {
        $styles = array();

        if (!empty($params['title_color'])) {
            $styles[] = 'color: ' . $params['title_color'];
        }

        if ($params['title_bottom_margin'] !== '') {
            if (hyperon_edgtf_string_ends_with($params['title_bottom_margin'], '%') || hyperon_edgtf_string_ends_with($params['title_bottom_margin'], 'px')) {
                $styles[] = 'margin-bottom: ' . $params['title_bottom_margin'];
            } else {
                $styles[] = 'margin-bottom: ' . hyperon_edgtf_filter_px($params['title_bottom_margin']) . 'px';
            }
        }

        return implode(';', $styles);
    }

    private function getHolderClasses($params, $args) {
        $holderClasses = array();

        $holderClasses[] = !empty($params['custom_class']) ? esc_attr($params['custom_class']) : '';
        $holderClasses[] = !empty($params['type']) ? 'edgtf-ig-' . $params['type'] . '-type' : 'edgtf-ig-' . $args['type'] . '-type';
        $holderClasses[] = !empty($params['space_between_items']) ? 'edgtf-' . $params['space_between_items'] . '-space' : 'edgtf-' . $args['space_between_items'] . '-space';
        $holderClasses[] = $params['enable_image_shadow'] === 'yes' ? 'edgtf-has-shadow' : '';
        $holderClasses[] = !empty($params['image_behavior']) ? 'edgtf-image-behavior-' . $params['image_behavior'] : '';

        return implode(' ', $holderClasses);
    }

    private function getInnerClasses($params, $args) {
        $holderClasses = array();

        $holderClasses[] = $params['type'] === 'masonry' ? 'edgtf-ig-masonry' : 'edgtf-ig-grid';
        $holderClasses[] = !empty($params['number_of_columns']) ? 'edgtf-ig-' . $params['number_of_columns'] . '-columns' : 'edgtf-ig-' . $args['number_of_columns'] . '-columns';

        return implode(' ', $holderClasses);
    }

    private function getSliderData($params) {
        $slider_data = array();

        $slider_data['data-number-of-items'] = $params['number_of_visible_items'] !== '' && $params['type'] === 'carousel' ? $params['number_of_visible_items'] : '1';
        $slider_data['data-enable-loop'] = !empty($params['slider_loop']) ? $params['slider_loop'] : '';
        $slider_data['data-enable-autoplay'] = !empty($params['slider_autoplay']) ? $params['slider_autoplay'] : '';
        $slider_data['data-slider-speed'] = !empty($params['slider_speed']) ? $params['slider_speed'] : '5000';
        $slider_data['data-slider-speed-animation'] = !empty($params['slider_speed_animation']) ? $params['slider_speed_animation'] : '600';
        $slider_data['data-slider-padding'] = !empty($params['slider_padding']) ? $params['slider_padding'] : '';
        $slider_data['data-enable-navigation'] = !empty($params['slider_navigation']) ? $params['slider_navigation'] : '';
        $slider_data['data-enable-pagination'] = !empty($params['slider_pagination']) ? $params['slider_pagination'] : '';

        return $slider_data;
    }

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
            $image['alt'] = get_post_meta($id, '_wp_attachment_image_alt', true);

            $images[$i] = $image;
            $i++;
        }

        return $images;
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

    private function getCustomLinks($params) {
        $custom_links = array();

        if (!empty($params['custom_links'])) {
            $custom_links = array_map('trim', explode(',', $params['custom_links']));
        }

        return $custom_links;
    }
}