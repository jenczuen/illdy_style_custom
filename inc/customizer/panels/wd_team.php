<?php
// Set Panel ID
$panel_id = 'illdy_wd_team';

// Set prefix
$prefix = 'illdy';

$wp_customize->add_section( $panel_id,
    array(
        'priority'          => illdy_get_section_position($panel_id),
        'capability'        => 'edit_theme_options',
        'theme_supports'    => '',
        'title'             => __( 'WD team Section', 'illdy' ),
        'description'       => __( 'desc.', 'illdy' ),
        'panel'             => 'illdy_frontpage_panel'
    )
);

// Show this section
$wp_customize->add_setting( $prefix . '_wd_team_show',
    array(
        'sanitize_callback' => $prefix . '_sanitize_checkbox',
        'default'           => 1,
        'transport'         => 'postMessage'
    )
);
$wp_customize->add_control( new Epsilon_Control_Toggle( $wp_customize, 
    $prefix . '_wd_team_show',
    array(
        'type'      => 'mte-toggle',
        'label'     => __( 'Show this section?', 'illdy' ),
        'section'   => $panel_id,
        'priority'  => 1
    ) )
);

$wp_customize->add_control(
    new Epsilon_Control_Button(
        $wp_customize,
        $prefix .'_team_widget_button',
        array(
            'text'         => __( 'Add & Edit Members', 'illdy' ),
            'section_id'    => 'sidebar-widgets-front-page-team-sidebar',
            'icon'          => 'dashicons-plus',
            'section'       => $panel_id,
            'priority'      => 5
        )
    )
);