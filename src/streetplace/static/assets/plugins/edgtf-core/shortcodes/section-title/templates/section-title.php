<div class="edgtf-section-title-holder <?php echo esc_attr($holder_classes); ?>" <?php echo hyperon_edgtf_get_inline_style($holder_styles); ?>>
    <div class="edgtf-st-inner">
        <?php if (!empty($title)) : ?>
            <?php echo '<' . esc_attr($title_tag); ?> class="edgtf-st-title" <?php echo hyperon_edgtf_get_inline_style($title_styles); ?>>
            <?php echo wp_kses($title, array('br' => true, 'span' => array('class' => true))); ?>
            <?php echo '</' . esc_attr($title_tag); ?>>
        <?php endif; ?>

        <?php
        if ($separator == 'true') {
            $params['color'] = $title_color;
            $params['position'] = $position;
            echo hyperon_edgtf_execute_shortcode('edgtf_separator', $params);
        }
        ?>

        <?php if (!empty($text)) : ?>
            <?php echo '<' . esc_attr($text_tag); ?> class="edgtf-st-text" <?php echo hyperon_edgtf_get_inline_style($text_styles); ?>>
            <?php echo wp_kses($text, array('br' => true)); ?>
            <?php echo '</' . esc_attr($text_tag); ?>>
        <?php endif; ?>
    </div>
</div>