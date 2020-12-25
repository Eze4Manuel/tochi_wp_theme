<?php
/**
*Theme Functions
*
*@package Tochi
*/


function tochi_enqueue_scripts(){
  //Registering Assets
  wp_register_style('style-css', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'), 'all');
  wp_register_script('main-js', get_template_directory_uri(). '/asset/main.js', [], filemtime(get_template_directory() . '/asset/main.js'), false);

  //Enqueing Assets
  wp_enqueue_style( 'style-css' );
  wp_enqueue_script( 'main-js' ); 

}
add_action('wp_enqueue_script', 'tochi_enqueue_scripts')
?>
