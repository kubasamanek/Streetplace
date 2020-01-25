<div class="edgtf-price-table edgtf-item-space <?php echo esc_attr($holder_classes); ?>">
    <div class="edgtf-pt-inner" <?php echo hyperon_edgtf_get_inline_style($holder_styles); ?>>
        <ul>
            <li class="edgtf-pt-title-holder">
                <h4 class="edgtf-pt-title" <?php echo hyperon_edgtf_get_inline_style($title_styles); ?>><?php echo esc_html($title); ?></h4>
            </li>
            <li class="edgtf-pt-prices">
                <h1 class="edgtf-pt-prices-holder">
                    <span class="edgtf-pt-value" <?php echo hyperon_edgtf_get_inline_style($currency_styles); ?>><?php echo esc_html($currency); ?></span>
                    <span class="edgtf-pt-price" <?php echo hyperon_edgtf_get_inline_style($price_styles); ?>><?php echo esc_html($price); ?></span>
                </h1>
                <h5 class="edgtf-pt-mark" <?php echo hyperon_edgtf_get_inline_style($price_period_styles); ?>><?php echo esc_html($price_period); ?></h5>
                <?php
                if (!empty($price_period_separator)) {
                    $params['color'] = !empty($price_period_color) ? $price_period_color : '';
                    $params['position'] = 'center';
                    echo hyperon_edgtf_execute_shortcode('edgtf_separator', $params);
                }
                ?>
            </li>
            <li class="edgtf-pt-content">
                <?php echo do_shortcode($content); ?>
            </li>
            <?php
            if (!empty($button_text)) { ?>
                <li class="edgtf-pt-button">
                    <?php echo hyperon_edgtf_get_button_html(array(
                        'link' => $link,
                        'text' => $button_text,
                        'type' => 'simple',
                    )); ?>
                </li>
            <?php } ?>
        </ul>
    </div>
</div>