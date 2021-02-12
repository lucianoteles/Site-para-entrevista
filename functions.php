<?php

function carrega_scripts(){

    wp_enqueue_style('template', get_template_directory_uri() . '/css/template.css', array(), '1.0'
    , 'all');

    wp_enqueue_script( 'template', get_template_directory_uri() . '/js/template.js', array(), null, true);

    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css', array(), '1.0'
    , 'all');

    wp_enqueue_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js', array('jquery'), null, true);
}

add_action( 'wp_enqueue_scripts', 'carrega_scripts');