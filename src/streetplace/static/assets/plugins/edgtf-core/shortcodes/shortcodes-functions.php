<?php

if (!function_exists('edgtf_core_include_shortcodes_file')) {
    /**
     * Loades all shortcodes by going through all folders that are placed directly in shortcodes folder
     */
    function edgtf_core_include_shortcodes_file() {
        foreach (glob(EDGE_CORE_SHORTCODES_PATH . '/*/load.php') as $shortcode_load) {
            include_once $shortcode_load;
        }

        do_action('edgtf_core_action_include_shortcodes_file');
    }

    add_action('init', 'edgtf_core_include_shortcodes_file', 6); // permission 6 is set to be before vc_before_init hook that has permission 9
}

if (!function_exists('edgtf_core_load_shortcodes')) {
    function edgtf_core_load_shortcodes() {
        include_once EDGE_CORE_ABS_PATH . '/lib/shortcode-loader.php';

        EdgeCore\Lib\ShortcodeLoader::getInstance()->load();
    }

    add_action('init', 'edgtf_core_load_shortcodes', 7); // permission 7 is set to be before vc_before_init hook that has permission 9 and after edgtf_core_include_shortcodes_file hook
}

if (!function_exists('edgtf_core_add_admin_shortcodes_styles')) {
    /**
     * Function that includes shortcodes core styles for admin
     */
    function edgtf_core_add_admin_shortcodes_styles() {

        //include shortcode styles for Visual Composer
        wp_enqueue_style('edgtf-core-vc-shortcodes', EDGE_CORE_ASSETS_URL_PATH . '/css/admin/edgtf-vc-shortcodes.css');
    }

    add_action('hyperon_edgtf_admin_scripts_init', 'edgtf_core_add_admin_shortcodes_styles');
}

if (!function_exists('edgtf_core_add_admin_shortcodes_custom_styles')) {
    /**
     * Function that print custom vc shortcodes style
     */
    function edgtf_core_add_admin_shortcodes_custom_styles() {
        $style = apply_filters('edgtf_core_filter_add_vc_shortcodes_custom_style', $style = '');
        $shortcodes_icon_styles = array();
        $shortcode_icon_size = 32;
        $shortcode_position = 0;

        $shortcodes_icon_class_array = apply_filters('edgtf_core_filter_add_vc_shortcodes_custom_icon_class', $shortcodes_icon_class_array = array());
        sort($shortcodes_icon_class_array);

        if (!empty($shortcodes_icon_class_array)) {
            foreach ($shortcodes_icon_class_array as $shortcode_icon_class) {
                $mark = $shortcode_position != 0 ? '-' : '';

                $shortcodes_icon_styles[] = '.vc_element-icon.extended-custom-icon' . esc_attr($shortcode_icon_class) . ' {
					background-position: ' . $mark . esc_attr($shortcode_position * $shortcode_icon_size) . 'px 0;
				}';

                $shortcode_position++;
            }
        }

        if (!empty($shortcodes_icon_styles)) {
            $style .= implode(' ', $shortcodes_icon_styles);
        }

        if (!empty($style)) {
            wp_add_inline_style('edgtf-core-vc-shortcodes', $style);
        }
    }

    add_action('hyperon_edgtf_admin_scripts_init', 'edgtf_core_add_admin_shortcodes_custom_styles');
}