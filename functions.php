<?php


function vissentia_scripts() {

    wp_register_style('vissentia_stylesheet', get_template_directory_uri() . '/assets/css/main.css', array(), 1, 'all');
    wp_enqueue_style('vissentia_stylesheet');

    wp_enqueue_script('jquery');

    wp_register_script('vissentia-script', get_template_directory_uri() . '/assets/js/main.js', ['jquery']. 1, true);
    wp_enqueue_script('vissentia-script');

    wp_enqueue_style('google_web_fonts', 'https://fonts.googleapis.com/css2?family=Frank+Ruhl+Libre:wght@500&family=Noto+Sans+HK:wght@400;500;700&family=Nunito+Sans:wght@400;600&display=swap');

}



add_action('wp_enqueue_scripts', 'vissentia_scripts');


