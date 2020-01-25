<?php

if (!function_exists('edgtf_core_map_portfolio_meta')) {
    function edgtf_core_map_portfolio_meta() {
        global $hyperon_edgtf_Framework;

        $edgtf_pages = array();
        $pages = get_pages();
        foreach ($pages as $page) {
            $edgtf_pages[$page->ID] = $page->post_title;
        }

        //Portfolio Images

        $edgtfPortfolioImages = new HyperonEdgeMetaBox('portfolio-item', esc_html__('Portfolio Images (multiple upload)', 'edgtf-core'), '', '', 'portfolio_images');
        $hyperon_edgtf_Framework->edgtMetaBoxes->addMetaBox('portfolio_images', $edgtfPortfolioImages);

        $edgtf_portfolio_image_gallery = new HyperonEdgeMultipleImages('edgtf-portfolio-image-gallery', esc_html__('Portfolio Images', 'edgtf-core'), esc_html__('Choose your portfolio images', 'edgtf-core'));
        $edgtfPortfolioImages->addChild('edgtf-portfolio-image-gallery', $edgtf_portfolio_image_gallery);

        //Portfolio Single Upload Images/Videos

        $edgtf_portfolio_images_videos = hyperon_edgtf_create_meta_box(
            array(
                'scope' => array('portfolio-item'),
                'title' => esc_html__('Portfolio Images/Videos (single upload)', 'edgtf-core'),
                'name' => 'edgtf_portfolio_images_videos'
            )
        );
        hyperon_edgtf_add_repeater_field(
            array(
                'name' => 'edgtf_portfolio_single_upload',
                'parent' => $edgtf_portfolio_images_videos,
                'button_text' => esc_html__('Add Image/Video', 'edgtf-core'),
                'fields' => array(
                    array(
                        'type' => 'select',
                        'name' => 'file_type',
                        'label' => esc_html__('File Type', 'edgtf-core'),
                        'options' => array(
                            'image' => esc_html__('Image', 'edgtf-core'),
                            'video' => esc_html__('Video', 'edgtf-core'),
                        )
                    ),
                    array(
                        'type' => 'image',
                        'name' => 'single_image',
                        'label' => esc_html__('Image', 'edgtf-core'),
                        'dependency' => array(
                            'show' => array(
                                'file_type' => 'image'
                            )
                        )
                    ),
                    array(
                        'type' => 'select',
                        'name' => 'video_type',
                        'label' => esc_html__('Video Type', 'edgtf-core'),
                        'options' => array(
                            'youtube' => esc_html__('YouTube', 'edgtf-core'),
                            'vimeo' => esc_html__('Vimeo', 'edgtf-core'),
                            'self' => esc_html__('Self Hosted', 'edgtf-core'),
                        ),
                        'dependency' => array(
                            'show' => array(
                                'file_type' => 'video'
                            )
                        )
                    ),
                    array(
                        'type' => 'text',
                        'name' => 'video_id',
                        'label' => esc_html__('Video ID', 'edgtf-core'),
                        'dependency' => array(
                            'show' => array(
                                'file_type' => 'video',
                                'video_type' => array('youtube', 'vimeo')
                            )
                        )
                    ),
                    array(
                        'type' => 'text',
                        'name' => 'video_mp4',
                        'label' => esc_html__('Video mp4', 'edgtf-core'),
                        'dependency' => array(
                            'show' => array(
                                'file_type' => 'video',
                                'video_type' => 'self'
                            )
                        )
                    ),
                    array(
                        'type' => 'image',
                        'name' => 'video_cover_image',
                        'label' => esc_html__('Video Cover Image', 'edgtf-core'),
                        'dependency' => array(
                            'show' => array(
                                'file_type' => 'video',
                                'video_type' => 'self'
                            )
                        )
                    )
                )
            )
        );

        //Portfolio Additional Sidebar Items

        $edgtfAdditionalSidebarItems = hyperon_edgtf_create_meta_box(
            array(
                'scope' => array('portfolio-item'),
                'title' => esc_html__('Additional Portfolio Sidebar Items', 'edgtf-core'),
                'name' => 'portfolio_properties'
            )
        );

        hyperon_edgtf_add_repeater_field(
            array(
                'name' => 'edgtf_portfolio_properties',
                'parent' => $edgtfAdditionalSidebarItems,
                'button_text' => esc_html__('Add New Item', 'edgtf-core'),
                'fields' => array(
                    array(
                        'type' => 'text',
                        'name' => 'item_title',
                        'label' => esc_html__('Item Title', 'edgtf-core'),
                    ),
                    array(
                        'type' => 'text',
                        'name' => 'item_text',
                        'label' => esc_html__('Item Text', 'edgtf-core')
                    ),
                    array(
                        'type' => 'text',
                        'name' => 'item_url',
                        'label' => esc_html__('Enter Full URL for Item Text Link', 'edgtf-core')
                    )
                )
            )
        );
    }

    add_action('hyperon_edgtf_meta_boxes_map', 'edgtf_core_map_portfolio_meta', 40);
}