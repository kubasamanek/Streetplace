<?php

namespace EdgeCore\CPT\Shortcodes\PortfolioCategoryList;

use EdgeCore\Lib;

class PortfolioCategoryList implements Lib\ShortcodeInterface
{
    private $base;

    public function __construct() {
        $this->base = 'edgtf_portfolio_category_list';

        add_action('vc_before_init', array($this, 'vcMap'));
    }

    public function getBase() {
        return $this->base;
    }

    public function vcMap() {
        if (function_exists('vc_map')) {
            vc_map(array(
                    'name' => esc_html__('Edge Portfolio Category List', 'edgtf-core'),
                    'base' => $this->getBase(),
                    'category' => esc_html__('by EDGE', 'edgtf-core'),
                    'icon' => 'icon-wpb-portfolio-category-list extended-custom-icon',
                    'params' => array(
                        array(
                            'type' => 'dropdown',
                            'param_name' => 'number_of_columns',
                            'heading' => esc_html__('Number of Columns', 'edgtf-core'),
                            'value' => array(
                                esc_html__('Default', 'edgtf-core') => '',
                                esc_html__('One', 'edgtf-core') => '1',
                                esc_html__('Two', 'edgtf-core') => '2',
                                esc_html__('Three', 'edgtf-core') => '3',
                                esc_html__('Four', 'edgtf-core') => '4',
                                esc_html__('Five', 'edgtf-core') => '5'
                            ),
                            'description' => esc_html__('Default value is Three', 'edgtf-core'),
                            'save_always' => true,
                            'admin_label' => true
                        ),
                        array(
                            'type' => 'dropdown',
                            'param_name' => 'space_between_items',
                            'heading' => esc_html__('Space Between Items', 'edgtf-core'),
                            'value' => array_flip(hyperon_edgtf_get_space_between_items_array()),
                            'save_always' => true
                        ),
                        array(
                            'type' => 'textfield',
                            'param_name' => 'number_of_items',
                            'heading' => esc_html__('Number of Items Per Page', 'edgtf-core'),
                            'description' => esc_html__('Set number of items for your portfolio category list. Default value is 6', 'edgtf-core'),
                            'value' => '-1'
                        ),
                        array(
                            'type' => 'dropdown',
                            'param_name' => 'orderby',
                            'heading' => esc_html__('Order By', 'edgtf-core'),
                            'value' => array_flip(hyperon_edgtf_get_query_order_by_array()),
                            'save_always' => true
                        ),
                        array(
                            'type' => 'dropdown',
                            'param_name' => 'order',
                            'heading' => esc_html__('Order', 'edgtf-core'),
                            'value' => array_flip(hyperon_edgtf_get_query_order_array()),
                            'save_always' => true
                        ),
                        array(
                            'type' => 'dropdown',
                            'param_name' => 'image_proportions',
                            'heading' => esc_html__('Image Proportions', 'edgtf-core'),
                            'value' => array(
                                esc_html__('Original', 'edgtf-core') => 'full',
                                esc_html__('Square', 'edgtf-core') => 'square',
                                esc_html__('Landscape', 'edgtf-core') => 'landscape',
                                esc_html__('Portrait', 'edgtf-core') => 'portrait',
                                esc_html__('Medium', 'edgtf-core') => 'medium',
                                esc_html__('Large', 'edgtf-core') => 'large'
                            ),
                            'description' => esc_html__('Set image proportions for your portfolio category list', 'edgtf-core')
                        ),
                        array(
                            'type' => 'dropdown',
                            'param_name' => 'title_tag',
                            'heading' => esc_html__('Title Tag', 'edgtf-core'),
                            'value' => array_flip(hyperon_edgtf_get_title_tag(true))
                        )
                    )
                )
            );
        }
    }

    public function render($atts, $content = null) {
        $args = array(
            'number_of_columns' => '3',
            'space_between_items' => 'normal',
            'number_of_items' => '6',
            'orderby' => 'date',
            'order' => 'ASC',
            'image_proportions' => 'full',
            'title_tag' => 'h3'
        );
        $params = shortcode_atts($args, $atts);

        $query_array = $this->getQueryArray($params);
        $params['query_results'] = get_terms($query_array);
        $params['holder_classes'] = $this->getHolderClasses($params, $args);
        $params['image_size'] = $this->getImageSize($params);
        $params['title_tag'] = !empty($params['title_tag']) ? $params['title_tag'] : $args['title_tag'];

        $html = edgtf_core_get_cpt_shortcode_module_template_part('portfolio', 'portfolio-category-list', 'portfolio-category-holder', '', $params);

        return $html;
    }

    public function getQueryArray($params) {
        $query_array = array(
            'taxonomy' => 'portfolio-category',
            'number' => $params['number_of_items'],
            'orderby' => $params['orderby'],
            'order' => $params['order'],
            'hide_empty' => true
        );

        return $query_array;
    }

    public function getHolderClasses($params, $args) {
        $classes = array();

        $classes[] = !empty($params['space_between_items']) ? 'edgtf-' . $params['space_between_items'] . '-space' : 'edgtf-' . $args['space_between_items'] . '-space';

        $number_of_columns = $params['number_of_columns'];
        switch ($number_of_columns):
            case '1':
                $classes[] = 'edgtf-pcl-one-column';
                break;
            case '2':
                $classes[] = 'edgtf-pcl-two-columns';
                break;
            case '3':
                $classes[] = 'edgtf-pcl-three-columns';
                break;
            case '4':
                $classes[] = 'edgtf-pcl-four-columns';
                break;
            case '5':
                $classes[] = 'edgtf-pcl-five-columns';
                break;
            default:
                $classes[] = 'edgtf-pcl-three-columns';
                break;
        endswitch;

        return implode(' ', $classes);
    }

    public function getImageSize($params) {
        $thumb_size = 'full';

        if (!empty($params['image_proportions'])) {
            $image_size = $params['image_proportions'];

            switch ($image_size) {
                case 'landscape':
                    $thumb_size = 'hyperon_edgtf_landscape';
                    break;
                case 'portrait':
                    $thumb_size = 'hyperon_edgtf_portrait';
                    break;
                case 'square':
                    $thumb_size = 'hyperon_edgtf_square';
                    break;
                case 'medium':
                    $thumb_size = 'medium';
                    break;
                case 'large':
                    $thumb_size = 'large';
                    break;
                case 'full':
                    $thumb_size = 'full';
                    break;
            }
        }

        return $thumb_size;
    }
}