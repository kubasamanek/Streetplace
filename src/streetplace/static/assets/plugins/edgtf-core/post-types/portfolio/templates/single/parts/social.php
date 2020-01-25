<?php if (hyperon_edgtf_core_plugin_installed() && hyperon_edgtf_options()->getOptionValue('enable_social_share') == 'yes' && hyperon_edgtf_options()->getOptionValue('enable_social_share_on_portfolio-item') == 'yes') : ?>
    <div class="edgtf-ps-info-item edgtf-ps-social-share">
        <h5 class="edgtf-ps-info-title"><?php esc_html_e('share:', 'edgtf-core'); ?></h5>
        <?php echo hyperon_edgtf_get_social_share_html() ?>
    </div>
<?php endif; ?>