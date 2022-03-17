<?php

function vegan_files(){
    wp_enqueue_script('bootstrap-js','https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', NULL, 1.0, true);
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');
    wp_enqueue_style('google-fonts',"https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500;600;700&display=swap");
    wp_enqueue_script('font_awesome', "https://kit.fontawesome.com/34bbb27069.js");
    wp_enqueue_style('vegan_main_styles', get_theme_file_uri('/build/index.css'));
}

add_action('wp_enqueue_scripts', 'vegan_files');

function vegan_features() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('cardImage', 178, 178, true);
    add_image_size('titleImage', 463, 463, true);
}

add_action('after_setup_theme','vegan_features');