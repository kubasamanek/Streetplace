<?php
namespace EdgeCore\CPT\Shortcodes\SocialShare;

use EdgeCore\Lib;

class SocialShare implements Lib\ShortcodeInterface
{
    private $base;
    private $socialNetworks;

    function __construct() {
        $this->base = 'edgtf_social_share';
        $this->socialNetworks = array(
            'facebook',
            'twitter',
            'google_plus',
            'linkedin',
            'tumblr',
            'pinterest',
            'vk'
        );
        add_action('vc_before_init', array($this, 'vcMap'));
    }

    public function getBase() {
        return $this->base;
    }

    public function getSocialNetworks() {
        return $this->socialNetworks;
    }

    public function vcMap() {
        if (function_exists('vc_map')) {
            vc_map(
                array(
                    'name' => esc_html__('Edge Social Share', 'edgtf-core'),
                    'base' => $this->getBase(),
                    'icon' => 'icon-wpb-social-share extended-custom-icon',
                    'category' => esc_html__('by EDGE', 'edgtf-core'),
                    'allowed_container_element' => 'vc_row',
                    'params' => array(
                        array(
                            'type' => 'textfield',
                            'param_name' => 'title',
                            'heading' => esc_html__('Social Share Title', 'edgtf-core'),
                            'dependency' => array('element' => 'type', 'value' => array('list'))
                        )
                    )
                )
            );
        }
    }

    public function render($atts, $content = null) {
        $args = array(
            'title' => ''
        );
        $params = shortcode_atts($args, $atts);

        //Is social share enabled
        $params['enable_social_share'] = (hyperon_edgtf_options()->getOptionValue('enable_social_share') == 'yes') ? true : false;

        //Is social share enabled for post type
        $post_type = get_post_type();
        $params['enabled'] = (hyperon_edgtf_options()->getOptionValue('enable_social_share_on_' . $post_type) == 'yes') ? true : false;

        //Social Networks Data
        $params['networks'] = $this->getSocialNetworksParams($params);

        $html = '';

        if ($params['enable_social_share']) {
            if ($params['enabled']) {
                $html .= edgtf_core_get_shortcode_module_template_part('templates/list', 'social-share', '', $params);
            }
        }

        return $html;
    }

    /**
     * Get Social Networks data to display
     * @return array
     */
    private function getSocialNetworksParams($params) {
        $networks = array();

        foreach ($this->socialNetworks as $net) {
            $html = '';

            if (hyperon_edgtf_options()->getOptionValue('enable_' . $net . '_share') == 'yes') {
                $image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                $params = array(
                    'name' => $net
                );
                $params['data'] = $this->getSocialNetworkShareData($net, $image);

                $html = edgtf_core_get_shortcode_module_template_part('templates/parts/network', 'social-share', '', $params);
            }

            $networks[$net] = $html;
        }

        return $networks;
    }

    /**
     * Get share link for networks
     *
     * @param $net
     * @param $image
     * @return string
     */
    private function getSocialNetworkShareData($net, $image) {
        $data = array();

        switch ($net) {
            case 'facebook':
                if (wp_is_mobile()) {
                    $link = 'window.open(\'http://m.facebook.com/sharer.php?u=' . urlencode(get_permalink()) . '\');';
                } else {
                    $link = 'window.open(\'http://www.facebook.com/sharer.php?u=' . urlencode(get_permalink()) . '\', \'sharer\', \'toolbar=0,status=0,width=620,height=280\');';
                }
                $label = esc_html__('fb', 'edgtf-core');
                break;
            case 'twitter':
                $count_char = (isset($_SERVER['https'])) ? 23 : 22;
                $twitter_via = (hyperon_edgtf_options()->getOptionValue('twitter_via') !== '') ? ' via ' . hyperon_edgtf_options()->getOptionValue('twitter_via') . ' ' : '';
                if (wp_is_mobile()) {
                    $link = 'window.open(\'https://twitter.com/intent/tweet?text=' . urlencode(hyperon_edgtf_the_excerpt_max_charlength($count_char) . $twitter_via) . get_permalink() . '\', \'popupwindow\', \'scrollbars=yes,width=800,height=400\');';
                } else {
                    $link = 'window.open(\'http://twitter.com/home?status=' . urlencode(hyperon_edgtf_the_excerpt_max_charlength($count_char) . $twitter_via) . get_permalink() . '\', \'popupwindow\', \'scrollbars=yes,width=800,height=400\');';
                }
                $label = esc_html__('tw', 'edgtf-core');
                break;
            case 'google_plus':
                $link = 'popUp=window.open(\'https://plus.google.com/share?url=' . urlencode(get_permalink()) . '\', \'popupwindow\', \'scrollbars=yes,width=800,height=400\');popUp.focus();return false;';
                $label = esc_html__('g+', 'edgtf-core');
                break;
            case 'linkedin':
                $link = 'popUp=window.open(\'http://linkedin.com/shareArticle?mini=true&amp;url=' . urlencode(get_permalink()) . '&amp;title=' . urlencode(get_the_title()) . '\', \'popupwindow\', \'scrollbars=yes,width=800,height=400\');popUp.focus();return false;';
                $label = esc_html__('lnkd', 'edgtf-core');
                break;
            case 'tumblr':
                $link = 'popUp=window.open(\'http://www.tumblr.com/share/link?url=' . urlencode(get_permalink()) . '&amp;name=' . urlencode(get_the_title()) . '&amp;description=' . urlencode(get_the_excerpt()) . '\', \'popupwindow\', \'scrollbars=yes,width=800,height=400\');popUp.focus();return false;';
                $label = esc_html__('tmlr', 'edgtf-core');
                break;
            case 'pinterest':
                $link = 'popUp=window.open(\'http://pinterest.com/pin/create/button/?url=' . urlencode(get_permalink()) . '&amp;description=' . hyperon_edgtf_addslashes(get_the_title()) . '&amp;media=' . urlencode($image[0]) . '\', \'popupwindow\', \'scrollbars=yes,width=800,height=400\');popUp.focus();return false;';
                $label = esc_html__('pint', 'edgtf-core');
                break;
            case 'vk':
                $link = 'popUp=window.open(\'http://vkontakte.ru/share.php?url=' . urlencode(get_permalink()) . '&amp;title=' . urlencode(get_the_title()) . '&amp;description=' . urlencode(get_the_excerpt()) . '&amp;image=' . urlencode($image[0]) . '\', \'popupwindow\', \'scrollbars=yes,width=800,height=400\');popUp.focus();return false;';
                $label = esc_html__('vk', 'edgtf-core');
                break;
            default:
                $link = '';
                $label = '';
        }

        $data['link'] = $link;
        $data['label'] = $label;

        return $data;
    }
}