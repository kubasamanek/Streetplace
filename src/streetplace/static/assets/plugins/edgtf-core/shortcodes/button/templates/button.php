<button type="submit" <?php hyperon_edgtf_inline_style($button_styles); ?> <?php hyperon_edgtf_class_attribute($button_classes); ?> <?php echo hyperon_edgtf_get_inline_attrs($button_data); ?> <?php echo hyperon_edgtf_get_inline_attrs($button_custom_attrs); ?>>
    <span class="edgtf-btn-text"><?php echo esc_html($text); ?></span>
    <?php echo hyperon_edgtf_icon_collections()->renderIcon($icon, $icon_pack); ?>
    <?php if ($type == 'simple'): ?>
        <br>
        <svg height="2" width="32">
            <path d="M0 0 L0 2 L32 2 L32 0 Z"/>
        </svg>
    <?php endif; ?>

    <?php if ($type == 'gapped_outline'): ?>
        <span class="edgtf-gapped-border edgtf-gapped-border-top"></span>
        <span class="edgtf-gapped-border edgtf-gapped-border-bottom"></span>
    <?php endif; ?>
</button>