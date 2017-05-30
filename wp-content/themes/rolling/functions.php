<?php
define('TEMPLATE_PATH',get_bloginfo('template_url'));
define('HOME_URL',get_home_url());
define('BlOG_NAME',get_bloginfo('blog_name'));
define('SLOGAN', get_bloginfo('description'));
//add_image_size( 'thumb-service',225,230,true);
//include 'inc/google_functions.php';

add_theme_support('post-thumbnails',array('post','page', 'about_content', 'expertise', 'our_team', 'testimonial'));

include 'inc/load_about.php';

//register menu
function register_menu() {
    register_nav_menus( array(
    	'primary_menus' => 'Primary menus'
    ) );
    register_nav_menu('primary_menus',__( 'primary_menus' ));
}
add_action( 'init', 'register_menu' );

if( function_exists('acf_add_options_page') ) {

   acf_add_options_page(array(
    'page_title'  => 'Theme Options',
    'menu_title' => 'Theme Options',
    'menu_slug'  => 'theme-general-settings'
   ));

     acf_add_options_sub_page(array(
      'page_title'  => 'Header',
      'menu_title' => 'Header',
      'parent_slug' => 'theme-general-settings',
     ));
   acf_add_options_sub_page(array(
    'page_title'  => 'Footer',
    'menu_title' => 'Footer',
    'parent_slug' => 'theme-general-settings',
     ));
}
function get_id_by_slug($page_slug, $slug_page_type = 'page') {

  $find_page = get_page_by_path($page_slug, OBJECT, $slug_page_type);
  if ($find_page) {
    return $find_page->ID;
  } else {
    return null;
  }
}