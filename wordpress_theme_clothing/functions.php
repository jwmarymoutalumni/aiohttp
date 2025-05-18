<?php
function clothing_store_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'clothing-store' ),
    ) );
}
add_action( 'after_setup_theme', 'clothing_store_setup' );

function clothing_store_scripts() {
    wp_enqueue_style( 'clothing-store-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'clothing_store_scripts' );
?>
