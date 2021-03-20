<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="pingback" href="<?php echo esc_url(get_bloginfo('pingback')); ?>">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <!-- Menu -->
  <header>
    <nav class="nav">
      <?php
      $args = array(
        'theme_location' => 'menu-principal',
        'container' => 'div',
        'container_class' => 'nav-items'
      );
      wp_nav_menu($args)

      ?>
    </nav>

    <header class="header">
      <!-- Logo -->
      <div class="header__logo">
        <h1>Hola me llamo <span class="header__logo--color"><?php bloginfo('name') ?></span> <br> me dedico a Front
          End
          Web Developer<br>༼ つ ◕_◕ ༽つ </h1>
        <p class="header__logo--description"><?php bloginfo('description') ?></p>
      </div>

    </header>
  </header>