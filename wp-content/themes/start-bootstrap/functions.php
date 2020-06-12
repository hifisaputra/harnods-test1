<?php

/**
 * Register navigation menus.
 */
function start_bootstrap_menus() {

    $locations = array(
        'primary'  => __( 'Primary Navigation Menu' )
    );

    register_nav_menus( $locations );
}

add_action( 'init', 'start_bootstrap_menus' );


/**
 * Add custom class to the li tag.
 *
 * @param $classes
 * @param $item
 * @param $args
 * @return array
 */
function start_bootstrap_add_custom_classes_to_menu($classes, $item, $args) {
    if($args->theme_location == 'primary') {
        $classes[] = 'nav-item';
    }
    return $classes;
}

add_filter('nav_menu_css_class', 'start_bootstrap_add_custom_classes_to_menu', 1, 3);

/**
 * Modify the way wordpress render navigation menu to add the class nav-link to the anchor tag.
 *
 * @param $ulclass
 * @return string|string[]|null
 */
function start_bootstrap_add_menuclass($ulclass) {
    return preg_replace('/<a /', '<a class="nav-link"', $ulclass);
}

add_filter('wp_nav_menu','start_bootstrap_add_menuclass');

/**
 * Add support for featured image.
 *
 */
add_theme_support( 'post-thumbnails' );

/**
 * Add options to change social media url to wordpress customizer.
 *
 */
function start_bootstrap_customizer_options ( $wp_customize ) {
    //All our sections, settings, and controls will be added here

    $wp_customize->add_section( 'start_bootstrap_social_media' , array(
        'title'      => __( 'Social Media'),
        'priority'   => 30,
    ) );

    $social_media = ['twitter', 'facebook', 'github'];

    foreach ($social_media as $icon_name) {
        $wp_customize->add_setting("social_media_{$icon_name}_url", array(
            'default'        => ''
        ));

        $wp_customize->add_control("social_media_{$icon_name}_url", array(
            'label'   => ucfirst($icon_name),
            'section' => 'start_bootstrap_social_media',
            'type'    => 'text',
            'input_attrs' => [
                'placeholder'    => "https://{$icon_name}.com/example"
            ]
        ));
    }
}

add_action( 'customize_register', 'start_bootstrap_customizer_options' );

?>