<?php 

if (function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group(array(
    'key' => 'group_57ff4f49ac8c1',
    'title' => __('Editor formats', 'municipio'),
    'fields' => array(
        0 => array(
            'key' => 'field_57ff50bdc2f7d',
            'label' => __('Formats', 'municipio'),
            'name' => 'content_editor_formats',
            'type' => 'checkbox',
            'instructions' => __('Check the formats you would like to enable', 'municipio'),
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'choices' => array(
                'small' => __('Small', 'municipio'),
                'large' => __('Large', 'municipio'),
                'extra-large' => __('Extra large', 'municipio'),
                'uppercase' => __('Uppercase', 'municipio'),
                'lowercase' => __('Lowercase', 'municipio'),
                'capitalize' => __('Capitalize', 'municipio'),
                'dark-gray' => __('Drak gray', 'municipio'),
                'highlight' => __('Highlight', 'municipio'),
                'mark' => __('Mark', 'municipio'),
                'mark-yellow' => __('Mark yellow', 'municipio'),
                'mark-blue' => __('Mark blue', 'municipio'),
                'mark-green' => __('Mark green', 'municipio'),
                'mark-red' => __('Mark red', 'municipio'),
                'mark-purple' => __('Mark purple', 'municipio'),
                'button' => __('Button', 'municipio'),
                'button-light' => __('Light button', 'municipio'),
                'button-first' => __('Button: First color', 'municipio'),
                'button-second' => __('Button: Second color', 'municipio'),
                'button-third' => __('Button: Third color', 'municipio'),
                'button-fourth' => __('Button: Fourth color', 'municipio'),
                'button-fifth' => __('Button: Fifth color', 'municipio'),
                'button-primary' => __('Primary button', 'municipio'),
            ),
            'allow_custom' => 0,
            'save_custom' => 0,
            'default_value' => array(
                0 => 'small',
                1 => 'large',
                2 => 'extra-large',
                3 => 'uppercase',
                4 => 'lowercase',
                5 => 'capitalize',
                6 => 'dark-gray',
                7 => 'highlight',
                8 => 'mark',
                9 => 'mark-yellow',
                10 => 'mark-blue',
                11 => 'mark-green',
                12 => 'mark-red',
                13 => 'mark-purple',
                14 => 'button',
                15 => 'button-primary',
                16 => 'button-first',
                17 => 'button-second',
                18 => 'button-third',
                19 => 'button-fourth',
                20 => 'button-fifth',
                21 => 'button-light',
                22 => 'small',
                23 => 'large',
                24 => 'extra-large',
                25 => 'uppercase',
                26 => 'lowercase',
                27 => 'capitalize',
                28 => 'dark-gray',
                29 => 'highlight',
                30 => 'mark',
                31 => 'mark-yellow',
                32 => 'mark-blue',
                33 => 'mark-green',
                34 => 'mark-red',
                35 => 'mark-purple',
            ),
            'layout' => 'horizontal',
            'toggle' => 1,
            'return_format' => 'value',
        ),
        1 => array(
            'key' => 'field_59e0c2a482b12',
            'label' => __('Plugins', 'municipio'),
            'name' => 'content_editor_plugins',
            'type' => 'checkbox',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'choices' => array(
                'MceButtons' => __('MceButtons', 'municipio'),
            ),
            'allow_custom' => 0,
            'save_custom' => 0,
            'default_value' => array(
            ),
            'layout' => 'vertical',
            'toggle' => 0,
            'return_format' => 'value',
        ),
    ),
    'location' => array(
        0 => array(
            0 => array(
                'param' => 'options_page',
                'operator' => '==',
                'value' => 'acf-options-content-editor',
            ),
        ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => 1,
    'description' => '',
));
}