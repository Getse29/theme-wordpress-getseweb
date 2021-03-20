<?php
/* Consultas */
require get_template_directory() . '/inc/scripts.php';

/* Register menus */
function getseweb_menus()
{
  register_nav_menus(array(
    'menu-principal' => __('Menu Principal', 'getseweb')
  ));
}
add_action('init', 'getseweb_menus');