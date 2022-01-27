<?php
//Theme functions GO HERE

function enqueue_my_styles_and_scripts(){

  //enqueue bootstrap
  wp_enqueue_style('bootstrap-styles', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', array(), '1.0.0', 'all');
  wp_enqueue_script('bootstrap-script', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', array(), '1.0.0', false);




// enqueue Person collator_get_error_code
wp_enqueue_style('my-styles', get_stylesheet_directory_uri() . '/css/master.css', array(), '1.0.0', 'all');
wp_enqueue_style('responsive-styles', get_stylesheet_directory_uri() . '/css/responsive.css', array(), '1.0.0', 'all');


}

add_action('wp_enqueue_scripts','enqueue_my_styles_and_scripts');




function my_theme_setup(){
  register_nav_menus(array(
    'primary' => __('Primary Menu')

  ));
}
add_action('after_setup_theme', 'my_theme_setup');




 ?>
