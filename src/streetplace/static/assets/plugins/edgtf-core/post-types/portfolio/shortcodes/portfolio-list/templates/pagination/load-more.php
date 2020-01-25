<?php if ($query_results->max_num_pages > 1) {
    $holder_styles = $this_object->getLoadMoreStyles($params);
    ?>
    <div class="edgtf-pl-loading">
        <div class="edgtf-pl-loading-bounce1"></div>
        <div class="edgtf-pl-loading-bounce2"></div>
        <div class="edgtf-pl-loading-bounce3"></div>
    </div>
    <div class="edgtf-pl-load-more-holder">
        <div class="edgtf-pl-load-more" <?php hyperon_edgtf_inline_style($holder_styles); ?>>
            <?php
            echo hyperon_edgtf_get_button_html(array(
                'link' => 'javascript: void(0)',
                'size' => 'large',
                'text' => esc_html__('LOAD MORE', 'edgtf-core')
            ));
            ?>
        </div>
    </div>
<?php }