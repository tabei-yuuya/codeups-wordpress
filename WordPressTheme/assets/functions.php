<?php
function my_enqueue_scripts() {
    // Google Fonts（preconnect & fontファミリー）
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">';
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
    echo '<link href="https://fonts.googleapis.com/css2?family=Gotu&family=Lato:wght@400;700&family=Noto+Sans+JP:wght@400;500;700&family=Noto+Serif+JP:wght@400;700&display=swap" rel="stylesheet">';

    // CSS
    wp_enqueue_style( 'swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css', array(), null );
    wp_enqueue_style( 'my-style', get_theme_file_uri( '/assets/css/style.css' ), array(), filemtime( get_theme_file_path( '/assets/css/style.css' ) ) );

    // JS
    wp_enqueue_script( 'jquery-cdn', 'https://code.jquery.com/jquery-3.6.0.js', array(), null, true );
    wp_enqueue_script( 'jquery-inview', get_theme_file_uri( '/assets/js/jquery.inview.min.js' ), array('jquery'), null, true );
    wp_enqueue_script( 'my-script', get_theme_file_uri( '/assets/js/script.js' ), array('jquery'), filemtime( get_theme_file_path( '/assets/js/script.js' ) ), true );
}
add_action( 'wp_enqueue_scripts', 'my_enqueue_scripts' );

