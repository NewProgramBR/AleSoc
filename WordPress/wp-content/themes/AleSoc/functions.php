<?php
    add_theme_support('post-thumbnails');   //Posts thumbnails

    //Custom excerpt
    function get_excerpt($excerpt, $length, $more_char = '...'){
        return mb_strimwidth($excerpt, 0, $length, $more_char);
    }

//    function theme_styles() {
//        //METHOD 1
//        //wp_register_style( 'main-style', get_template_directory_uri() . '/style.css');
//        //wp_enqueue_style( 'main-style');
//
//        //METHOD 2
//        wp_enqueue_style( 'main-style', get_stylesheet_uri() );
//    }
//    add_action( 'wp_enqueue_scripts', 'theme_styles' );
?>
