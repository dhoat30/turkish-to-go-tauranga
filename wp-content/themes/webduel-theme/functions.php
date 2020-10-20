<?php

function theme_files() {

  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Noto+Serif+TC:wght@200;300;400;500;600;700;900');
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');


  if(strstr($_SERVER['SERVER_NAME'], 'localhost')){ 
    wp_enqueue_script('main-webduel-js', 'http://localhost:3000/bundled.js', array("jquery"), '1.0', true);
  }
  else{
    wp_enqueue_script('our-vendor-js', get_theme_file_uri('/bundled-assets/undefined' ), array("jquery"), '1.0', true);
    wp_enqueue_script('main-webduel-js', get_theme_file_uri('/bundled-assets/scripts.0944065745bd9f4d66f8.js' ), array("jquery"), '1.0', true);
    wp_enqueue_style( 'our-main-styles', get_theme_file_uri('/bundled-assets/styles.0944065745bd9f4d66f8.css'));
  }
  

}

add_action('wp_enqueue_scripts', 'theme_files');





  add_theme_support( 'post-thumbnails' );