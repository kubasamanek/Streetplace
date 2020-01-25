<div class="edgtf-pie-chart-holder <?php echo esc_attr($holder_classes); ?>">
    <div class="edgtf-pc-percentage" <?php echo hyperon_edgtf_get_inline_attrs($pie_chart_data); ?>>
        <span class="edgtf-pc-percent" <?php echo hyperon_edgtf_get_inline_style($percent_styles); ?>><?php echo esc_html($percent); ?></span>
    </div>

    <?php if (!empty($title) || !empty($text)) : ?>
        <div class="edgtf-pc-text-holder">

            <?php if (!empty($title)) : ?>
                <?php echo '<' . esc_attr($title_tag); ?> class="edgtf-pc-title" <?php echo hyperon_edgtf_get_inline_style($title_styles); ?>>
                <?php echo esc_html($title); ?>
                <?php echo '</' . esc_attr($title_tag); ?>>
                <?php
                if (!empty($title_separator)) {
                    $params['color'] = !empty($title_color) ? $title_color : '';
                    $params['position'] = 'center';
                    echo hyperon_edgtf_execute_shortcode('edgtf_separator', $params);
                }
                ?>
            <?php endif; ?>

            <?php if (!empty($text)) : ?>
                <p class="edgtf-pc-text" <?php echo hyperon_edgtf_get_inline_style($text_styles); ?>><?php echo esc_html($text); ?></p>
            <?php endif; ?>

        </div>
    <?php endif; ?>

</div>