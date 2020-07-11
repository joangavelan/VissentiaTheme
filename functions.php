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
add_image_size('blog-large', 750, 425, true);
add_image_size('blog-small', 300, 200, true);



//Register Sidebars
function my_sidebars() {

    register_sidebar(

        array(
            'name' => 'Page Sidebar',
            'id' => 'page-sidebar',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'
        )

    );

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