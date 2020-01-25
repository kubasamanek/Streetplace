<div <?php hyperon_edgtf_class_attribute($holder_classes); ?>>
    <div class="edgtf-iwt-content" <?php hyperon_edgtf_inline_style($content_styles); ?>>
        <?php if (!empty($title)) : ?>
            <?php echo '<' . esc_attr($title_tag); ?> class="edgtf-iwt-title" <?php hyperon_edgtf_inline_style($title_styles); ?>>
            <?php if (!empty($link)) : ?>
                <a itemprop="url" href="<?php echo esc_url($link); ?>" target="<?php echo esc_attr($target); ?>">
            <?php endif; ?>
            <span class="edgtf-iwt-icon">
				<?php if (!empty($custom_icon)) : ?>
                    <?php echo wp_get_attachment_image($custom_icon, 'full'); ?>
                <?php else: ?>
                    <?php echo edgtf_core_get_shortcode_module_template_part('templates/icon', 'icon-with-text', '', array('icon_parameters' => $icon_parameters)); ?>
                <?php endif; ?>
	    	</span>
            <span class="edgtf-iwt-title-text"><?php echo esc_html($title); ?></span>
            <?php if (!empty($link)) : ?>
                </a>
            <?php endif; ?>
            <?php echo '</' . esc_attr($title_tag); ?>>


            <?php
            if (!empty($title_separator)) {
                $params['color'] = !empty($title_color) ? $title_color : '';
                $params['position'] = ($type == 'icon-top') ? 'center' : 'left';
                echo hyperon_edgtf_execute_shortcode('edgtf_separator', $params);
            }
            ?>


        <?php endif; ?>
        <?php if (!empty($text)) : ?>
            <p class="edgtf-iwt-text" <?php hyperon_edgtf_inline_style($text_styles); ?>>
                <?php echo esc_html($text); ?>
            </p>
        <?php endif; ?>
    </div>
</div>