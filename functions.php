<?php 

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site en attendant Yoast pour optimiser le référencement
add_theme_support( 'title-tag' );


// Chargemnt des feuilles de styles 
function my_recipes_enqueue_stylesheets() {
    wp_enqueue_style('reset', get_template_directory_uri() . '/css/reset.css', array(), '1.0');
    wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css', array(), '1.0');
}

add_action('wp_enqueue_scripts','my_recipes_enqueue_stylesheets');


/* Définition des tailles d'images personnalisées */
add_image_size( 'card-illustration', 320, 480, true );


// création des emplacements de menu 
register_nav_menus( array(
    'main'      => 'Menu principal',
    'footer'    => 'Menu de pied de page',
    'social'    => 'Menu des réseaux sociaux'
    )
);