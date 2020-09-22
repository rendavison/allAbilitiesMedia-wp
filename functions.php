<?php

// Load Stylesheets and Javascript
function scripts() {
  wp_register_style('style', get_template_directory_uri() . '/dist/app.css', [], 1, 'all');
  wp_enqueue_style('style');

  wp_enqueue_script('jquery');

  wp_register_script('app', get_template_directory_uri() . '/dist/app.js', ['jquery'], 1, true);
  wp_enqueue_script('app');
}
add_action('wp_enqueue_scripts','scripts');

//Theme Options
add_theme_support('menus');

//Menus
register_nav_menus(
  array(
    'top-buttons' => 'Top Buttons Location',
    'secondary-nav' => 'Secondary Nav Location',
    'see-our-work' => 'See Our Work Location',
    'footer-links' => 'Footer Links Location',
    'mobile-nav' => 'Mobile Nav Location'
  )
);
