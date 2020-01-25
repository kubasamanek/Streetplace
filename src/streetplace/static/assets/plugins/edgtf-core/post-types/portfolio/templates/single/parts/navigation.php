<?php if (hyperon_edgtf_options()->getOptionValue('portfolio_single_hide_pagination') !== 'yes') : ?>
    <?php
    $back_to_link = get_post_meta(get_the_ID(), 'portfolio_single_back_to_link', true);
    $nav_same_category = hyperon_edgtf_options()->getOptionValue('portfolio_single_nav_same_category') == 'yes';
    ?>
    <div class="edgtf-ps-navigation">
        <?php if (get_previous_post() !== '') : ?>

            <?php
            $previous_post_link = '<div class="nav-item">';
            $previous_post_link .= '<h4>' . get_previous_post()->post_title . '</h4>';
            $previous_post_link .= '<span class="edgtf-ps-nav-mark ion-arrow-left-b"></span>';
            $previous_post_link .= '<h6>' . esc_html__('previous', 'edgtf-core') . '</h6>';
            $previous_post_link .= '</div>';
            ?>

            <div class="edgtf-ps-prev">
                <?php if ($nav_same_category): ?>
                    <?php previous_post_link('%link', "$previous_post_link", true, '', 'portfolio_category'); ?>
                <?php else: ?>
                    <?php previous_post_link('%link', "$previous_post_link"); ?>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <?php if ($back_to_link !== '') : ?>
            <div class="edgtf-ps-back-btn">
                <a itemprop="url" href="<?php echo esc_url(get_permalink($back_to_link)); ?>">
                    <span class="ion-grid"></span>
                </a>
            </div>
        <?php endif; ?>

        <?php if (get_next_post() !== '') : ?>

            <?php
            $next_post_link = '<div class="nav-item">';
            $next_post_link .= '<h4>' . get_next_post()->post_title . '</h4>';
            $next_post_link .= '<h6>' . esc_html__('next', 'edgtf-core') . '</h6>';
            $next_post_link .= '<span class="edgtf-ps-nav-mark ion-arrow-right-b"></span>';
            $next_post_link .= '</div>';
            ?>

            <div class="edgtf-ps-next">
                <?php if ($nav_same_category) {
                    next_post_link('%link', "$next_post_link", true, '', 'portfolio_category');
                } else {
                    next_post_link('%link', "$next_post_link");
                } ?>
            </div>
        <?php endif; ?>
    </div>
<?php endif; ?>