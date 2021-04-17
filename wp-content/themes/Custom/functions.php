<?php

// правильный способ подключить стили и скрипты
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
// add_action('wp_print_styles', 'theme_name_scripts'); // можно использовать этот хук он более поздний
function theme_name_scripts() {
	wp_enqueue_style( 'style.css', get_stylesheet_uri() );
    wp_enqueue_style( 'main_style.css', get_template_directory_uri() . '/css/main_style.css' );
    wp_enqueue_script( 'jQuery', get_template_directory_uri() . '/libs/jquery-3.6.0.min.js' );
	wp_enqueue_script( 'main.js', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true );
}


// отключаем стили woocommerce
// add_filter( 'woocommerce_enqueue_styles', '__return_false' );


