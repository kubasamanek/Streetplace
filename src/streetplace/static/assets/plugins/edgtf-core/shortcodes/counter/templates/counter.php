<div class="edgtf-counter-holder <?php echo esc_attr($holder_classes); ?>">
    <div class="edgtf-counter-inner">

        <?php if (!empty($digit)) : ?>
            <span class="edgtf-counter <?php echo esc_attr($type) ?>" <?php echo hyperon_edgtf_get_inline_style($counter_styles); ?>><?php echo esc_html($digit); ?></span>
        <?php endif; ?>

        <?php if (!empty($title)) : ?>
            <?php echo '<' . esc_attr($title_tag); ?> class="edgtf-counter-title" <?php echo hyperon_edgtf_get_inline_style($counter_title_styles); ?>>
            <?php echo esc_html($title); ?>
            <?php echo '</' . esc_attr($title_tag); ?>>
            <?php
            if (!empty($title_separator)) {
                $params['color'] = !empty($title_color) ? $title_color : '';
                $params['position'] = !empty($alignment) ? $alignment : '';
                echo hyperon_edgtf_execute_shortcode('edgtf_separator', $params);
            }
            ?>
        <?php endif; ?>

        <?php if (!empty($text)) : ?>
            <p class="edgtf-counter-text" <?php echo hyperon_edgtf_get_inline_style($counter_text_styles); ?>><?php echo esc_html($text); ?></p>

        <?php endif; ?>
    </div>
</div>