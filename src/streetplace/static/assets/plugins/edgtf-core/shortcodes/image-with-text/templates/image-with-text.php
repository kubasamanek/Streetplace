<div class="edgtf-image-with-text-holder <?php echo esc_attr($holder_classes); ?>">
    <div class="edgtf-iwt-image">
        <?php if ($image_behavior === 'custom-link' && !empty($custom_link_text)) : ?>
            <div class="edgtf-iwt-button"><?php echo hyperon_edgtf_get_button_html($button_params); ?></div>
        <?php endif; ?>

        <?php if ($image_behavior === 'lightbox') : ?>
        <a itemprop="image" href="<?php echo esc_url($image['url']); ?>" data-rel="prettyPhoto[iwt_pretty_photo]" title="<?php echo esc_attr($image['alt']); ?>">
            <?php elseif ($image_behavior === 'custom-link' && !empty($custom_link)) : ?>
            <a itemprop="url" href="<?php echo esc_url($custom_link); ?>" target="<?php echo esc_attr($custom_link_target); ?>">
                <?php endif; ?>

                <?php if (is_array($image_size) && count($image_size)) : ?>
                    <?php echo hyperon_edgtf_generate_thumbnail($image['image_id'], null, $image_size[0], $image_size[1]); ?>
                <?php else: ?>
                    <?php echo wp_get_attachment_image($image['image_id'], $image_size); ?>
                <?php endif; ?>

                <?php if ($image_behavior === 'lightbox' || $image_behavior === 'custom-link') : ?>
            </a>
        <?php endif; ?>

    </div>
    <div class="edgtf-iwt-text-holder">

        <?php if (!empty($title)) : ?>
            <?php echo '<' . esc_attr($title_tag); ?> class="edgtf-iwt-title" <?php echo hyperon_edgtf_get_inline_style($title_styles); ?>>
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
            <p class="edgtf-iwt-text" <?php echo hyperon_edgtf_get_inline_style($text_styles); ?>><?php echo esc_html($text); ?></p>
        <?php endif; ?>

    </div>
</div>