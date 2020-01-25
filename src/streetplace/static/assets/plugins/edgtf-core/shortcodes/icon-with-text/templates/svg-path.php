<?php

$params['svg_source'] = urldecode(base64_decode($params['svg_source']));

echo '<svg
            version="1.1"
            class="edgtf-animated-svg"
            id="edgtf-animated-svg-' . rand(0, 1000) . '"
            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            x="0"
            y="0"
	        width="' . esc_attr($params['svg_width']) . 'px"
	        height="' . esc_attr($params['svg_height']) . 'px"
	        viewBox="0 0 ' . esc_attr($params['svg_width']) . ' ' . esc_attr($params['svg_height']) . '"
	        enable-background="new 0 0 ' . esc_attr($params['svg_width']) . ' ' . esc_attr($params['svg_height']) . '"
	        xml:space="preserve">';
echo hyperon_edgtf_get_module_part($params['svg_source']);
echo '</svg>';