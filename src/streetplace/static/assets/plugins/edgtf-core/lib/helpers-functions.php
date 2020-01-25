<?php

if (!function_exists('edgtf_core_get_cpt_shortcode_module_template_part')) {
    /**
     * Loads module template part.
     *
     * @param string $post_type name of the post type of shortcode
     * @param string $shortcode name of the shortcode
     * @param string $template name of the template to load
     * @param string $slug
     * @param array $params array of parameters to pass to template
     * @param array $additional_params array of additional parameters to pass to template
     *
     * @return html
     */
    function edgtf_core_get_cpt_shortcode_module_template_part($post_type, $shortcode, $template, $slug = '', $params = array(), $additional_params = array()) {

        //HTML Content from template
        $html = '';
        $template_path = EDGE_CORE_CPT_PATH . '/' . $post_type . '/shortcodes/' . $shortcode . '/templates';

        $temp = $template_path . '/' . $template;
        if (is_array($params) && count($params)) {
            extract($params);
        }

        if (is_array($additional_params) && count($additional_params)) {
            extract($additional_params);
        }

        $template = '';

        if (!empty($temp)) {
            if (!empty($slug)) {
                $template = "{$temp}-{$slug}.php";

                if (!file_exists($template)) {
                    $template = $temp . '.php';
                }
            } else {
                $template = $temp . '.php';
            }
        }

        if ($template) {
            ob_start();
            include($template);
            $html = ob_get_clean();
        }

        return $html;
    }
}

if (!function_exists('edgtf_core_get_cpt_single_module_template_part')) {
    /**
     * Loads module template part.
     *
     * @param string $cpt_name name of the cpt folder
     * @param string $template name of the template to load
     * @param string $slug
     * @param array $params array of parameters to pass to template
     *
     * @return html
     */
    function edgtf_core_get_cpt_single_module_template_part($template, $cpt_name, $slug = '', $params = array()) {

        //HTML Content from template
        $html = '';
        $template_path = EDGE_CORE_CPT_PATH . '/' . $cpt_name;

        $temp = $template_path . '/' . $template;

        if (is_array($params) && count($params)) {
            extract($params);
        }

        $template = '';

        if (!empty($temp)) {
            if (!empty($slug)) {
                $template = "{$temp}-{$slug}.php";

                if (!file_exists($template)) {
                    $template = $temp . '.php';
                }
            } else {
                $template = $temp . '.php';
            }
        }

        if (!empty($template)) {
            ob_start();
            include($template);
            $html = ob_get_clean();
        }

        echo hyperon_edgtf_get_module_part($html);
    }
}

if (!function_exists('edgtf_core_return_cpt_single_module_template_part')) {
    /**
     * Loads module template part.
     *
     * @param string $cpt_name name of the cpt folder
     * @param string $template name of the template to load
     * @param string $slug
     * @param array $params array of parameters to pass to template
     *
     * @return html
     */
    function edgtf_core_return_cpt_single_module_template_part($template, $cpt_name, $slug = '', $params = array()) {

        //HTML Content from template
        $html = '';
        $template_path = EDGE_CORE_CPT_PATH . '/' . $cpt_name;

        $temp = $template_path . '/' . $template;

        if (is_array($params) && count($params)) {
            extract($params);
        }

        $template = '';

        if (!empty($temp)) {
            if (!empty($slug)) {
                $template = "{$temp}-{$slug}.php";

                if (!file_exists($template)) {
                    $template = $temp . '.php';
                }
            } else {
                $template = $temp . '.php';
            }
        }

        if (!empty($template)) {
            ob_start();
            include($template);
            $html = ob_get_clean();
        }

        return $html;
    }
}

if (!function_exists('edgtf_core_get_shortcode_module_template_part')) {
    /**
     * Loads module template part.
     *
     * @param string $template name of the template to load
     * @param string $shortcode name of the shortcode folder
     * @param string $slug
     * @param array $params array of parameters to pass to template
     *
     * @return html
     */
    function edgtf_core_get_shortcode_module_template_part($template, $shortcode, $slug = '', $params = array()) {

        //HTML Content from template
        $html = '';
        $template_path = EDGE_CORE_SHORTCODES_PATH . '/' . $shortcode;

        $temp = $template_path . '/' . $template;

        if (is_array($params) && count($params)) {
            extract($params);
        }

        $template = '';

        if (!empty($temp)) {
            if (!empty($slug)) {
                $template = "{$temp}-{$slug}.php";

                if (!file_exists($template)) {
                    $template = $temp . '.php';
                }
            } else {
                $template = $temp . '.php';
            }
        }

        if ($template) {
            ob_start();
            include($template);
            $html = ob_get_clean();
        }

        return $html;
    }
}

if (!function_exists('edgtf_core_get_module_template_part')) {
    /**
     * Loads module template part.
     *
     * @param string $module name of the module to load
     * @param string $template name of the template file
     * @param string $slug
     * @param array $params array of parameters to pass to template
     *
     * @return html
     */
    function edgtf_core_get_module_template_part($module, $template, $slug = '', $params = array()) {

        //HTML Content from template
        $html = '';
        $template_path = EDGE_CORE_ABS_PATH . '/' . $module . '/templates';

        $temp = $template_path . '/' . $template;

        if (is_array($params) && count($params)) {
            extract($params);
        }

        $template = '';

        if (!empty($temp)) {
            if (!empty($slug)) {
                $template = "{$temp}-{$slug}.php";

                if (!file_exists($template)) {
                    $template = $temp . '.php';
                }
            } else {
                $template = $temp . '.php';
            }
        }

        if ($template) {
            ob_start();
            include($template);
            $html = ob_get_clean();
        }

        return $html;
    }
}

if (!function_exists('edgtf_core_get_module_shortcode_template_part')) {
    /**
     * Loads module template part.
     *
     * @param string $module name of the module to load
     * @param string $shortcode name of the shortcode to load
     * @param string $template name of the template file
     * @param string $slug
     * @param array $params array of parameters to pass to template
     *
     * @return html
     */
    function edgtf_core_get_module_shortcode_template_part($module, $shortcode, $template, $slug = '', $params = array()) {

        //HTML Content from template
        $html = '';
        $template_path = EDGE_CORE_ABS_PATH . '/' . $module . '/shortcodes/' . $shortcode . '/templates';

        $temp = $template_path . '/' . $template;

        if (is_array($params) && count($params)) {
            extract($params);
        }

        $template = '';

        if (!empty($temp)) {
            if (!empty($slug)) {
                $template = "{$temp}-{$slug}.php";

                if (!file_exists($template)) {
                    $template = $temp . '.php';
                }
            } else {
                $template = $temp . '.php';
            }
        }

        if ($template) {
            ob_start();
            include($template);
            $html = ob_get_clean();
        }

        return $html;
    }
}

if (!function_exists('edgtf_core_ajax_status')) {
    /**
     * Function that return status from ajax functions
     */
    function edgtf_core_ajax_status($status, $message, $data = null) {
        $response = array(
            'status' => $status,
            'message' => $message,
            'data' => $data
        );

        $output = json_encode($response);

        exit($output);
    }
}

if (!function_exists('hyperon_edgtf_add_user_custom_fields')) {
    /**
     * Function creates custom social fields for users
     *
     * return $user_contact
     */
    function hyperon_edgtf_add_user_custom_fields($user_contact) {
        /**
         * Function that add custom user fields
         **/
        $user_contact['facebook'] = esc_html__('Facebook', 'edgtf-core');
        $user_contact['twitter'] = esc_html__('Twitter', 'edgtf-core');
        $user_contact['linkedin'] = esc_html__('Linkedin', 'edgtf-core');
        $user_contact['instagram'] = esc_html__('Instagram', 'edgtf-core');
        $user_contact['pinterest'] = esc_html__('Pinterest', 'edgtf-core');
        $user_contact['tumblr'] = esc_html__('Tumbrl', 'edgtf-core');
        $user_contact['googleplus'] = esc_html__('Google Plus', 'edgtf-core');

        return $user_contact;
    }

    add_filter('user_contactmethods', 'hyperon_edgtf_add_user_custom_fields');
}

if (!function_exists('edgtf_core_set_open_graph_meta')) {
    /*
     * Function that echoes open graph meta tags if enabled
     */
    function edgtf_core_set_open_graph_meta() {

        if (hyperon_edgtf_option_get_value('enable_open_graph') === 'yes') {

            // get the id
            $id = get_queried_object_id();

            // default type is article, override it with product if page is woo single product
            $type = 'article';
            $description = '';

            // check if page is generic wp page w/o page id
            if (hyperon_edgtf_is_default_wp_template()) {
                $id = 0;
            }

            // check if page is woocommerce shop page
            if (hyperon_edgtf_is_woocommerce_installed() && (function_exists('is_shop') && is_shop())) {
                $shop_page_id = get_option('woocommerce_shop_page_id');

                if (!empty($shop_page_id)) {
                    $id = $shop_page_id;
                    // set flag
                    $description = 'woocommerce-shop';
                }
            }

            if (function_exists('is_product') && is_product()) {
                $type = 'product';
            }

            // if id exist use wp template tags
            if (!empty($id)) {
                $url = get_permalink($id);
                $title = get_the_title($id);

                // apply bloginfo description to woocommerce shop page instead of first product item description
                if ($description === 'woocommerce-shop') {
                    $description = get_bloginfo('description');
                } else {
                    $description = strip_tags(apply_filters('the_excerpt', get_post_field('post_excerpt', $id)));
                }

                // has featured image
                if (get_post_thumbnail_id($id) !== '') {
                    $image = wp_get_attachment_url(get_post_thumbnail_id($id));
                } else {
                    $image = hyperon_edgtf_option_get_value('open_graph_image');
                }
            } else {
                global $wp;
                $url = esc_url(home_url(add_query_arg(array(), $wp->request)));
                $title = get_bloginfo('name');
                $description = get_bloginfo('description');
                $image = hyperon_edgtf_option_get_value('open_graph_image');
            }
            ?>

            <meta property="og:url" content="<?php echo esc_url($url); ?>"/>
            <meta property="og:type" content="<?php echo esc_html($type); ?>"/>
            <meta property="og:title" content="<?php echo esc_html($title); ?>"/>
            <meta property="og:description" content="<?php echo esc_html($description); ?>"/>
            <meta property="og:image" content="<?php echo esc_url($image); ?>"/>

        <?php }
    }

    add_action('hyperon_edgtf_header_meta', 'edgtf_core_set_open_graph_meta');
}

/* Function for adding custom meta boxes hooked to default action */
if ( class_exists( 'WP_Block_Type' ) && defined( 'EDGE_ROOT' ) ) {
	add_action( 'admin_head', 'hyperon_edgtf_meta_box_add' );
} else {
	add_action( 'add_meta_boxes', 'hyperon_edgtf_meta_box_add' );
}

if ( ! function_exists( 'hyperon_edgtf_create_meta_box_handler' ) ) {
	function hyperon_edgtf_create_meta_box_handler( $box, $key, $screen ) {
		add_meta_box(
			'edgtf-meta-box-' . $key,
			$box->title,
			'hyperon_edgtf_render_meta_box',
			$screen,
			'advanced',
			'high',
			array( 'box' => $box )
		);
	}
}


if ( ! function_exists( 'hyperon_edgtf_create_wp_widget' ) ) {
	function hyperon_edgtf_create_wp_widget( $widget ) {
		register_widget($widget);
	}
}