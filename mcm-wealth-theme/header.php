<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header" role="banner">
    <div class="container">
        <div class="header-inner">

            <!-- Logo -->
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo" aria-label="<?php bloginfo( 'name' ); ?> – Home">
                <img class="logo-mark" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo_icon.jpg' ); ?>" alt="" aria-hidden="true">
                <span class="logo-text">
                    <span class="logo-name">MCM Wealth</span>
                    <span class="logo-sub">Management Limited</span>
                </span>
            </a>

            <!-- Nav -->
            <nav class="header-nav" role="navigation" aria-label="Primary Navigation" id="primary-navigation">
                <?php
                wp_nav_menu( [
                    'theme_location' => 'primary',
                    'menu_id'        => 'primary-menu',
                    'menu_class'     => 'nav-menu',
                    'container'      => false,
                    'fallback_cb'    => 'mcm_fallback_nav',
                    'items_wrap'     => '<ul id="%1$s" class="%2$s" role="menubar">%3$s</ul>',
                    'walker'         => new MCM_Nav_Walker(),
                ] );
                ?>
            </nav>

            <!-- Hamburger -->
            <button class="nav-toggle" aria-controls="primary-navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>

        </div>
    </div>
</header>

<?php
/**
 * Nav walker: adds .btn-nav class to the last item (Contact).
 */
if ( ! class_exists( 'MCM_Nav_Walker' ) ) :
class MCM_Nav_Walker extends Walker_Nav_Menu {
    public function start_el( &$output, $data_object, $depth = 0, $args = null, $current_object_id = 0 ) {
        $item      = $data_object;
        $classes   = empty( $item->classes ) ? [] : (array) $item->classes;
        $is_last   = in_array( 'contact', array_map( 'strtolower', $classes ) )
                     || strtolower( $item->title ) === 'contact';
        $class_str = implode( ' ', apply_filters( 'nav_menu_css_class', $classes, $item, $args ) );

        $output .= '<li class="' . esc_attr( $class_str ) . '">';

        $atts            = [];
        $atts['href']    = $item->url;
        $atts['class']   = $is_last ? 'btn btn-nav' : '';
        $atts['target']  = ! empty( $item->target ) ? $item->target : '';
        $atts['rel']     = ! empty( $item->xfn ) ? $item->xfn : '';
        $atts['aria-current'] = in_array( 'current-menu-item', $classes ) ? 'page' : '';

        $attrs_str = '';
        foreach ( $atts as $attr => $val ) {
            if ( $val ) $attrs_str .= ' ' . esc_attr( $attr ) . '="' . esc_attr( $val ) . '"';
        }

        $output .= '<a' . $attrs_str . '>' . apply_filters( 'the_title', $item->title, $item->ID ) . '</a>';
    }
}
endif;
