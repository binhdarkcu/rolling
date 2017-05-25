<?php
define('TEMPLATE_PATH',get_bloginfo('template_url'));
define('HOME_URL',get_home_url());
define('BlOG_NAME',get_bloginfo('blog_name'));
define('SLOGAN', get_bloginfo('description'));
//add_image_size( 'thumb-service',225,230,true);
//include 'inc/google_functions.php';

add_theme_support('post-thumbnails',array('post','page', 'clients', 'blog', 'products'));
