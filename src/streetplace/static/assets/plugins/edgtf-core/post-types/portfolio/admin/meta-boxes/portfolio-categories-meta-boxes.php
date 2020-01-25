<?php

if (!function_exists('hyperon_edgtf_portfolio_category_additional_fields')) {
    function hyperon_edgtf_portfolio_category_additional_fields() {

        $fields = hyperon_edgtf_add_taxonomy_fields(
            array(
                'scope' => 'portfolio-category',
                'name' => 'portfolio_category_options'
            )
        );

        hyperon_edgtf_add_taxonomy_field(
            array(
                'name' => 'edgtf_portfolio_category_image_meta',
                'type' => 'image',
                'label' => esc_html__('Category Image', 'edgtf-core'),
                'parent' => $fields
            )
        );
    }

    add_action('hyperon_edgtf_custom_taxonomy_fields', 'hyperon_edgtf_portfolio_category_additional_fields');
}