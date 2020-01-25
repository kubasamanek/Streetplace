<?php

if (!function_exists('hyperon_edgtf_portfolio_options_map')) {
    function hyperon_edgtf_portfolio_options_map() {

        hyperon_edgtf_add_admin_page(
            array(
                'slug' => '_portfolio',
                'title' => esc_html__('Portfolio', 'edgtf-core'),
                'icon' => 'fa fa-camera-retro'
            )
        );

        $panel_archive = hyperon_edgtf_add_admin_panel(
            array(
                'title' => esc_html__('Portfolio Archive', 'edgtf-core'),
                'name' => 'panel_portfolio_archive',
                'page' => '_portfolio'
            )
        );

        hyperon_edgtf_add_admin_field(
            array(
                'name' => 'portfolio_archive_number_of_items',
                'type' => 'text',
                'label' => esc_html__('Number of Items', 'edgtf-core'),
                'description' => esc_html__('Set number of items for your portfolio list on archive pages. Default value is 12', 'edgtf-core'),
                'parent' => $panel_archive,
                'args' => array(
                    'col_width' => 3
                )
            )
        );

        hyperon_edgtf_add_admin_field(
            array(
                'name' => 'portfolio_archive_number_of_columns',
                'type' => 'select',
                'label' => esc_html__('Number of Columns', 'edgtf-core'),
                'default_value' => '4',
                'description' => esc_html__('Set number of columns for your portfolio list on archive pages. Default value is 4 columns', 'edgtf-core'),
                'parent' => $panel_archive,
                'options' => array(
                    '2' => esc_html__('2 Columns', 'edgtf-core'),
                    '3' => esc_html__('3 Columns', 'edgtf-core'),
                    '4' => esc_html__('4 Columns', 'edgtf-core'),
                    '5' => esc_html__('5 Columns', 'edgtf-core')
                )
            )
        );

        hyperon_edgtf_add_admin_field(
            array(
                'name' => 'portfolio_archive_space_between_items',
                'type' => 'select',
                'label' => esc_html__('Space Between Items', 'edgtf-core'),
                'description' => esc_html__('Set space size between portfolio items for your portfolio list on archive pages. Default value is normal', 'edgtf-core'),
                'default_value' => 'normal',
                'options' => hyperon_edgtf_get_space_between_items_array(),
                'parent' => $panel_archive
            )
        );

        hyperon_edgtf_add_admin_field(
            array(
                'name' => 'portfolio_archive_image_size',
                'type' => 'select',
                'label' => esc_html__('Image Proportions', 'edgtf-core'),
                'default_value' => 'landscape',
                'description' => esc_html__('Set image proportions for your portfolio list on archive pages. Default value is landscape', 'edgtf-core'),
                'parent' => $panel_archive,
                'options' => array(
                    'full' => esc_html__('Original', 'edgtf-core'),
                    'landscape' => esc_html__('Landscape', 'edgtf-core'),
                    'portrait' => esc_html__('Portrait', 'edgtf-core'),
                    'square' => esc_html__('Square', 'edgtf-core')
                )
            )
        );

        hyperon_edgtf_add_admin_field(
            array(
                'name' => 'portfolio_archive_item_layout',
                'type' => 'select',
                'label' => esc_html__('Item Style', 'edgtf-core'),
                'default_value' => 'standard-shader',
                'description' => esc_html__('Set item style for your portfolio list on archive pages. Default value is Standard - Shader', 'edgtf-core'),
                'parent' => $panel_archive,
                'options' => array(
                    'standard-shader' => esc_html__('Standard - Shader', 'edgtf-core'),
                    'gallery-overlay' => esc_html__('Gallery - Overlay', 'edgtf-core')
                )
            )
        );

        $panel = hyperon_edgtf_add_admin_panel(
            array(
                'title' => esc_html__('Portfolio Single', 'edgtf-core'),
                'name' => 'panel_portfolio_single',
                'page' => '_portfolio'
            )
        );

        hyperon_edgtf_add_admin_field(
            array(
                'name' => 'portfolio_single_template',
                'type' => 'select',
                'label' => esc_html__('Portfolio Type', 'edgtf-core'),
                'default_value' => 'small-images',
                'description' => esc_html__('Choose a default type for Single Project pages', 'edgtf-core'),
                'parent' => $panel,
                'options' => array(
                    'huge-images' => esc_html__('Portfolio Full Width Images', 'edgtf-core'),
                    'images' => esc_html__('Portfolio Images', 'edgtf-core'),
                    'small-images' => esc_html__('Portfolio Small Images', 'edgtf-core'),
                    'slider' => esc_html__('Portfolio Slider', 'edgtf-core'),
                    'small-slider' => esc_html__('Portfolio Small Slider', 'edgtf-core'),
                    'gallery' => esc_html__('Portfolio Gallery', 'edgtf-core'),
                    'small-gallery' => esc_html__('Portfolio Small Gallery', 'edgtf-core'),
                    'masonry' => esc_html__('Portfolio Masonry', 'edgtf-core'),
                    'small-masonry' => esc_html__('Portfolio Small Masonry', 'edgtf-core'),
                    'custom' => esc_html__('Portfolio Custom', 'edgtf-core'),
                    'full-width-custom' => esc_html__('Portfolio Full Width Custom', 'edgtf-core')
                )
            )
        );

        /***************** Gallery Layout *****************/

        $portfolio_gallery_container = hyperon_edgtf_add_admin_container(
            array(
                'parent' => $panel,
                'name' => 'portfolio_gallery_container',
                'dependency' => array(
                    'hide' => array(
                        'portfolio_single_template' => array(
                            'huge-images',
                            'images',
                            'small-images',
                            'slider',
                            'small-slider',
                            'masonry',
                            'small-masonry',
                            'custom',
                            'full-width-custom'
                        )
                    )
                )
            )
        );

        hyperon_edgtf_add_admin_field(
            array(
                'name' => 'portfolio_single_gallery_columns_number',
                'type' => 'select',
                'label' => esc_html__('Number of Columns', 'edgtf-core'),
                'default_value' => 'three',
                'description' => esc_html__('Set number of columns for portfolio gallery type', 'edgtf-core'),
                'parent' => $portfolio_gallery_container,
                'options' => array(
                    'two' => esc_html__('2 Columns', 'edgtf-core'),
                    'three' => esc_html__('3 Columns', 'edgtf-core'),
                    'four' => esc_html__('4 Columns', 'edgtf-core')
                )
            )
        );

        hyperon_edgtf_add_admin_field(
            array(
                'name' => 'portfolio_single_gallery_space_between_items',
                'type' => 'select',
                'label' => esc_html__('Space Between Items', 'edgtf-core'),
                'description' => esc_html__('Set space size between columns for portfolio gallery type', 'edgtf-core'),
                'default_value' => 'normal',
                'options' => hyperon_edgtf_get_space_between_items_array(),
                'parent' => $portfolio_gallery_container
            )
        );

        /***************** Gallery Layout *****************/

        /***************** Masonry Layout *****************/

        $portfolio_masonry_container = hyperon_edgtf_add_admin_container(
            array(
                'parent' => $panel,
                'name' => 'portfolio_masonry_container',
                'dependency' => array(
                    'hide' => array(
                        'portfolio_single_template' => array(
                            'huge-images',
                            'images',
                            'small-images',
                            'slider',
                            'small-slider',
                            'gallery',
                            'small-gallery',
                            'custom',
                            'full-width-custom'
                        )
                    )
                )
            )
        );

        hyperon_edgtf_add_admin_field(
            array(
                'name' => 'portfolio_single_masonry_columns_number',
                'type' => 'select',
                'label' => esc_html__('Number of Columns', 'edgtf-core'),
                'default_value' => 'three',
                'description' => esc_html__('Set number of columns for portfolio masonry type', 'edgtf-core'),
                'parent' => $portfolio_masonry_container,
                'options' => array(
                    'two' => esc_html__('2 Columns', 'edgtf-core'),
                    'three' => esc_html__('3 Columns', 'edgtf-core'),
                    'four' => esc_html__('4 Columns', 'edgtf-core')
                )
            )
        );

        hyperon_edgtf_add_admin_field(
            array(
                'name' => 'portfolio_single_masonry_space_between_items',
                'type' => 'select',
                'label' => esc_html__('Space Between Items', 'edgtf-core'),
                'description' => esc_html__('Set space size between columns for portfolio masonry type', 'edgtf-core'),
                'default_value' => 'normal',
                'options' => hyperon_edgtf_get_space_between_items_array(),
                'parent' => $portfolio_masonry_container
            )
        );

        /***************** Masonry Layout *****************/

        hyperon_edgtf_add_admin_field(
            array(
                'type' => 'select',
                'name' => 'show_title_area_portfolio_single',
                'default_value' => '',
                'label' => esc_html__('Show Title Area', 'edgtf-core'),
                'description' => esc_html__('Enabling this option will show title area on single projects', 'edgtf-core'),
                'parent' => $panel,
                'options' => array(
                    '' => esc_html__('Default', 'edgtf-core'),
                    'yes' => esc_html__('Yes', 'edgtf-core'),
                    'no' => esc_html__('No', 'edgtf-core')
                ),
                'args' => array(
                    'col_width' => 3
                )
            )
        );

        hyperon_edgtf_add_admin_field(
            array(
                'name' => 'portfolio_single_lightbox_images',
                'type' => 'yesno',
                'label' => esc_html__('Enable Lightbox for Images', 'edgtf-core'),
                'description' => esc_html__('Enabling this option will turn on lightbox functionality for projects with images', 'edgtf-core'),
                'parent' => $panel,
                'default_value' => 'yes'
            )
        );

        hyperon_edgtf_add_admin_field(
            array(
                'name' => 'portfolio_single_lightbox_videos',
                'type' => 'yesno',
                'label' => esc_html__('Enable Lightbox for Videos', 'edgtf-core'),
                'description' => esc_html__('Enabling this option will turn on lightbox functionality for YouTube/Vimeo projects', 'edgtf-core'),
                'parent' => $panel,
                'default_value' => 'no'
            )
        );

        hyperon_edgtf_add_admin_field(
            array(
                'name' => 'portfolio_single_enable_categories',
                'type' => 'yesno',
                'label' => esc_html__('Enable Categories', 'edgtf-core'),
                'description' => esc_html__('Enabling this option will enable category meta description on single projects', 'edgtf-core'),
                'parent' => $panel,
                'default_value' => 'yes'
            )
        );

        hyperon_edgtf_add_admin_field(
            array(
                'name' => 'portfolio_single_hide_date',
                'type' => 'yesno',
                'label' => esc_html__('Enable Date', 'edgtf-core'),
                'description' => esc_html__('Enabling this option will enable date meta on single projects', 'edgtf-core'),
                'parent' => $panel,
                'default_value' => 'yes'
            )
        );

        hyperon_edgtf_add_admin_field(
            array(
                'name' => 'portfolio_single_sticky_sidebar',
                'type' => 'yesno',
                'label' => esc_html__('Enable Sticky Side Text', 'edgtf-core'),
                'description' => esc_html__('Enabling this option will make side text sticky on Single Project pages. This option works only for Full Width Images, Small Images, Small Gallery and Small Masonry portfolio types', 'edgtf-core'),
                'parent' => $panel,
                'default_value' => 'yes'
            )
        );

        hyperon_edgtf_add_admin_field(
            array(
                'name' => 'portfolio_single_comments',
                'type' => 'yesno',
                'label' => esc_html__('Show Comments', 'edgtf-core'),
                'description' => esc_html__('Enabling this option will show comments on your page', 'edgtf-core'),
                'parent' => $panel,
                'default_value' => 'no'
            )
        );

        hyperon_edgtf_add_admin_field(
            array(
                'name' => 'portfolio_single_hide_pagination',
                'type' => 'yesno',
                'label' => esc_html__('Hide Pagination', 'edgtf-core'),
                'description' => esc_html__('Enabling this option will turn off portfolio pagination functionality', 'edgtf-core'),
                'parent' => $panel,
                'default_value' => 'no'
            )
        );

        $container_navigate_category = hyperon_edgtf_add_admin_container(
            array(
                'name' => 'navigate_same_category_container',
                'parent' => $panel,
                'dependency' => array(
                    'hide' => array(
                        'portfolio_single_hide_pagination' => array(
                            'yes'
                        )
                    )
                )
            )
        );

        hyperon_edgtf_add_admin_field(
            array(
                'name' => 'portfolio_single_nav_same_category',
                'type' => 'yesno',
                'label' => esc_html__('Enable Pagination Through Same Category', 'edgtf-core'),
                'description' => esc_html__('Enabling this option will make portfolio pagination sort through current category', 'edgtf-core'),
                'parent' => $container_navigate_category,
                'default_value' => 'no'
            )
        );

        hyperon_edgtf_add_admin_field(
            array(
                'name' => 'portfolio_single_slug',
                'type' => 'text',
                'label' => esc_html__('Portfolio Single Slug', 'edgtf-core'),
                'description' => esc_html__('Enter if you wish to use a different Single Project slug (Note: After entering slug, navigate to Settings -> Permalinks and click "Save" in order for changes to take effect)', 'edgtf-core'),
                'parent' => $panel,
                'args' => array(
                    'col_width' => 3
                )
            )
        );
    }

    add_action('hyperon_edgtf_options_map', 'hyperon_edgtf_portfolio_options_map', 14);
}