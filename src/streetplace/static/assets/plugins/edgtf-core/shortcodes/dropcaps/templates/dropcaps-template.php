<?php
/**
 * Dropcaps shortcode template
 */
?>

<span class="edgtf-dropcaps <?php echo esc_attr($dropcaps_class); ?>" <?php hyperon_edgtf_inline_style($dropcaps_style); ?>>
	<?php echo esc_html($letter); ?>
</span>