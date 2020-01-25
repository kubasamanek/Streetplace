<?php
/*
Plugin Name: Hyperon Core
Description: Plugin that adds all post types needed by our theme
Author: Edge Themes
Version: 1.0.2
*/

require_once 'load.php';

add_action('after_setup_theme', array(EdgeCore\CPT\PostTypesRegister::getInstance(), 'register'));

if (!function_exists('edgt_core_activation')) {
    /**
     * Triggers when plugin is activated. It calls flush_rewrite_rules
     * and defines hyperon_edgtf_core_on_activate action
     */
    function edgt_core_activation() {
        do_action('hyperon_edgtf_core_on_activate');

        EdgeCore\CPT\PostTypesRegister::getInstance()->register();
        flush_rewrite_rules();
    }

    register_activation_hook(__FILE__, 'edgt_core_activation');
}

if (!function_exists('edgt_core_text_domain')) {
    /**
     * Loads plugin text domain so it can be used in translation
     */
    function edgt_core_text_domain() {
        load_plugin_textdomain('edgtf-core', false, EDGE_CORE_REL_PATH . '/languages');
    }

    add_action('plugins_loaded', 'edgt_core_text_domain');
}

if (!function_exists('edgtf_core_version_class')) {
    /**
     * Adds plugins version class to body
     *
     * @param $classes
     *
     * @return array
     */
    function edgtf_core_version_class($classes) {
        $classes[] = 'edgtf-core-' . EDGE_CORE_VERSION;

        return $classes;
    }

    add_filter('body_class', 'edgtf_core_version_class');
}

if (!function_exists('edgtf_core_theme_installed')) {
    /**
     * Checks whether theme is installed or not
     * @return bool
     */
    function edgtf_core_theme_installed() {
        return defined('EDGE_ROOT');
    }
}

if (!function_exists('edgtf_core_is_woocommerce_installed')) {
    /**
     * Function that checks if woocommerce is installed
     * @return bool
     */
    function edgtf_core_is_woocommerce_installed() {
        return function_exists('is_woocommerce');
    }
}

if (!function_exists('edgtf_core_is_woocommerce_integration_installed')) {
    //is Edge Woocommerce Integration installed?
    function edgtf_core_is_woocommerce_integration_installed() {
        return defined('EDGE_WOOCOMMERCE_CHECKOUT_INTEGRATION');
    }
}

if (!function_exists('edgtf_core_is_revolution_slider_installed')) {
    function edgtf_core_is_revolution_slider_installed() {
        return class_exists('RevSliderFront');
    }
}

if (!function_exists('edgtf_core_is_wpml_installed')) {
    /**
     * Function that checks if WPML plugin is installed
     * @return bool
     *
     * @version 0.1
     */
    function edgtf_core_is_wpml_installed() {
        return defined('ICL_SITEPRESS_VERSION');
    }
}

if (!function_exists('edgt_core_theme_menu')) {
    /**
     * Function that generates admin menu for options page.
     * It generates one admin page per options page.
     */
    function edgt_core_theme_menu() {
        if (edgtf_core_theme_installed()) {

            global $hyperon_edgtf_Framework;
            hyperon_edgtf_init_theme_options();

            $page_hook_suffix = add_menu_page(
                esc_html__('Edge Options', 'edgtf-core'), // The value used to populate the browser's title bar when the menu page is active
                esc_html__('Edge Options', 'edgtf-core'), // The text of the menu in the administrator's sidebar
                'administrator',                            // What roles are able to access the menu
                'hyperon_edgtf_theme_menu',            // The ID used to bind submenu items to this menu
                array($hyperon_edgtf_Framework->getSkin(), 'renderOptions'), // The callback function used to render this menu
                $hyperon_edgtf_Framework->getSkin()->getSkinURI() . '/assets/img/admin-logo-icon.png', // Icon For menu Item
                100                                                                                            // Position
            );

            foreach ($hyperon_edgtf_Framework->edgtOptions->adminPages as $key => $value) {
                $slug = "";

                if (!empty($value->slug)) {
                    $slug = "_tab" . $value->slug;
                }

                $subpage_hook_suffix = add_submenu_page(
                    'hyperon_edgtf_theme_menu',
                    esc_html__('Edge Options - ', 'edgtf-core') . $value->title, // The value used to populate the browser's title bar when the menu page is active
                    $value->title,                                                 // The text of the menu in the administrator's sidebar
                    'administrator',                                               // What roles are able to access the menu
                    'hyperon_edgtf_theme_menu' . $slug,                       // The ID used to bind submenu items to this menu
                    array($hyperon_edgtf_Framework->getSkin(), 'renderOptions')
                );

                add_action('admin_print_scripts-' . $subpage_hook_suffix, 'hyperon_edgtf_enqueue_admin_scripts');
                add_action('admin_print_styles-' . $subpage_hook_suffix, 'hyperon_edgtf_enqueue_admin_styles');
            };

            add_action('admin_print_scripts-' . $page_hook_suffix, 'hyperon_edgtf_enqueue_admin_scripts');
            add_action('admin_print_styles-' . $page_hook_suffix, 'hyperon_edgtf_enqueue_admin_styles');
        }
    }

    add_action('admin_menu', 'edgt_core_theme_menu');
}

if (!function_exists('edgtf_core_theme_menu_backup_options')) {
    /**
     * Function that generates admin menu for options page.
     * It generates one admin page per options page.
     */
    function edgtf_core_theme_menu_backup_options() {
        if (edgtf_core_theme_installed()) {
            global $hyperon_edgtf_Framework;

            $slug = "_backup_options";
            $page_hook_suffix = add_submenu_page(
                'hyperon_edgtf_theme_menu',
                esc_html__('Edge Options - Backup Options', 'edgtf-core'), // The value used to populate the browser's title bar when the menu page is active
                esc_html__('Backup Options', 'edgtf-core'),                // The text of the menu in the administrator's sidebar
                'administrator',                                             // What roles are able to access the menu
                'hyperon_edgtf_theme_menu' . $slug,                     // The ID used to bind submenu items to this menu
                array($hyperon_edgtf_Framework->getSkin(), 'renderBackupOptions')
            );

            add_action('admin_print_scripts-' . $page_hook_suffix, 'hyperon_edgtf_enqueue_admin_scripts');
            add_action('admin_print_styles-' . $page_hook_suffix, 'hyperon_edgtf_enqueue_admin_styles');
        }
    }

    add_action('admin_menu', 'edgtf_core_theme_menu_backup_options');
}

if (!function_exists('edgtf_core_theme_admin_bar_menu_options')) {
    /**
     * Add a link to the WP Toolbar
     */
    function edgtf_core_theme_admin_bar_menu_options($wp_admin_bar) {
        $args = array(
            'id' => 'hyperon-admin-bar-options',
            'title' => sprintf('<span class="ab-icon dashicons-before dashicons-admin-generic"></span> %s', esc_html__('Edge Options', 'edgtf-core')),
            'href' => esc_url(admin_url('admin.php?page=hyperon_edgtf_theme_menu'))
        );

        $wp_admin_bar->add_node($args);
    }

    add_action('admin_bar_menu', 'edgtf_core_theme_admin_bar_menu_options', 999);
}