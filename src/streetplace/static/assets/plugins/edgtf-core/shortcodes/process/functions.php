<?php

if (class_exists('WPBakeryShortCodesContainer')) {
    class WPBakeryShortCode_Edgtf_Process extends WPBakeryShortCodesContainer
    {
    }
}

if (!function_exists('edgtf_core_add_process_shortcodes')) {
    function edgtf_core_add_process_shortcodes($shortcodes_class_name) {
        $shortcodes = array(
            'EdgeCore\CPT\Shortcodes\Process\Process',
            'EdgeCore\CPT\Shortcodes\Process\ProcessItem'
        );

        $shortcodes_class_name = array_merge($shortcodes_class_name, $shortcodes);

        return $shortcodes_class_name;
    }

    add_filter('edgtf_core_filter_add_vc_shortcode', 'edgtf_core_add_process_shortcodes');
}

if (!function_exists('edgtf_core_set_process_custom_style_for_vc_shortcodes')) {
    /**
     * Function that set custom css style for process shortcode
     */
    function edgtf_core_set_process_custom_style_for_vc_shortcodes($style) {
        $current_style = '.wpb_content_element.wpb_edgtf_process_item > .wpb_element_wrapper {
			background-color: #f4f4f4; 
		}';

        $style .= $current_style;

        return $style;
    }

    add_filter('edgtf_core_filter_add_vc_shortcodes_custom_style', 'edgtf_core_set_process_custom_style_for_vc_shortcodes');
}

if (!function_exists('edgtf_core_set_process_icon_class_name_for_vc_shortcodes')) {
    /**
     * Function that set custom icon class name for process shortcode to set our icon for Visual Composer shortcodes panel
     */
    function edgtf_core_set_process_icon_class_name_for_vc_shortcodes($shortcodes_icon_class_array) {
        $shortcodes_icon_class_array[] = '.icon-wpb-process';
        $shortcodes_icon_class_array[] = '.icon-wpb-process-item';

        return $shortcodes_icon_class_array;
    }

    add_filter('edgtf_core_filter_add_vc_shortcodes_custom_icon_class', 'edgtf_core_set_process_icon_class_name_for_vc_shortcodes');
}