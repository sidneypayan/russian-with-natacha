<?php

function load_files()
{
  wp_enqueue_script('font-awesome', '//kit.fontawesome.com/071366ef18.js', false, '1', true);
  wp_enqueue_script('scripts', get_template_directory_uri() . '/scripts/main.js', false, '1', true);
  wp_enqueue_style('google-fonts-raleway', '//fonts.googleapis.com/css2?family=Raleway:wght@100;400;500&display=swap');
  wp_enqueue_style('google-fonts-neucha', '//fonts.googleapis.com/css2?family=Neucha&display=swap');
  wp_enqueue_style('google-icons', '//fonts.googleapis.com/icon?family=Material+Icons');
  wp_enqueue_style('styles', get_template_directory_uri() . '/css/main.css', false, '1', 'all');
}

add_action('wp_enqueue_scripts', 'load_files');

// Menu support
// add_theme_support('menus');

// Register menus
register_nav_menu('headerMenuLocation', 'Header Menu Location');

function replace_content($content)
{
  $content = htmlentities($content, null, 'utf-8');
  $content = str_replace("&nbsp;", " ", $content);
  $content = html_entity_decode($content);
  return $content;
}
add_filter('the_content', 'replace_content', 999999999);

add_filter('wp_trim_words', 'replace_content', 999999999);

function theme_wpf11256286_excerpt_length($length)
{

  return 10;
}
add_filter('excerpt_length', 'theme_wpf11256286_excerpt_length');