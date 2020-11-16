<?php

function vissentia_scripts() {

    //CSS
    wp_register_style('vissentia_stylesheet', get_template_directory_uri() . '/assets/css/main.css', array(), 1, 'all');
    wp_enqueue_style('vissentia_stylesheet');

    //JS
    wp_register_script('vissentia-script', get_template_directory_uri() . '/assets/js/main.js', array(), 1, true);
    wp_enqueue_script('vissentia-script');

    //FONT AWESOME
    wp_enqueue_style( 'font_awesome', 'https://use.fontawesome.com/releases/v5.3.1/css/all.css' );

    //Domine font
    wp_enqueue_style('google_web_fonts - domine', 'https://fonts.googleapis.com/css2?family=Domine:wght@400;500;600;700&display=swap');

    //Roboto font
    wp_enqueue_style('google_web_fonts - roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap');

}

add_action('wp_enqueue_scripts', 'vissentia_scripts');


//Theme Options
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');


//Menus
register_nav_menus (

    array(
        'top-menu' => 'Top Menu Location',
        'mobile-menu' => 'Mobile Menu Location',
    )
);


//Custom Image Sizes
add_image_size('blog-large', 1200, 530, true);
add_image_size('blog-small', 340, 220, true);


//Register Sidebars
function my_sidebars() {

    register_sidebar(

        array(
            'name' => 'Blog Sidebar',
            'id' => 'blog-sidebar',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'
        )
    );
}

add_action('widgets_init', 'my_sidebars');


//Excerpt
//length
function my_excerpt_length($length){
    return 23;
}

add_filter('excerpt_length', 'my_excerpt_length');

//dots
function new_excerpt_more($more) {
	return '...';
}

add_filter('excerpt_more', 'new_excerpt_more');