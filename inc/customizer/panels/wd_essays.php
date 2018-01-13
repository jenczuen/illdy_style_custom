<?php
// Set Panel ID
$panel_id = 'illdy_wd_essays';

// Set prefix
$prefix = 'illdy';

$wp_customize->add_section( $panel_id,
    array(
        'priority'          => illdy_get_section_position($panel_id),
        'capability'        => 'edit_theme_options',
        'theme_supports'    => '',
        'title'             => __( 'WD essays Section', 'illdy' ),
        'description'       => __( 'desc.', 'illdy' ),
        'panel'             => 'illdy_frontpage_panel'
    )
);

// Show this section
$wp_customize->add_setting( $prefix . '_wd_essays_show',
    array(
        'sanitize_callback' => $prefix . '_sanitize_checkbox',
        'default'           => 1,
        'transport'         => 'postMessage'
    )
);
$wp_customize->add_control( new Epsilon_Control_Toggle( $wp_customize, 
    $prefix . '_wd_essays_show',
    array(
        'type'      => 'mte-toggle',
        'label'     => __( 'Show this section?', 'illdy' ),
        'section'   => $panel_id,
        'priority'  => 1
    ) )
);
