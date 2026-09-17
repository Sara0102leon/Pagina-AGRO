<?php
if ( ! defined( 'BASE_URL' ) ) {
    define( 'BASE_URL', get_template_directory_uri() );
}

// 1. Habilitar imágenes destacadas y soportes vitales
add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );
add_theme_support( 'menus' );

// 2. Crear el menú exclusivo para "Revistas"
function crear_cpt_revistas() {
    $labels = array(
        'name'               => 'Revistas',
        'singular_name'      => 'Revista',
        'add_new_item'       => 'Añadir Nueva Revista',
        'edit_item'          => 'Editar Revista',
        'all_items'          => 'Todas las Revistas',
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'menu_icon'          => 'dashicons-book-alt',
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
    );
    register_post_type( 'revista', $args );
}
add_action( 'init', 'crear_cpt_revistas' );

// 3. Crear el menú exclusivo para "Podcasts"
function crear_cpt_podcasts() {
    $labels = array(
        'name'               => 'Podcasts',
        'singular_name'      => 'Podcast',
        'add_new_item'       => 'Añadir Nuevo Podcast',
        'edit_item'          => 'Editar Podcast',
        'all_items'          => 'Todos los Podcasts',
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'menu_icon'          => 'dashicons-microphone',
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
    );
    register_post_type( 'podcast', $args );
}
add_action( 'init', 'crear_cpt_podcasts' );
?>