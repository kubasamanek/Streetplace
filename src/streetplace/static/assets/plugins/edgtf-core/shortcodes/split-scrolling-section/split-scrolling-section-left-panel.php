<?php
namespace EdgeCore\CPT\Shortcodes\SplitScrollingSectionLeftPanel;

use EdgeCore\Lib;

class SplitScrollingSectionLeftPanel implements Lib\ShortcodeInterface
{
    private $base;

    function __construct() {
        $this->base = 'edgtf_split_scrolling_section_left_panel';
        add_action('vc_before_init', array($this, 'vcMap'));
    }

    public function getBase() {
        return $this->base;
    }

    public function vcMap() {
        vc_map(
            array(
                'name' => esc_html__('Edge Left Fixed Panel', 'edgtf-core'),
                'base' => $this->base,
                'as_parent' => array('only' => 'edgtf_split_scrolling_section_content_item'),
                'as_child' => array('only' => 'edgtf_split_scrolling_section'),
                'content_element' => true,
                'category' => esc_html__('by EDGE', 'edgtf-core'),
                'icon' => 'icon-wpb-split-scrolling-section-left-panel extended-custom-icon',
                'show_settings_on_create' => false,
                'js_view' => 'VcColumnView',
                'params' => array(
                    array(
                        'type' => 'attach_images',
                        'param_name' => 'images',
                        'heading' => esc_html__('Background Images', 'edgtf-core'),
                        'description' => esc_html__('Select images from media library', 'edgtf-core')
                    ),
                ),
            )
        );
    }

    public function render($atts, $content = null) {
        $args = array(
            'images' => '',
        );

        $params = shortcode_atts($args, $atts);

        $params['images'] = $this->getImages($params);

        $html = '<div class="edgtf-sss-ms-left">';
        $html .= do_shortcode($content);
        $html .= edgtf_core_get_shortcode_module_template_part('templates/split-scrolling-section-left-panel-background-template', 'split-scrolling-section', '', $params);
        $html .= '</div>';

        return $html;
    }

    private function getImages($params) {
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

            $images[$i] = $image;
            $i++;
        }

        return $images;
    }
}
