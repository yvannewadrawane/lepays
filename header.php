<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8" />
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    
    
    <?php wp_head(); ?>
</head>

<body <?php body_class();?>>
<body class="home blog logged-in admin-bar no-customize-support">
  
<a href="<?php echo home_url( '/' ); ?>">
      <img class="img_header" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo">
      </a>

<?php
  wp_body_open();
  ?>

  <header class="header">

      <?php 
    wp_nav_menu ( array (
    'theme_location' => 'main',
    'container' => "ul",
    //'menu_class' => 'menu', 
    ) ); ?>



      <div class="container">
        <p>LePays </p>
      </div>

  </header>