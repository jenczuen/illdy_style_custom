<?php
// Set Panel ID
$panel_id = 'illdy_wd_contact';

// Set prefix
$prefix = 'illdy_wd_contact';

$wp_customize->add_section( $panel_id,
    array(
        'priority'          => illdy_get_section_position($panel_id),
        'capability'        => 'edit_theme_options',
        'theme_supports'    => '',
        'title'             => __( 'WD Contact Section', 'illdy' ),
        'description'       => __( 'desc.', 'illdy' ),
        'panel'             => 'illdy_frontpage_panel'
    )
);

// Show this section
$wp_customize->add_setting( $prefix . '_show',
    array(
        'sanitize_callback' => $prefix . '_sanitize_checkbox',
        'default'           => 1,
        'transport'         => 'postMessage'
    )
);
$wp_customize->add_control( new Epsilon_Control_Toggle( $wp_customize, 
    $prefix . '_show',
    array(
        'type'      => 'mte-toggle',
        'label'     => __( 'Show this section?', 'illdy' ),
        'section'   => $panel_id,
        'priority'  => 1
    ) )
);






/* email */
$wp_customize->add_setting( $prefix.'_email',
    array(
        'sanitize_callback'  => 'sanitize_text_field',
        'default'            => __( 'contact@site.com', 'illdy' ),
        'transport'          => 'postMessage'
    )
);

$wp_customize->add_control( $prefix.'_email',
    array(
        'label'         => __( 'Email addr.', 'illdy' ),
        'section'       => $panel_id,
        'settings'      => $prefix.'_email',
        'priority'      => 2
    )
);

/* phone number */
$wp_customize->add_setting( $prefix.'_phone',
    array(
        'sanitize_callback'  => 'illdy_sanitize_html',
        'default'            => __( '(555) 555-5555', 'illdy' ),
        'transport'          => 'postMessage'
    )
);

$wp_customize->add_control( $prefix.'_phone',
    array(
        'label'         => __( 'Phone number', 'illdy' ),
        'section'       => $panel_id,
        'settings'      => $prefix.'_phone',
        'priority'      => 12
    )
);

// Address 1
$wp_customize->add_setting(
    $prefix . '_address1',
    array(
        'sanitize_callback'  => 'illdy_sanitize_html',
        'default'            => __( 'Street 221B Baker Street, ', 'illdy' ),
        'transport'          => 'postMessage'
    )
);

$wp_customize->add_control(
    $prefix . '_address1',
    array(
        'label'         => __( 'Address 1', 'illdy' ),
        'section'       => $panel_id,
        'priority'      => 13
    )
);

// Address 2
$wp_customize->add_setting(
    $prefix . '_address2',
    array(
        'sanitize_callback'  => 'illdy_sanitize_html',
        'default'            => __( 'London, UK', 'illdy' ),
        'transport'          => 'postMessage'
    )
);

$wp_customize->add_control(
    $prefix . '_address2',
    array(
        'label'         => __( 'Address 2', 'illdy' ),
        'section'       => $panel_id,
        'priority'      => 13
    )
);
