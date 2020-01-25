<?php

if (!function_exists('edgtf_core_map_testimonials_meta')) {
    function edgtf_core_map_testimonials_meta() {
        $testimonial_meta_box = hyperon_edgtf_create_meta_box(
            array(
                'scope' => array('testimonials'),
                'title' => esc_html__('Testimonial', 'edgtf-core'),
                'name' => 'testimonial_meta'
            )
        );

        hyperon_edgtf_create_meta_box_field(
            array(
                'name' => 'edgtf_testimonial_title',
                'type' => 'text',
                'label' => esc_html__('Title', 'edgtf-core'),
                'description' => esc_html__('Enter testimonial title', 'edgtf-core'),
                'parent' => $testimonial_meta_box,
            )
        );

        hyperon_edgtf_create_meta_box_field(
            array(
                'name' => 'edgtf_testimonial_text',
                'type' => 'text',
                'label' => esc_html__('Text', 'edgtf-core'),
                'description' => esc_html__('Enter testimonial text', 'edgtf-core'),
                'parent' => $testimonial_meta_box,
            )
        );

        hyperon_edgtf_create_meta_box_field(
            array(
                'name' => 'edgtf_testimonial_author',
                'type' => 'text',
                'label' => esc_html__('Author', 'edgtf-core'),
                'description' => esc_html__('Enter author name', 'edgtf-core'),
                'parent' => $testimonial_meta_box,
            )
        );

        hyperon_edgtf_create_meta_box_field(
            array(
                'name' => 'edgtf_testimonial_author_position',
                'type' => 'text',
                'label' => esc_html__('Author Position', 'edgtf-core'),
                'description' => esc_html__('Enter author job position', 'edgtf-core'),
                'parent' => $testimonial_meta_box,
            )
        );
    }

    add_action('hyperon_edgtf_meta_boxes_map', 'edgtf_core_map_testimonials_meta', 95);
}