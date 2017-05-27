<?php
define('TEMPLATE_PATH',get_bloginfo('template_url'));
define('HOME_URL',get_home_url());
define('BlOG_NAME',get_bloginfo('blog_name'));
define('SLOGAN', get_bloginfo('description'));
//add_image_size( 'thumb-service',225,230,true);
//include 'inc/google_functions.php';

add_theme_support('post-thumbnails',array('post','page', 'about_content', 'blog', 'products'));

include 'inc/load_about.php';

function codession_qtranslatex_string( $content ) {
    $total_lang = substr_count( $content, '[:' );
    $lang = array();
    $start_index = 0;

    if ( $total_lang > 0 ) {
        while( $total_lang-- ) {
            // last language
            if ( $total_lang == 0 ) {
                $lang_code = substr( $content, $start_index + 2, 2 );
                $lang[ $lang_code ] = substr( $content, $start_index + 5 ); 
                break;
            }
            // find the occurance of "[" from start 
            $end_index = strpos( $content, '[:', $start_index + 5 );
            $lang_code = substr( $content, $start_index + 2, 2 );
            if ( $end_index ) {
                $lang[ $lang_code ] = substr( $content, $start_index + 5, $end_index - $start_index - 5 );
                $start_index = $end_index;
            } else {
                return false;
            }
        }
        return $lang;
    } else {
        return false;
    }
}