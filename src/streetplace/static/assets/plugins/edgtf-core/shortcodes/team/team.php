<?php
namespace EdgeCore\CPT\Shortcodes\Team;

use EdgeCore\lib;

class Team implements lib\ShortcodeInterface
{
    private $base;

    public function __construct() {
        $this->base = 'edgtf_team';

        add_action('vc_before_init', array($this, 'vcMap'));
    }

    public function getBase() {
        return $this->base;
    }

    public function vcMap() {
        $team_social_icons_array = array();

        for ($x = 1; $x < 6; $x++) {
            $teamIconCollections = hyperon_edgtf_icon_collections()->getCollectionsWithSocialIcons();
            foreach ($teamIconCollections as $collection_key => $collection) {

                $team_social_icons_array[] = array(
                    'type' => 'dropdown',
                    'heading' => esc_html__('Social Icon ', 'edgtf-core') . $x,
                    'param_name' => 'team_social_' . $collection->param . '_' . $x,
                    'value' => $collection->getSocialIconsArrayVC(),
                    'dependency' => Array('element' => 'team_social_icon_pack', 'value' => array($collection_key))
                );
            }

            $team_social_icons_array[] = array(
                'type' => 'textfield',
                'heading' => esc_html__('Social Icon ', 'edgtf-core') . $x . esc_html__(' Link', 'edgtf-core'),
                'param_name' => 'team_social_icon_' . $x . '_link',
                'dependency' => array(
                    'element' => 'team_social_icon_pack',
                    'value' => hyperon_edgtf_icon_collections()->getIconCollectionsKeys()
                )
            );

            $team_social_icons_array[] = array(
                'type' => 'dropdown',
                'heading' => esc_html__('Social Icon ', 'edgtf-core') . $x . esc_html__(' Target', 'edgtf-core'),
                'param_name' => 'team_social_icon_' . $x . '_target',
                'value' => array(
                    esc_html__('Same Window', 'edgtf-core') => '_self',
                    esc_html__('New Window', 'edgtf-core') => '_blank'
                ),
                'dependency' => Array('element' => 'team_social_icon_' . $x . '_link', 'not_empty' => true)
            );
        }

        if (function_exists('vc_map')) {
            vc_map(
                array(
                    'name' => esc_html__('Edge Team', 'edgtf-core'),
                    'base' => $this->base,
                    'category' => esc_html__('by EDGE', 'edgtf-core'),
                    'icon' => 'icon-wpb-team extended-custom-icon',
                    'allowed_container_element' => 'vc_row',
                    'params' => array_merge(
                        array(
                            array(
                                'type' => 'dropdown',
                                'param_name' => 'type',
                                'heading' => esc_html__('Type', 'edgtf-core'),
                                'value' => array(
                                    esc_html__('Info Below Image', 'edgtf-core') => 'info-below-image',
                                    esc_html__('Info On Image Hover', 'edgtf-core') => 'info-on-image'
                                ),
                                'save_always' => true
                            ),
                            array(
                                'type' => 'attach_image',
                                'param_name' => 'team_image',
                                'heading' => esc_html__('Image', 'edgtf-core')
                            ),
                            array(
                                'type' => 'textfield',
                                'param_name' => 'team_name',
                                'heading' => esc_html__('Name', 'edgtf-core')
                            ),
                            array(
                                'type' => 'dropdown',
                                'param_name' => 'team_name_tag',
                                'heading' => esc_html__('Name Tag', 'edgtf-core'),
                                'value' => array_flip(hyperon_edgtf_get_title_tag(true)),
                                'save_always' => true,
                                'dependency' => array('element' => 'team_name', 'not_empty' => true)
                            ),
                            array(
                                'type' => 'colorpicker',
                                'param_name' => 'team_name_color',
                                'heading' => esc_html__('Name Color', 'edgtf-core'),
                                'dependency' => array('element' => 'team_name', 'not_empty' => true)
                            ),
                            array(
                                'type' => 'textfield',
                                'param_name' => 'team_position',
                                'heading' => esc_html__('Position', 'edgtf-core')
                            ),
                            array(
                                'type' => 'colorpicker',
                                'param_name' => 'team_position_color',
                                'heading' => esc_html__('Position Color', 'edgtf-core'),
                                'dependency' => array('element' => 'team_position', 'not_empty' => true)
                            ),
                            array(
                                'type' => 'textfield',
                                'param_name' => 'team_text',
                                'heading' => esc_html__('Text', 'edgtf-core')
                            ),
                            array(
                                'type' => 'colorpicker',
                                'param_name' => 'team_text_color',
                                'heading' => esc_html__('Text Color', 'edgtf-core'),
                                'dependency' => array('element' => 'team_text', 'not_empty' => true)
                            ),
                            array(
                                'type' => 'dropdown',
                                'param_name' => 'team_social_icon_pack',
                                'heading' => esc_html__('Social Icon Pack', 'edgtf-core'),
                                'value' => array_merge(array('' => ''), hyperon_edgtf_icon_collections()->getIconCollectionsVCExclude('linea_icons')),
                                'save_always' => true
                            ),
                        ),
                        $team_social_icons_array
                    )
                )
            );
        }
    }

    public function render($atts, $content = null) {
        $args = array(
            'type' => 'info-below-image',
            'team_image' => '',
            'team_name' => '',
            'team_name_tag' => 'h4',
            'team_name_color' => '',
            'team_position' => '',
            'team_position_color' => '',
            'team_text' => '',
            'team_text_color' => '',
            'team_social_icon_pack' => ''
        );

        $team_social_icons_form_fields = array();
        $number_of_social_icons = 5;

        for ($x = 1; $x <= $number_of_social_icons; $x++) {

            foreach (hyperon_edgtf_icon_collections()->iconCollections as $collection_key => $collection) {
                $team_social_icons_form_fields['team_social_' . $collection->param . '_' . $x] = '';
            }

            $team_social_icons_form_fields['team_social_icon_' . $x . '_link'] = '';
            $team_social_icons_form_fields['team_social_icon_' . $x . '_target'] = '';
        }

        $args = array_merge($args, $team_social_icons_form_fields);

        $params = shortcode_atts($args, $atts);

        $params['number_of_social_icons'] = 5;

        $params['type'] = !empty($params['type']) ? $params['type'] : $args['type'];
        $params['holder_classes'] = $this->getHolderClasses($params);
        $params['team_name_tag'] = !empty($params['team_name_tag']) ? $params['team_name_tag'] : $args['team_name_tag'];
        $params['team_social_icons'] = $this->getTeamSocialIcons($params);
        $params['team_name_styles'] = $this->getTeamNameStyles($params);
        $params['team_position_styles'] = $this->getTeamPositionStyles($params);
        $params['team_text_styles'] = $this->getTeamTextStyles($params);

        //Get HTML from template based on type of team
        $html = edgtf_core_get_shortcode_module_template_part('templates/' . $params['type'], 'team', '', $params);

        return $html;
    }

    private function getHolderClasses($params) {
        $holderClasses = array();

        $holderClasses[] = !empty($params['type']) ? 'edgtf-team-' . $params['type'] : '';

        return implode(' ', $holderClasses);
    }

    private function getTeamSocialIcons($params) {
        extract($params);
        $social_icons = array();

        if ($team_social_icon_pack !== '') {

            $icon_pack = hyperon_edgtf_icon_collections()->getIconCollection($team_social_icon_pack);
            $team_social_icon_type_label = 'team_social_' . $icon_pack->param;
            $team_social_icon_param_label = $icon_pack->param;

            for ($i = 1; $i <= $params['number_of_social_icons']; $i++) {

                $team_social_icon = ${$team_social_icon_type_label . '_' . $i};
                $team_social_link = ${'team_social_icon_' . $i . '_link'};
                $team_social_target = ${'team_social_icon_' . $i . '_target'};

                if ($team_social_icon !== '') {

                    $team_icon_params = array();
                    $team_icon_params['icon_pack'] = $team_social_icon_pack;
                    $team_icon_params[$team_social_icon_param_label] = $team_social_icon;
                    $team_icon_params['link'] = ($team_social_link !== '') ? $team_social_link : '';
                    $team_icon_params['target'] = ($team_social_target !== '') ? $team_social_target : '';

                    $social_icons[] = hyperon_edgtf_execute_shortcode('edgtf_icon', $team_icon_params);
                }
            }
        }

        return $social_icons;
    }

    private function getTeamNameStyles($params) {
        $styles = array();

        if (!empty($params['team_name_color'])) {
            $styles[] = 'color: ' . $params['team_name_color'];
        }

        return implode(';', $styles);
    }

    private function getTeamPositionStyles($params) {
        $styles = array();

        if (!empty($params['team_position_color'])) {
            $styles[] = 'color: ' . $params['team_position_color'];
        }

        return implode(';', $styles);
    }

    private function getTeamTextStyles($params) {
        $styles = array();

        if (!empty($params['team_text_color'])) {
            $styles[] = 'color: ' . $params['team_text_color'];
        }

        return implode(';', $styles);
    }
}