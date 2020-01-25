<?php
/*
Plugin Name: Hyperon Twitter Feed
Description: Plugin that adds Twitter feed functionality to our theme
Author: Edge Themes
Version: 1.0.1
*/

include_once 'load.php';

if (!function_exists('edgtf_twitter_theme_installed')) {
    /**
     * Checks whether theme is installed or not
     * @return bool
     */
    function edgtf_twitter_theme_installed() {
        return defined('EDGE_ROOT');
    }
}

if (!function_exists('edgtf_twitter_feed_text_domain')) {
    /**
     * Loads plugin text domain so it can be used in translation
     */
    function edgtf_twitter_feed_text_domain() {
        load_plugin_textdomain('edgtf-twitter-feed', false, EDGE_TWITTER_REL_PATH . '/languages');
    }

    add_action('plugins_loaded', 'edgtf_twitter_feed_text_domain');
}