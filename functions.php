<?php

function vegan_files(){
    wp_enqueue_script('bootstrap-js','https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', NULL, 1.0, true);
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');
    wp_enqueue_style('google-fonts',"https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500;600;700&display=swap");
    wp_enqueue_script('font_awesome', "https://kit.fontawesome.com/34bbb27069.js");
    wp_enqueue_style('vegan_main_styles', get_theme_file_uri('style.css'));
}

add_action('wp_enqueue_scripts', 'vegan_files');

function vegan_features() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('cardImage', 178, 178, true);
    add_image_size('titleImage', 463, 463, true);
}

add_action('after_setup_theme','vegan_features');

function vegan_post_types(){
    register_post_type('breakfast', array(
        'supports' => array('editor','thumbnail','title'),
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Breakfast',
            'add_new_item' => 'Add Breakfast New Recipe',
            'edit_item' => 'Edit Breakfast Recipe',
            'all_items' => 'All Breakfast Recipes'
        ),
    ));
    register_post_type('lunch', array(
        'supports' => array('editor','thumbnail','title'),
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Lunch',
            'add_new_item' => 'Add New Lunch Recipe',
            'edit_item' => 'Edit Lunch Recipe',
            'all_items' => 'All Lunch Recipes'
        )
    ));
    register_post_type('dinner', array(
        'supports' => array('editor','thumbnail','title'),
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Dinner',
            'add_new_item' => 'Add New Recipe',
            'edit_item' => 'Edit Dinner Recipe',
            'all_items' => 'All Dinner Recipes'
        )
    ));
    register_post_type('snacks', array(
        'supports' => array('editor','thumbnail','title'),
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Snacks',
            'add_new_item' => 'Add New Recipe',
            'edit_item' => 'Edit Snack Recipe',
            'all_items' => 'All Snack Recipes'
        )
    ));
    register_post_type('juices', array(
        'supports' => array('editor','thumbnail','title'),
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Juices',
            'add_new_item' => 'Add New Recipe',
            'edit_item' => 'Edit Juice Recipe',
            'all_items' => 'All Juice Recipes'
        )
    ));
    register_post_type('blog', array(
        'supports' => array('editor','thumbnail','title'),
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Blog Posts',
            'add_new_item' => 'Add New Blog Post',
            'edit_item' => 'Add New Blog Post',
            'all_items' => 'All Blog Posts'
        )
    ));
    register_post_type('smoothies', array(
        'supports' => array('editor','thumbnail','title'),
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Smoothies',
            'add_new_item' => 'Add New Recipe',
            'edit_item' => 'Edit Smoothie Recipe',
            'all_items' => 'All Smoothie Recipes' 
        )
    ));
    register_post_type('featured', array(
        'supports' => array('editor','thumbnail','title','tags'),
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Featured',
            'add_new_item' => 'Add Feature',
            'edit_item' => 'Edit Feature',
            'all_items' => 'All Featured Articles' 
        )
    ));
}

add_action('init', 'vegan_post_types');

function gp_register_taxonomy_for_object_type() {
    register_taxonomy_for_object_type( 'post_tag', 'breakfast');
    register_taxonomy_for_object_type( 'post_tag', 'lunch');
    register_taxonomy_for_object_type( 'post_tag', 'dinner');
    register_taxonomy_for_object_type( 'post_tag', 'smoothies');
    register_taxonomy_for_object_type( 'post_tag', 'juices');
    register_taxonomy_for_object_type( 'post_tag', 'snacks');
    };

add_action( 'init', 'gp_register_taxonomy_for_object_type' );
