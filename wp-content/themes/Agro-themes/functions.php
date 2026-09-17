<?php
// 0. Definir la constante BASE_URL (URL del tema activo)
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

// Registrar Custom Post Type para Artículos
function registrar_cpt_articulos() {
    $labels = array(
        'name'               => 'Artículos',
        'singular_name'      => 'Artículo',
        'menu_name'          => 'Artículos',
        'add_new'            => 'Añadir Nuevo',
        'add_new_item'       => 'Añadir Nuevo Artículo',
        'edit_item'          => 'Editar Artículo',
        'new_item'           => 'Nuevo Artículo',
        'all_items'          => 'Todos los Artículos',
        'view_item'          => 'Ver Artículo',
        'search_items'       => 'Buscar Artículos',
        'not_found'          => 'No se encontraron artículos',
        'not_found_in_trash' => 'No hay artículos en la papelera'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'articulos'),
        'capability_type'    => 'post',
        'hierarchy'          => false,
        'menu_position'      => 6, // Esto lo ubica cerca de Revistas y Podcasts
        'menu_icon'          => 'dashicons-document', // Un icono de documento para el menú
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'),
        'show_in_rest'       => true, // Para que puedas usar el editor moderno de WordPress
    );

    register_post_type('articulos', $args);
}
add_action('init', 'registrar_cpt_articulos');
?>