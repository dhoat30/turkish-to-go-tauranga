<?php

function theme_files() {

  wp_enqueue_style('custom-google-fonts', 'https://fonts.googleapis.com/css2?family=Commissioner:wght@100;200;300;400;500;600;700;800&display=swap');
  wp_enqueue_script('font-awesome-script', 'https://kit.fontawesome.com/a423fe72dd.js', array("jquery"), '1.0', true);


  if(strstr($_SERVER['SERVER_NAME'], 'localhost')){ 
    wp_enqueue_script('main-webduel-js', 'http://localhost:3000/bundled.js', array("jquery"), '1.0', true);
  }
  else{
    wp_enqueue_script('our-vendor-js', get_theme_file_uri('/bundled-assets/undefined' ), array("jquery"), '1.0', true);
    wp_enqueue_script('main-webduel-js', get_theme_file_uri('/bundled-assets/scripts.04f057ee15f7dc33a5af.js' ), array("jquery"), '1.0', true);
    wp_enqueue_style( 'our-main-styles', get_theme_file_uri('/bundled-assets/styles.04f057ee15f7dc33a5af.css'));
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