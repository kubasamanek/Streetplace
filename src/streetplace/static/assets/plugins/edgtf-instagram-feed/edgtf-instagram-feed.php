<?php
/*
Plugin Name: Hyperon Instagram Feed
Description: Plugin that adds Instagram feed functionality to our theme
Author: Edge Themes
Version: 1.0.1
*/

include_once 'load.php';

if (!function_exists('edgtf_instagram_feed_text_domain')) {
    /**
     * Loads plugin text domain so it can be used in translation
     */
    function edgtf_instagram_feed_text_domain() {
        load_plugin_textdomain('edgtf-instagram-feed', false, EDGE_INSTAGRAM_REL_PATH . '/languages');
    }

    add_action('plugins_loaded', 'edgtf_instagram_feed_text_domain');
}