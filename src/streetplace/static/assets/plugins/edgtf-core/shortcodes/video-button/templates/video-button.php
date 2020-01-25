<?php
$rand = rand(0, 1000);
?>
<div class="edgtf-video-button-holder <?php echo esc_attr($holder_classes); ?>">
    <div class="edgtf-video-button-image">
        <?php echo wp_get_attachment_image($video_image, 'full'); ?>
    </div>
    <a class="edgtf-video-button-play" <?php echo hyperon_edgtf_get_inline_style($play_button_styles); ?> href="<?php echo esc_url($video_link); ?>" target="_self" data-rel="prettyPhoto[video_button_pretty_photo_<?php echo esc_attr($rand); ?>]">
		<span class="edgtf-video-button-play-inner">
			<span class="ion-ios-play"></span>
		</span>
    </a>
</div>