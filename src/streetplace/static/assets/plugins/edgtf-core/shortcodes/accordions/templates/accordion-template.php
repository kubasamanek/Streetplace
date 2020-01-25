<?php echo '<' . esc_attr($title_tag); ?> class="edgtf-accordion-title">
    <span class="edgtf-tab-title"><?php echo esc_html($title); ?></span>
    <span class="edgtf-accordion-mark">
		<span class="edgtf-icon-plus ion-ios-plus-empty"></span>
		<span class="edgtf-icon-minus ion-ios-close-empty"></span>
	</span>
<?php echo '</'. esc_attr($title_tag); ?>>
<div class="edgtf-accordion-content">
    <div class="edgtf-accordion-content-inner">
        <?php echo do_shortcode($content); ?>
    </div>
</div>