<?php $icon_html = hyperon_edgtf_icon_collections()->renderIcon($icon, $icon_pack, $params); ?>
<div class="edgtf-icon-list-holder <?php echo esc_attr($holder_classes); ?>" <?php echo hyperon_edgtf_get_inline_style($holder_styles); ?>>
    <div class="edgtf-il-icon-holder">
        <?php echo wp_kses_post($icon_html); ?>
    </div>
    <p class="edgtf-il-text" <?php echo hyperon_edgtf_get_inline_style($title_styles); ?>><?php echo esc_html($title); ?></p>
</div>