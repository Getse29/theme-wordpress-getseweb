<?php
/* Estilos y Scripts  */
function getseweb_enqueue_styles()
{

  /* slicknav */
  /*   wp_enqueue_style('slicknavCSS', get_template_directory_uri() . '/css/slicknav.min.css', array(), '8.0.1'); */

  wp_enqueue_style('slicknavCSS', get_template_directory_uri() . '/css/slicknav.min.css', array(), '8.0.0');

  wp_enqueue_script('slicknavJS', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array('jquery'), '8.0.1', true);

  /* Normalize */
  wp_enqueue_style('normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css', array(), '8.0.1');

  /* Google Fonts */
  wp_enqueue_style('GoogleFonts', 'https://fonts.googleapis.com/css2?family=Montserrat&family=Open+Sans:wght@400;700;800&display=swap', array(), '1.0.0');

  /* Hoja de estilos principal */
  wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0.0');

  /* Hoja scripts principal */
  wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery', 'slicknavJS'), '1.0.0', true);
}


add_action('wp_enqueue_scripts', 'getseweb_enqueue_styles');