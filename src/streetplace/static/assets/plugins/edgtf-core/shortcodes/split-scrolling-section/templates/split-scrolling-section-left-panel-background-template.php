<?php if (!empty($images)): ?>
    <div class="edgtf-sss-background-slider edgtf-owl-slider" data-enable-navigation="no">
        <?php foreach ($images as $image): ?>
            <div class="owl-lazy" data-src="<?php echo esc_url($image['url']); ?>"></div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>