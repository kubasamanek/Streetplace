<?php if (!empty($title)) : ?>
    <div class="edgtf-ig-title-holder">
        <?php echo '<' . esc_attr($title_tag); ?> class="edgtf-ig-title" <?php echo hyperon_edgtf_get_inline_style($title_styles); ?>>
        <?php echo esc_html($title); ?>
        <?php echo '</' . esc_attr($title_tag); ?>>
        <?php
        if (!empty($title_separator)) {
            $params['color'] = !empty($title_color) ? $title_color : '';
            $params['position'] = 'left';
            echo hyperon_edgtf_execute_shortcode('edgtf_separator', $params);
        }
        ?>
    </div>
<?php endif; ?>