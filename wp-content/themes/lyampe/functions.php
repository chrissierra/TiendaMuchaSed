<?php
/**
 * Lyampe functions and definitions.
 *
 * @package lyampe
 * @since 1.0.0
 */

define( 'LYAMPE_VERSION', '1.0.0' );

/**
 * Load assets.
 *
 * @since 1.0.0
 */
function lyampe_enqueue() {
    $parent = 'gtl-multipurpose-style';
    $style  = '/style.css';

    // Parent style
    wp_enqueue_style( 
        $parent, 
        get_template_directory_uri() . $style,
        array(),
        LYAMPE_VERSION
    );

    // Child style
    wp_enqueue_style( 
        'lyampe-style', 
        get_stylesheet_directory_uri() . $style, 
        array( $parent ), 
        LYAMPE_VERSION 
    );
}
add_action( 'wp_enqueue_scripts', 'lyampe_enqueue' );

/**
 * Dequeue default Google Fonts
 *
 * @since  1.0.0
 * @return void
 */
function lyampe_dequeue_fonts() {
    wp_dequeue_style( 'gtl-multipurpose-font' );
}
add_action( 'wp_enqueue_scripts', 'lyampe_dequeue_fonts', 15 );

/**
 * Enqueue Google Fonts
 *
 * @since  1.0.0
 * @return void
 */
function lyampe_enqueue_fonts() {
    wp_enqueue_style( 
        'lyampe-fonts', 
        lyampe_fonts_setup(), 
        array(), 
        LYAMPE_VERSION 
    );
}
add_action( 'wp_enqueue_scripts', 'lyampe_enqueue_fonts', 5 );

/**
 * Google Fonts setup
 *
 * @since  1.0.0
 * @return string Google Fonts URL
 */
function lyampe_fonts_setup() {
    $fonts_url = '';
    $fonts     = array();
    $subsets   = 'latin,latin-ext';

    $fonts[] = 'Muli:400,700,300';
    $fonts[] = 'Lato:400,300,700,900,300italic,400italic,700italic';

    $fonts_args = apply_filters( 'lyampe_fonts_setup', array(
        'family' => urlencode( implode( '|', $fonts ) ),
        'subset' => urlencode( $subsets ),
    ), compact( 'fonts', 'subsets' ) );

    return add_query_arg( $fonts_args, 'https://fonts.googleapis.com/css' );
}