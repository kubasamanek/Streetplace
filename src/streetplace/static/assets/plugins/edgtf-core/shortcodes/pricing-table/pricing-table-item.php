<?php
namespace EdgeCore\CPT\Shortcodes\PricingTable;

use EdgeCore\Lib;

class PricingTableItem implements Lib\ShortcodeInterface
{
    private $base;

    function __construct() {
        $this->base = 'edgtf_pricing_table_item';
        add_action('vc_before_init', array($this, 'vcMap'));
    }

    public function getBase() {
        return $this->base;
    }

    public function vcMap() {
        if (function_exists('vc_map')) {
            vc_map(
                array(
                    'name' => esc_html__('Edge Pricing Table Item', 'edgtf-core'),
                    'base' => $this->base,
                    'icon' => 'icon-wpb-pricing-table-item extended-custom-icon',
                    'category' => esc_html__('by EDGE', 'edgtf-core'),
                    'allowed_container_element' => 'vc_row',
                    'as_child' => array('only' => 'edgtf_pricing_table'),
                    'params' => array(
                        array(
                            'type' => 'textfield',
                            'param_name' => 'custom_class',
                            'heading' => esc_html__('Custom CSS Class', 'edgtf-core'),
                            'description' => esc_html__('Style particular content element differently - add a class name and refer to it in custom CSS', 'edgtf-core')
                        ),
                        array(
                            'type' => 'colorpicker',
                            'param_name' => 'content_background_color',
                            'heading' => esc_html__('Content Background Color', 'edgtf-core')
                        ),
                        array(
                            'type' => 'colorpicker',
                            'param_name' => 'content_border_color',
                            'heading' => esc_html__('Content Border Color', 'edgtf-core')
                        ),
                        array(
                            'type' => 'textfield',
                            'param_name' => 'title',
                            'heading' => esc_html__('Title', 'edgtf-core'),
                            'value' => esc_html__('Basic Plan', 'edgtf-core'),
                            'save_always' => true
                        ),
                        array(
                            'type' => 'colorpicker',
                            'param_name' => 'title_color',
                            'heading' => esc_html__('Title Color', 'edgtf-core'),
                            'dependency' => array('element' => 'title', 'not_empty' => true)
                        ),
                        array(
                            'type' => 'textfield',
                            'param_name' => 'price',
                            'heading' => esc_html__('Price', 'edgtf-core')
                        ),
                        array(
                            'type' => 'colorpicker',
                            'param_name' => 'price_color',
                            'heading' => esc_html__('Price Color', 'edgtf-core'),
                            'dependency' => array('element' => 'price', 'not_empty' => true)
                        ),
                        array(
                            'type' => 'textfield',
                            'param_name' => 'currency',
                            'heading' => esc_html__('Currency', 'edgtf-core'),
                            'description' => esc_html__('Default mark is $', 'edgtf-core')
                        ),
                        array(
                            'type' => 'colorpicker',
                            'param_name' => 'currency_color',
                            'heading' => esc_html__('Currency Color', 'edgtf-core'),
                            'dependency' => array('element' => 'currency', 'not_empty' => true)
                        ),
                        array(
                            'type' => 'textfield',
                            'param_name' => 'price_period',
                            'heading' => esc_html__('Price Period', 'edgtf-core'),
                            'description' => esc_html__('Default label is monthly', 'edgtf-core')
                        ),
                        array(
                            'type' => 'checkbox',
                            'param_name' => 'price_period_separator',
                            'heading' => esc_html__('Separator Below Price Period?', 'edgtf-core'),
                            'value' => 'true',
                            'std' => 'true',
                            'save_always' => true,
                        ),
                        array(
                            'type' => 'colorpicker',
                            'param_name' => 'price_period_color',
                            'heading' => esc_html__('Price Period Color', 'edgtf-core'),
                            'dependency' => array('element' => 'price_period', 'not_empty' => true)
                        ),
                        array(
                            'type' => 'textfield',
                            'param_name' => 'button_text',
                            'heading' => esc_html__('Button Text', 'edgtf-core'),
                            'value' => esc_html__('BUY NOW', 'edgtf-core'),
                            'save_always' => true
                        ),
                        array(
                            'type' => 'textfield',
                            'param_name' => 'link',
                            'heading' => esc_html__('Button Link', 'edgtf-core'),
                            'dependency' => array('element' => 'button_text', 'not_empty' => true)
                        ),
                        array(
                            'type' => 'textarea_html',
                            'param_name' => 'content',
                            'heading' => esc_html__('Content', 'edgtf-core'),
                            'value' => '<li>content content content</li><li>content content content</li><li>content content content</li>'
                        )
                    )
                )
            );
        }
    }

    public function render($atts, $content = null) {
        $args = array(
            'custom_class' => '',
            'content_background_color' => '',
            'content_border_color' => '',
            'title' => '',
            'title_color' => '',
            'price' => '100',
            'price_color' => '',
            'currency' => '$',
            'currency_color' => '',
            'price_period' => 'monthly',
            'price_period_separator' => '',
            'price_period_color' => '',
            'button_text' => '',
            'link' => '',
        );
        $params = shortcode_atts($args, $atts);

        $params['content'] = preg_replace('#^<\/p>|<p>$#', '', $content); // delete p tag before and after content
        $params['holder_classes'] = $this->getHolderClasses($params);
        $params['holder_styles'] = $this->getHolderStyles($params);
        $params['title_styles'] = $this->getTitleStyles($params);
        $params['price_styles'] = $this->getPriceStyles($params);
        $params['currency_styles'] = $this->getCurrencyStyles($params);
        $params['price_period_styles'] = $this->getPricePeriodStyles($params);

        $html = edgtf_core_get_shortcode_module_template_part('templates/pricing-table-template', 'pricing-table', '', $params);

        return $html;
    }

    private function getHolderClasses($params) {
        $holderClasses = array();

        $holderClasses[] = !empty($params['custom_class']) ? esc_attr($params['custom_class']) : '';

        return implode(' ', $holderClasses);
    }

    private function getHolderStyles($params) {
        $itemStyle = array();

        if (!empty($params['content_background_color'])) {
            $itemStyle[] = 'background-color: ' . $params['content_background_color'];
        }
        if (!empty($params['content_border_color'])) {
            $itemStyle[] = 'border-color:' . $params['content_border_color'];
            $itemStyle[] = 'border-image:none';
        }

        return implode(';', $itemStyle);
    }

    private function getTitleStyles($params) {
        $itemStyle = array();

        if (!empty($params['title_color'])) {
            $itemStyle[] = 'color: ' . $params['title_color'];
        }

        return implode(';', $itemStyle);
    }

    private function getPriceStyles($params) {
        $itemStyle = array();

        if (!empty($params['price_color'])) {
            $itemStyle[] = 'color: ' . $params['price_color'];
        }

        return implode(';', $itemStyle);
    }

    private function getCurrencyStyles($params) {
        $itemStyle = array();

        if (!empty($params['currency_color'])) {
            $itemStyle[] = 'color: ' . $params['currency_color'];
        }

        return implode(';', $itemStyle);
    }

    private function getPricePeriodStyles($params) {
        $itemStyle = array();

        if (!empty($params['price_period_color'])) {
            $itemStyle[] = 'color: ' . $params['price_period_color'];
        }

        return implode(';', $itemStyle);
    }
}