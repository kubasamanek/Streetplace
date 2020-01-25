<div <?php hyperon_edgtf_class_attribute($holder_classes); ?>>

    <?php
    if ($params['section_title_params']['position'] === 'right') {
        echo edgtf_core_get_shortcode_module_template_part('templates/section-title', 'cards-gallery', '', $section_title_params);
    }
    ?>

    <div class="edgtf-cards-gallery-wrapper">
        <div class="edgtf-cards-gallery">
            <?php
            $i = 1;
            foreach ($images as $image) : ?>
                <div class="edgtf-card" <?php hyperon_edgtf_inline_style($background_color); ?>>
                    <div class="edgtf-bundle-item" data-bundle-move-top="<?php echo esc_attr($i * 300); ?>">
                        <?php if ($image['image_link'] !== ''): ?>
                        <a href="<?php echo esc_url($image['image_link']) ?>" target="<?php echo esc_attr($image['image_target']) ?>">
                            <?php endif; ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="#"/>
                            <?php if ($image['image_link'] !== ''): ?>
                        </a>
                    <?php endif; ?>
                        <?php $i++; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="edgtf-fake-card">
            <img src="<?php echo esc_url(end($images)['url']); ?>" alt="<?php esc_attr_e('Fake card image', 'edgtf-core') ?>">
        </div>
    </div>

    <?php
    if ($params['section_title_params']['position'] === 'left') {
        echo edgtf_core_get_shortcode_module_template_part('templates/section-title', 'cards-gallery', '', $section_title_params);
    }
    ?>

</div>