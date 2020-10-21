<?php

function theme_files() {

  wp_enqueue_style('custom-google-fonts', 'https://fonts.googleapis.com/css2?family=Noto+Serif+TC:wght@200;300;400;500;600;700;900');
  wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.0.13/css/all.css');


  if(strstr($_SERVER['SERVER_NAME'], 'localhost')){ 
    wp_enqueue_script('main-webduel-js', 'http://localhost:3000/bundled.js', array("jquery"), '1.0', true);
  }
  else{
    wp_enqueue_script('our-vendor-js', get_theme_file_uri('/bundled-assets/undefined' ), array("jquery"), '1.0', true);
    wp_enqueue_script('main-webduel-js', get_theme_file_uri('/bundled-assets/scripts.84733bf90741fd836a52.js' ), array("jquery"), '1.0', true);
    wp_enqueue_style( 'our-main-styles', get_theme_file_uri('/bundled-assets/styles.84733bf90741fd836a52.css'));
  }
  

}

add_action('wp_enqueue_scripts', 'theme_files');





  add_theme_support( 'post-thumbnails' );

  //add nav menu
 function fig_config(){ 
  register_nav_menus( 
     array(
        "main_menu" => "Main Menu",
        'footer_menu' => "Footer Menu"
     )
     );  

     add_theme_support( "title-tag");   
}

add_action("after_setup_theme", "fig_config", 0);