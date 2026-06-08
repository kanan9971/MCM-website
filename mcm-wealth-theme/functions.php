<?php
/**
 * MCM Wealth Theme — functions.php
 */

if ( ! defined( 'ABSPATH' ) ) exit;

/* ─────────────────────────────────────────
   Theme Setup
───────────────────────────────────────── */
function mcm_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo', [
        'height'      => 60,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ] );
    add_theme_support( 'html5', [ 'search-form', 'comment-form', 'gallery', 'caption' ] );
    add_theme_support( 'automatic-feed-links' );

    register_nav_menus( [
        'primary' => __( 'Primary Navigation', 'mcm-wealth-theme' ),
    ] );
}
add_action( 'after_setup_theme', 'mcm_theme_setup' );

/* ─────────────────────────────────────────
   Enqueue Styles & Scripts
───────────────────────────────────────── */
function mcm_enqueue_assets() {
    // Google Fonts
    wp_enqueue_style(
        'mcm-google-fonts',
        'https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,600;0,700;1,400;1,600;1,700&family=Inter:wght@400;500;600&display=swap',
        [],
        null
    );

    // Main stylesheet
    wp_enqueue_style(
        'mcm-main',
        get_template_directory_uri() . '/assets/css/main.css',
        [ 'mcm-google-fonts' ],
        '1.0.0'
    );

    // Main script (deferred via wp_script_add_data)
    wp_enqueue_script(
        'mcm-main',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        '1.0.0',
        true
    );
    wp_script_add_data( 'mcm-main', 'defer', true );
}
add_action( 'wp_enqueue_scripts', 'mcm_enqueue_assets' );

/* ─────────────────────────────────────────
   Preconnect for Google Fonts performance
───────────────────────────────────────── */
function mcm_preconnect_fonts() {
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
}
add_action( 'wp_head', 'mcm_preconnect_fonts', 1 );

/* ─────────────────────────────────────────
   Widget Areas
───────────────────────────────────────── */
function mcm_register_widgets() {
    register_sidebar( [
        'name'          => __( 'Sidebar', 'mcm-wealth-theme' ),
        'id'            => 'sidebar',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ] );

    for ( $i = 1; $i <= 4; $i++ ) {
        register_sidebar( [
            'name'          => sprintf( __( 'Footer %d', 'mcm-wealth-theme' ), $i ),
            'id'            => 'footer-' . $i,
            'before_widget' => '<div class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="footer-widget-title">',
            'after_title'   => '</h4>',
        ] );
    }
}
add_action( 'widgets_init', 'mcm_register_widgets' );

/* ─────────────────────────────────────────
   Nav Menu Fallback
───────────────────────────────────────── */
function mcm_fallback_nav( $args ) {
    $pages = [
        home_url( '/' )             => 'Home',
        home_url( '/about-us/' )    => 'About Us',
        home_url( '/services/' )    => 'Services',
        home_url( '/promotions/' )  => 'Promotions',
        home_url( '/contact/' )     => 'Contact',
    ];

    echo '<ul id="primary-menu" class="nav-menu">';
    foreach ( $pages as $url => $label ) {
        $class = ( is_front_page() && $label === 'Home' ) ? ' class="current-menu-item"' : '';
        echo '<li' . $class . '><a href="' . esc_url( $url ) . '">' . esc_html( $label ) . '</a></li>';
    }
    echo '<li><button type="button" class="lang-switch" aria-label="' . esc_attr__( 'Translate this page', 'mcm-wealth-theme' ) . '" onclick="alert(\'' . esc_js( __( 'Language selection coming soon.', 'mcm-wealth-theme' ) ) . '\')"><span class="lang-option is-active">EN</span><span class="lang-option">中</span></button></li>';
    echo '</ul>';
}

/* ─────────────────────────────────────────
   Contact Form Nonce Action
───────────────────────────────────────── */
define( 'MCM_CONTACT_NONCE', 'mcm_contact_form' );
