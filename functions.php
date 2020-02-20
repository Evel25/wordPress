<?php
function wpdark_theme_scripts(){
    wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.min.css');
    wp_enqueue_style( 'fontawsome', get_template_directory_uri().'/css/all.min.css');
    wp_enqueue_style( 'main', get_template_directory_uri().'/css/main.css');
    wp_enqueue_style( 'fonts','https://fonts.googleapis.com/css?family=Lato|Pacifico|Roboto&display=swap');

    wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js',array('jquery'),'',true);
    wp_enqueue_script('fontawsome', get_template_directory_uri().'/js/all.min.js','','',true);
    wp_enqueue_script('main', get_template_directory_uri().'/js/main.js',array('jquery'),'',true);
}

// add action toload all the previese scripts
add_action( 'wp_enqueue_scripts', 'wpdark_theme_scripts');

// add thme support for post thumbnails and futured images
// you can also set up the theme nav and more inside this function
function wpdark_setup(){
    add_theme_support( 'post-thumbnails' );
}
add_action( "after_setup_theme", "wpdark_setup" );

// add and initialize my menu
function wpdark_register_menu(){
    register_nav_menus( 
        array(
            'header_menu'=>__('Header_Menu'),
            'extra_menu'=>__('Extra Menu')
        )
        );
}
add_action( 'init', 'wpdark_register_menu' );

?>