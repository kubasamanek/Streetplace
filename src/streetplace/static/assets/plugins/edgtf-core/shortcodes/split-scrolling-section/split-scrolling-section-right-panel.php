<?php
namespace EdgeCore\CPT\Shortcodes\SplitScrollingSectionRightPanel;

use EdgeCore\Lib;

class SplitScrollingSectionRightPanel implements Lib\ShortcodeInterface
{
    private $base;

    function __construct() {
        $this->base = 'edgtf_split_scrolling_section_right_panel';
        add_action('vc_before_init', array($this, 'vcMap'));
    }

    public function getBase() {
        return $this->base;
    }

    public function vcMap() {
        vc_map(
            array(
                'name' => esc_html__('Edge Right Scrolling Panel', 'edgtf-core'),
                'base' => $this->base,
                'as_parent' => array('only' => 'edgtf_split_scrolling_section_content_item'),
                'as_child' => array('only' => 'edgtf_split_scrolling_section'),
                'content_element' => true,
                'category' => esc_html__('by EDGE', 'edgtf-core'),
                'icon' => 'icon-wpb-split-scrolling-section-right-panel extended-custom-icon',
                'show_settings_on_create' => false,
                'js_view' => 'VcColumnView',
                'params' => array(
                    array(
                        'type' => 'attach_image',
                        'param_name' => 'image',
                        'heading' => esc_html__('Background Image', 'edgtf-core'),
                        'description' => esc_html__('Select images from media library', 'edgtf-core')
                    ),
                ),
            )
        );
    }

    public function render($atts, $content = null) {
        $args = array(
            'image' => ''
        );

        $params = shortcode_atts($args, $atts);

        $params['image'] = $this->getImage($params);
        $params['holder_style'] = $this->getHolderStyles($params);

        $html = '<div class="edgtf-sss-ms-right" ' . hyperon_edgtf_get_inline_style($params['holder_style']) . '>';

        $html .= do_shortcode($content);
        $html .= '</div>';

        return $html;
    }

    private function getImage($params) {
        $image = array();

        if (!empty($params['image'])) {
            $id = $params['image'];

            $image['image_id'] = $id;
            $image_original = wp_get_attachment_image_src($id, 'full');
            $image['url'] = $image_original[0];
        }

        return $image;
    }

    private function getHolderStyles($params) {
        $styles = array();

        $styles[] = !empty($params['image']) ? 'background-image:url(' . $params['image']['url'] . ')' : '';

        return implode(';', $styles);
    }
}
