<?php

function moxieit_enqueue_styles()
{
    wp_enqueue_style('customozied-bootstrap-styling', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('template-stylesheet', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style('google-web-font-preconnect', 'https://fonts.googleapis.com');
    wp_enqueue_style('google-font-preconnect', 'https://fonts.gstatic.com');
    wp_enqueue_style('google-font', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@400&family=Roboto+Slab:wght@500;600&display=swap');
    wp_enqueue_style('icon-font-stylesheet', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css');
    wp_enqueue_style('bootstrap-icons-stylesheet', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css');
    wp_enqueue_style('animate-stylesheet', get_template_directory_uri() . '/lib/animate/animate.min.css');
    wp_enqueue_style('owl-carousel-stylesheet', get_template_directory_uri() . '/lib/owlcarousel/assets/owl.carousel.min.css');
}
add_action('wp_enqueue_scripts', 'moxieit_enqueue_styles');

function moxieit_enqueue_scripts()
{
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap-script', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js');
    wp_enqueue_script('wow-js', get_template_directory_uri() . '/lib/wow/wow.min.js');
    wp_enqueue_script('easeing-js', get_template_directory_uri() . '/lib/easing/easing.min.js');
    wp_enqueue_script('waypoint-js', get_template_directory_uri() . '/lib/waypoints/waypoints.min.js');
    wp_enqueue_script('owl-carousel-js', get_template_directory_uri() . '/lib/owlcarousel/owl.carousel.min.js');
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array(), null, true);
}

add_action('wp_enqueue_scripts', 'moxieit_enqueue_scripts');

function moxieit_theme_setup()
{
    add_theme_support('menus');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'height' => 100,
        'width' => 400,
        'flex-height' => true,
        'flex-width' => true,
    ));
    add_theme_support('site-icon');

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'moxieit'),
        'footer'  => __('Footer Menu', 'moxieit'),
    ));
}

add_action('after_setup_theme', 'moxieit_theme_setup');

function moxieit_customize_register($wp_customize)
{
    $wp_customize->add_section('moxieit_topbar', array(
        'title' => __('Topbar Settings', 'moxieit'),
        'priority' => 30,
    ));

    $wp_customize->add_section('moxieit_footer', array(
        'title' => __('Footer Settings', 'moxieit'),
        'priority' => 31,
    ));

    $wp_customize->add_setting('topbar_address', array(
        'default' => '123 Street, New York, USA',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('topbar_address', array(
        'label'  => 'Topbar Address',
        'section' => 'moxieit_topbar',
        'type' => 'text',
    ));

    $wp_customize->add_setting('topbar_phone', array(
        'default' => '+012 345 67890',
        'sanitize_callback' => 'absint',
    ));

    $wp_customize->add_control('topbar_phone', array(
        'label' => 'Topbar Phone',
        'section' => 'moxieit_topbar',
        'type' => 'text',
    ));

    $wp_customize->add_setting('footer_address', array(
        'default' => '123 Street, New York, USA',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('footer_address', array(
        'label' => 'Footer Address',
        'section' => 'moxieit_footer',
        'type' => 'text',
    ));

    $wp_customize->add_setting('footer_phone', array(
        'default' => '+012 345 67890',
        'sanitize_callback' => 'absint',
    ));

    $wp_customize->add_control('footer_phone', array(
        'label' => 'Footer Phone',
        'section' => 'moxieit_footer',
        'type' => 'text',
    ));

    $wp_customize->add_setting('footer_email', array(
        'default' => 'info@example.com',
        'sanitize_callback' => 'sanitize_email',
    ));

    $wp_customize->add_control('footer_email', array(
        'label' => 'Footer Email',
        'section' => 'moxieit_footer',
        'type' => 'email',
    ));

    $wp_customize->add_setting('twitter_url', array(
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('twitter_url', array(
        'label' => 'Twitter URL',
        'section' => 'moxieit_footer',
        'type' => 'url',
    ));

    $wp_customize->add_setting('facebook_url', array(
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('facebook_url', array(
        'label' => 'Facebook URL',
        'section' => 'moxieit_footer',
        'type' => 'url',
    ));

    $wp_customize->add_setting('youtube_url', array(
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('youtube_url', array(
        'label' => 'Youtube URL',
        'section' => 'moxieit_footer',
        'type' => 'url',
    ));

    $wp_customize->add_setting('instagram_url', array(
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('instagram_url', array(
        'label' => 'Instagram URL',
        'section' => 'moxieit_footer',
        'type' => 'url',
    ));

    $wp_customize->add_setting('linkedin_url', array(
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('linkedin_url', array(
        'label' => 'LinkedIn URL',
        'section' => 'moxieit_footer',
        'type' => 'url',
    ));

    $wp_customize->add_setting('business_hours_weekdays', array(
        'default' => '09:00 am - 07:00 pm',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('business_hours_weekdays', array(
        'label' => 'Business Hours Weekdays',
        'section' => 'moxieit_footer',
        'type' => 'text',
    ));

    $wp_customize->add_setting('business_hours_saturday', array(
        'default' => '09:00 am - 12:00 pm',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('business_hours_saturday', array(
        'label' => 'Business Hours Saturday',
        'section' => 'moxieit_footer',
        'type' => 'text',
    ));

    $wp_customize->add_setting('business_hours_sunday', array(
        'default' => 'Closed',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('business_hours_sunday', array(
        'label' => 'Business Hours Sunday',
        'section' => 'moxieit_footer',
        'type' => 'text',
    ));
}

add_action('customize_register', 'moxieit_customize_register');

function moxieit_register_practice_area_cpt()
{
    $args = array(
        'label' => __('Practice Area', 'moxieit'),
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'show_ui' => true,
        'menu_position' => 5,
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
            'excerpt',
        ),
        'menu_icon' => 'dashicons-businessman',
        'rewrite' => array(
            'slug' => 'practice-area'
        ),
    );
    register_post_type('practice_area', $args);
}

add_action('init', 'moxieit_register_practice_area_cpt');

function moxieit_register_practice_areas_block()
{
    register_block_type(
        get_template_directory() . '/blocks/practice-areas',
        array(
            'render_callback' => 'moxieit_render_practice_areas_block'
        )
    );
}

add_action('init', 'moxieit_register_practice_areas_block');

function moxieit_render_practice_areas_block()
{
    ob_start();

    include get_template_directory() . '/blocks/practice-areas/render.php';

    return ob_get_clean();
}
function moxieit_register_block_assets()
{
    $asset_file = include get_template_directory() . '/build/index.asset.php';

    wp_register_script(
        'moxieit-practice-areas-editor',
        get_template_directory_uri() . '/build/index.js',
        $asset_file['dependencies'],
        $asset_file['version']
    );
}
add_action('init', 'moxieit_register_block_assets');

function moxieit_register_blog_grid_block()
{
    register_block_type(
        get_template_directory() . '/blocks/blog-grid',
        array(
            'render_callback' => 'moxieit_render_blog_grid_block'
        )
    );
}

add_action('init', 'moxieit_register_blog_grid_block');

function moxieit_render_blog_grid_block()
{
    ob_start();

    include get_template_directory() . '/blocks/blog-grid/render.php';

    return ob_get_clean();
}

function moxieit_register_consultation_form_block()
{
    register_block_type(
        get_template_directory() . '/blocks/consultation-form',
        array(
            'render_callback' => 'moxieit_render_consultation_form_block'
        )
    );
}

add_action('init', 'moxieit_register_consultation_form_block');

function moxieit_render_consultation_form_block()
{
    ob_start();

    include get_template_directory() . '/blocks/consultation-form/render.php';

    return ob_get_clean();
}

function moxieit_register_hero_slider_block()
{
    register_block_type(
        get_template_directory() . '/blocks/hero-slider',
        array(
            'render_callback' => 'moxieit_render_hero_slider_block'
        )
    );
}

add_action('init', 'moxieit_register_hero_slider_block');

function moxieit_render_hero_slider_block()
{
    ob_start();

    include get_template_directory() . '/blocks/hero-slider/render.php';

    return ob_get_clean();
}

function moxieit_register_about_us_block()
{
    register_block_type(
        get_template_directory() . '/blocks/about-us',
        array(
            'render_callback' => 'moxieit_render_about_us_block'
        )
    );
}

add_action('init', 'moxieit_register_about_us_block');

function moxieit_render_about_us_block()
{
    ob_start();

    include get_template_directory() . '/blocks/about-us/render.php';

    return ob_get_clean();
}
