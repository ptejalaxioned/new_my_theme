<?php
//Menu
register_nav_menus(
  array("primary-menu" => "Top Menu")
);

//Images for Posts
add_action('after_setup_theme', 'my_theme_setup');
function my_theme_setup()
{
  add_theme_support('post-thumbnails');
}
?>